<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
       
    public function index(): string
    {
        return view('view_utama');
    }
    public function login()
    {
        helper('url');
        $session = session();
        if ($session->has('logged_in')) {
            header('Location: ' . base_url('admin/dashboard'));
            exit;
        }
        return view('login');
    }
    public function auth()
    { 
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getEmail($username); 
        if ($user) {  
            if($user["password"] === $password){
                $session = session();
                $session->set('logged_in', true);
                $session->set('username', $user["username"]);
                $session->set('email', $user["email"]);
                return $this->response->setJSON(array(
                    "status"=>"success",
                    "message"=>"Login Berhasil"
                )); 
            }else{
                return $this->response->setJSON(array(
                    "status"=>"failed",
                    "message"=>"password salah",
                    "data"=>$username
                ));  
            } 
        } else {   
            return $this->response->setJSON(array(
                "status"=>"failed",
                "message"=>"Username tidak ditemukan"
            ));  
        }
    }
    
    public function logout()
    {
        $session = session();
        $session->remove('logged_in');
        $session->remove('username');
        $session->remove('email');
        return redirect()->to(base_url('login'));
    }
}
