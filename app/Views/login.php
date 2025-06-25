<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<!-- Mirrored from wowdash.wowtheme7.com/bundlelive/demo/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 15:04:52 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/favicon.png" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/remixicon.css">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/bootstrap.min.css">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/apexcharts.css">
  <!-- Data Table css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/dataTables.min.css">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/editor-katex.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/editor.atom-one-dark.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/editor.quill.snow.css">
  <!-- Date picker css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/flatpickr.min.css">
  <!-- Calendar css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/full-calendar.css">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/jquery-jvectormap-2.0.5.css">
  <!-- Popup css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/magnific-popup.css">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/slick.css">
  <!-- prism css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/prism.css">
  <!-- file upload css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/file-upload.css">
  
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/audioplayer.css">
  <!-- main css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/sweetalert2.min.css">
</head>
  <body>

<section class="auth bg-base d-flex flex-wrap">  
    <div class="auth-left d-lg-block d-none">
        <div class="d-flex align-items-center flex-column h-100 justify-content-center">
            <img src="<?= base_url() ?>assets/images/auth/auth-img.png" alt="">
        </div>
    </div>
    <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
        <div class="max-w-464-px mx-auto w-100">
            <div>
                <a href="index-2.html" class="mb-40">
                    <img src="<?= base_url() ?>assets/images/logo-1.png" alt="">
                </a>
                <h4 class="mb-12">Sign in Aplikasi</h4>
                <p class="mb-32 text-secondary-light text-lg">Selamat datang kembali, masukan email dan password</p>
            </div> 
            <div class="icon-field mb-16">
                <span class="icon top-50 translate-middle-y">
                    <iconify-icon icon="mage:email"></iconify-icon>
                </span>
                <input id="email" type="email" class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Email">
            </div>
            <div class="position-relative mb-20">
                <div class="icon-field">
                    <span class="icon top-50 translate-middle-y">
                        <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                    </span> 
                    <input id="password" type="password" class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Password">
                </div>
                <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#password"></span>
            </div> 
            <button id="submit" type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32 mb-40"> Sign In</button> 
        </div>
    </div>
</section>

  <!-- jQuery library js -->
  <script src="<?= base_url() ?>assets/js/lib/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="<?= base_url() ?>assets/js/lib/bootstrap.bundle.min.js"></script>
  <!-- Apex Chart js -->
  <script src="<?= base_url() ?>assets/js/lib/apexcharts.min.js"></script>
  <!-- Data Table js -->
  <script src="<?= base_url() ?>assets/js/lib/dataTables.min.js"></script>
  <!-- Iconify Font js -->
  <script src="<?= base_url() ?>assets/js/lib/iconify-icon.min.js"></script>
  <!-- jQuery UI js -->
  <script src="<?= base_url() ?>assets/js/lib/jquery-ui.min.js"></script>
  <!-- Vector Map js -->
  <script src="<?= base_url() ?>assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
  <script src="<?= base_url() ?>assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Popup js -->
  <script src="<?= base_url() ?>assets/js/lib/magnifc-popup.min.js"></script>
  <!-- Slick Slider js -->
  <script src="<?= base_url() ?>assets/js/lib/slick.min.js"></script>
  <!-- prism js -->
  <script src="<?= base_url() ?>assets/js/lib/prism.js"></script>
  <!-- file upload js -->
  <script src="<?= base_url() ?>assets/js/lib/file-upload.js"></script>
  <!-- audioplayer -->
  <script src="<?= base_url() ?>assets/js/lib/audioplayer.js"></script>
  
  <!-- main js -->
  <script src="<?= base_url() ?>assets/js/app.js"></script>

  <script src="<?= base_url() ?>assets/js/lib/sweetalert2.min.js"></script>

<script>
    // ================== Password Show Hide Js Start ==========
    function initializePasswordToggle(toggleSelector) {
        $(toggleSelector).on('click', function() {
            $(this).toggleClass("ri-eye-off-line");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }
    // Call the function
    initializePasswordToggle('.toggle-password');
    // ========================= Password Show Hide Js End ===========================
    
    $("#submit").on("click", function(){ 

        //Cek input email
        if($("#email").val() === ""){
            Swal.fire({
                icon: 'error',
                text: "Masukan email terlebih dahulu", 
                confirmButtonColor: "#3085d6", 
            }).then((result) => { 
                swal.close();
                setTimeout(() => $("#email").focus(), 300);  
            });
            return false;
        }


        //Cek input password
        if($("#password").val() === ""){
            Swal.fire({
                icon: 'error',
                text: "Masukan password terlebih dahulu", 
                confirmButtonColor: "#3085d6", 
            }).then((result) => { 
                swal.close();
                setTimeout(() => $("#password").focus(), 300);  
            });
            return false;
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url("login/auth")?>",
            data: {
                username: $("#email").val(),
                password: $("#password").val(),
            }, 
            success: function (data) {
                if(data["status"] === "success"){
                    Swal.fire({
                        icon: 'success',
                        text: "Login Berhasil", 
                        confirmButtonColor: "#3085d6", 
                    }).then((result) => { 
                        swal.close();
                        ;
                        setTimeout(() => window.location.href = '<?=base_url("admin/dashboard")?>', 300);  
                    });
                }else{
                    Swal.fire({
                        icon: 'error',
                        text: data["message"], 
                        confirmButtonColor: "#3085d6", 
                    });
                    console.log(data["message"])
                    console.log(data)
                } 
            },
            error: function(xhr, textStatus, errorThrown){    
                console.log(xhr["responseJSON"]["message"]) 
                Swal.fire({
                    icon: 'error',
                    text: xhr["responseJSON"]["message"], 
                    confirmButtonColor: "#3085d6", 
                });
            }
        });
    })
  
</script>

</body> 
</html>
