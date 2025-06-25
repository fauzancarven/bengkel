<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<!-- Mirrored from wowdash.wowtheme7.com/bundlelive/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 15:03:20 GMT -->
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
  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
  <body>
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="index-2.html" class="sidebar-logo">
      <img src="<?= base_url() ?>assets/images/logo-1.png" alt="site logo" class="light-logo">
      <img src="<?= base_url() ?>assets/images/logo-1-light.png" alt="site logo" class="dark-logo">
      <img src="<?= base_url() ?>assets/images/logo-icon.png" alt="site logo" class="logo-icon">
    </a>
  </div>
  <div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu"> 
      <li>
        <a href="<?= base_url("admin/dashboard") ?>">
          <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sidebar-menu-group-title">Master Data</li>
      <li>
        <a href="<?= base_url("admin/pelanggan") ?>">
          <iconify-icon icon="solar:user-id-broken" class="menu-icon"></iconify-icon>
          <span>Data Pelanggan</span>
        </a>
      </li>
      <li>
        <a href="<?= base_url("admin/produk") ?>">
          <iconify-icon icon="solar:box-broken" class="menu-icon"></iconify-icon>
          <span>Data Produk</span> 
        </a>
      </li> 
      <li class="sidebar-menu-group-title">Application</li>
      <li>
        <a href="<?= base_url("admin/service") ?>">
          <iconify-icon icon="solar:lightbulb-minimalistic-broken" class="menu-icon"></iconify-icon>
          <span>Service</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

<main class="dashboard-main">
  <div class="navbar-header">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-4">
        <button type="button" class="sidebar-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
          <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
        </button>
        <button type="button" class="sidebar-mobile-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
        </button> 
      </div>
    </div>
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-3">
        <button type="button" data-theme-toggle class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
       
        <div class="dropdown">
          <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
            <img src="<?= base_url() ?>assets/images/user.png" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-2">Shaidul Islam</h6>
                <span class="text-secondary-light fw-medium text-sm">Admin</span>
              </div>
              <button type="button" class="hover-text-danger">
                <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon> 
              </button>
            </div>
            <ul class="to-top-list">
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="view-profile.html"> 
                <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>  My Profile</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="email.html"> 
                <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Inbox</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="company.html"> 
                <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>  Setting</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3" href="javascript:void(0)"> 
                <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out</a>
              </li>
            </ul>
          </div>
        </div><!-- Profile dropdown end -->
      </div>
    </div>
  </div>
</div> 
  <?= $this->renderSection('content'); ?> 

  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
    </div>
  </div>
</footer>
</main>
  
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
  
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- main js -->
  <script src="<?= base_url() ?>assets/js/app.js"></script>
  <script src="<?= base_url() ?>assets/js/lib/sweetalert2.min.js"></script>
 

  <?= $this->renderSection('jquery'); ?> 
</body>

<!-- Mirrored from wowdash.wowtheme7.com/bundlelive/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 15:03:20 GMT -->
</html>