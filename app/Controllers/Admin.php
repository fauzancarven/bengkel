<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\ProdukModel;

class Admin extends BaseController
{
    public function __construct()
    {
        helper('url');
        $session = session();
        if (!$session->has('logged_in')) {
            header('Location: ' . base_url('login'));
            exit;
        }
    }
    public function index(): string
    {
        return view('admin/dashboard');
    } 
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }
    public function pelanggan_get($id)
    {
        $pelangganModel = new PelangganModel();
        
        $pelanggan = $pelangganModel->getData($id);
        if($pelanggan){ 
            return $this->response->setJSON(array(
                "status"=>"success",
                "message"=>"berhasil mengambil data",
                "data"=>$pelanggan
            )); 
        }else{
              return $this->response->setJSON(array(
                "status"=>"failed",
                "message"=>"gagal mengambil data"
            )); 
        } 
    }
    public function pelanggan_table()
    { 
        $pelangganModel = new PelangganModel(); 
        $draw = $this->request->getPost('draw');
        $start = $this->request->getPost('start');
        $length = $this->request->getPost('length');
        $search = $this->request->getPost('search'); 
        $data = $pelangganModel->like('name',$search)
            ->orLike('email',$search)
            ->orLike('telp',$search)
            ->orLike('address',$search) 
                        ->findAll(); 

        $filteredData = array_slice($data, $start, $length);
 
        $result = [];
        foreach ($filteredData as $row) { 
            $result[] = [
                'id' => $row["id"],
                'name' => $row["name"],
                'email' => $row["email"],
                'telp' => $row["telp"],
                'address' => $row["address"]
            ];
        }

        return $this->response->setJSON([
            'draw' => $draw,
            'recordsTotal' => count($data),
            'recordsFiltered' => count($data),
            'data' => $result
        ]);
    }
    public function pelanggan_add()
    { 
        $data = $this->request->getPost(); 
        $pelangganModel = new PelangganModel();
        if($pelangganModel->insertData($data)){
             return $this->response->setJSON(array(
                    "status"=>"success",
                    "message"=>"berhasil insert data"
                )); 
        }else{
              return $this->response->setJSON(array(
                    "status"=>"failed",
                    "message"=>"gagal insert data"
                )); 
        }
    }
    public function pelanggan_edit($id)
    { 
        $data = $this->request->getPost(); 
        $pelangganModel = new PelangganModel(); 
        if($pelangganModel->update($id, $data)){
             return $this->response->setJSON(array(
                    "status"=>"success",
                    "message"=>"berhasil update data"
                )); 
        }else{
              return $this->response->setJSON(array(
                    "status"=>"failed",
                    "message"=>"gagal update data"
                )); 
        }
    }
    public function pelanggan_delete($id)
    {  
        $pelangganModel = new PelangganModel();
        if($pelangganModel->delete($id)){
             return $this->response->setJSON(array(
                    "status"=>"success",
                    "message"=>"berhasil delete data"
                )); 
        }else{
              return $this->response->setJSON(array(
                    "status"=>"failed",
                    "message"=>"gagal delete data"
                )); 
        }
    }


    public function produk()
    {
        return view('admin/produk');
    } 
    public function produk_get($id)
    {
        $produkModel = new ProdukModel();
        
        $produk = $produkModel->getData($id);
        if($produk){ 
            return $this->response->setJSON(array(
                "status"=>"success",
                "message"=>"berhasil mengambil data",
                "data"=>$produk
            )); 
        }else{
              return $this->response->setJSON(array(
                "status"=>"failed",
                "message"=>"gagal mengambil data"
            )); 
        } 
    }
    public function produk_table()
    { 
        $produkModel = new ProdukModel(); 
        $draw = $this->request->getPost('draw');
        $start = $this->request->getPost('start');
        $length = $this->request->getPost('length');
        $search = $this->request->getPost('search'); 
        $data = $produkModel->like('name',$search)
            ->orLike('category',$search)
            ->orLike('satuan',$search)
            ->orLike('harga',$search) 
                        ->findAll(); 

        $filteredData = array_slice($data, $start, $length);
 
        $result = [];
        foreach ($filteredData as $row) { 
            $result[] = [
                'id' => $row["id"],
                'name' => $row["name"],
                'category' => $row["category"],
                'satuan' => $row["satuan"],
                'harga' => $row["harga"]
            ];
        }

        return $this->response->setJSON([
            'draw' => $draw,
            'recordsTotal' => count($data),
            'recordsFiltered' => count($data),
            'data' => $result
        ]);
    }
    public function produk_add()
    { 
        $data = $this->request->getPost(); 
        $produkModel = new ProdukModel();
        if($produkModel->insertData($data)){
             return $this->response->setJSON(array(
                    "status"=>"success",
                    "message"=>"berhasil insert data"
                )); 
        }else{
              return $this->response->setJSON(array(
                    "status"=>"failed",
                    "message"=>"gagal insert data"
                )); 
        }
    }
    public function produk_edit($id)
    { 
        $data = $this->request->getPost(); 
        $produkModel = new ProdukModel(); 
        if($produkModel->update($id, $data)){
             return $this->response->setJSON(array(
                    "status"=>"success",
                    "message"=>"berhasil update data"
                )); 
        }else{
              return $this->response->setJSON(array(
                    "status"=>"failed",
                    "message"=>"gagal update data"
                )); 
        }
    }
    public function produk_delete($id)
    {  
        $produkModel = new ProdukModel();
        if($produkModel->delete($id)){
             return $this->response->setJSON(array(
                    "status"=>"success",
                    "message"=>"berhasil delete data"
                )); 
        }else{
              return $this->response->setJSON(array(
                    "status"=>"failed",
                    "message"=>"gagal delete data"
                )); 
        }
    }

    public function service()
    {
        return view('admin/service');
    }
}
