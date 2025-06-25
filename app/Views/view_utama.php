<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<!-- Mirrored from wowdash.wowtheme7.com/bundlelive/demo/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 15:04:52 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="assets/css/remixicon.css">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="assets/css/lib/apexcharts.css">
  <!-- Data Table css -->
  <link rel="stylesheet" href="assets/css/lib/dataTables.min.css">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="assets/css/lib/editor-katex.min.css">
  <link rel="stylesheet" href="assets/css/lib/editor.atom-one-dark.min.css">
  <link rel="stylesheet" href="assets/css/lib/editor.quill.snow.css">
  <!-- Date picker css -->
  <link rel="stylesheet" href="assets/css/lib/flatpickr.min.css">
  <!-- Calendar css -->
  <link rel="stylesheet" href="assets/css/lib/full-calendar.css">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="assets/css/lib/jquery-jvectormap-2.0.5.css">
  <!-- Popup css -->
  <link rel="stylesheet" href="assets/css/lib/magnific-popup.css">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="assets/css/lib/slick.css">
  <!-- prism css -->
  <link rel="stylesheet" href="assets/css/lib/prism.css">
  <!-- file upload css -->
  <link rel="stylesheet" href="assets/css/lib/file-upload.css">
  
  <link rel="stylesheet" href="assets/css/lib/audioplayer.css">
  <!-- main css -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
  <body>

<section class="auth bg-base d-flex flex-wrap">  
    <div class="auth-left d-lg-block d-none">
        <div class="d-flex align-items-center flex-column h-100 justify-content-center">
            <img src="assets/images/logo-1.png" alt="" width="500px">
            <img src="assets/images/auth/car.png" alt="">
        </div>
    </div>
    <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
        <div class="max-w-464-px mx-auto w-100"> 
            <p class="mb-32 text-secondary-light text-lg">Selamat datang,<br>Solusi perawatan dan perbaikan kendaraan anda</p>  

            <div class="card h-174 radius-12 bg-gradient-primary text-center shadow my-3 ">
                <div class="card-body p-24">
                    <div class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-primary-600 text-white mb-16 radius-12">
                        <iconify-icon icon="ri:computer-fill" class="h5 mb-0"></iconify-icon> 
                    </div>
                    <h6 class="mb-8">Menu Admin</h6>
                    <p class="card-text mb-8 text-secondary-light">masuk untuk mengelola data pelanggan dan service</p>
                    <a class="btn btn-primary-100 text-white text-primary-600 px-12 py-10 d-inline-flex align-items-center gap-2" href="<?= base_url("login") ?>"> 
                        Masuk Admin<iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon> 
                    </a>
                </div>
            </div>
            <div class="card h-174 radius-12 bg-gradient-purple text-center shadow">
                <div class="card-body p-24">
                    <div class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-lilac-600 text-white mb-16 radius-12">
                        <iconify-icon icon="solar:sort-by-time-bold" class="h5 mb-0"></iconify-icon> 
                    </div>
                    <h6 class="mb-8">Cek Status</h6>
                    <p class="card-text mb-8 text-secondary-light">Lihat status pengerjaan kendaraan anda</p>
                    <a class="btn btn-danger-100 text-white text-danger-600 px-12 py-10 d-inline-flex align-items-center gap-2" href="<?= base_url("cekstatus") ?>"> 
                        Cek Sekarang<iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- jQuery library js -->
  <script src="assets/js/lib/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
  <!-- Apex Chart js -->
  <script src="assets/js/lib/apexcharts.min.js"></script>
  <!-- Data Table js -->
  <script src="assets/js/lib/dataTables.min.js"></script>
  <!-- Iconify Font js -->
  <script src="assets/js/lib/iconify-icon.min.js"></script>
  <!-- jQuery UI js -->
  <script src="assets/js/lib/jquery-ui.min.js"></script>
  <!-- Vector Map js -->
  <script src="assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
  <script src="assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Popup js -->
  <script src="assets/js/lib/magnifc-popup.min.js"></script>
  <!-- Slick Slider js -->
  <script src="assets/js/lib/slick.min.js"></script>
  <!-- prism js -->
  <script src="assets/js/lib/prism.js"></script>
  <!-- file upload js -->
  <script src="assets/js/lib/file-upload.js"></script>
  <!-- audioplayer -->
  <script src="assets/js/lib/audioplayer.js"></script>
  
  <!-- main js -->
  <script src="assets/js/app.js"></script>

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
</script>

</body>
 </html>
