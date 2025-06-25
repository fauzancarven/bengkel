<?= $this->extend('admin/template'); ?> 
<?= $this->section('content'); ?>
<div class="dashboard-main-body">
  <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Service</h6>
    <ul class="d-flex align-items-center gap-2">
      <li class="fw-medium">
        <a href="<?= base_url("admin/dashboard") ?>" class="d-flex align-items-center gap-1 hover-text-primary">
          <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
          Dashboard
        </a>
      </li> 
      <li>-</li>
      <li class="fw-medium">Service</li>
    </ul>
  </div>  
  <div class="card h-100 p-0 radius-12">
      <div
          class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center flex-wrap gap-3 justify-content-between">
          <div class="d-flex align-items-center flex-wrap gap-3">
              <span class="text-md fw-medium text-secondary-light mb-0">Show</span>
              <select id="page-produk" class="form-select form-select-sm w-auto ps-12 py-6 radius-12 h-40-px">
                  <option value="5" selected>5</option>
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
              </select>
              <div class="navbar-search">
                  <input id="search-produk" type="text" class="bg-base h-40-px w-auto" name="search" placeholder="Search">
                  <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
              </div>
              <select class="d-none form-select form-select-sm w-auto ps-12 py-6 radius-12 h-40-px">
                  <option>Status</option>
                  <option>Active</option>
                  <option>Inactive</option>
              </select>
          </div>
          <button id="btn-add-service-modal"
              class="btn btn-primary text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2">
              <iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>
              Add Service
          </button>
      </div>
      <div class="card-body p-24">
          <div class="table-responsive scroll-sm">
              <table class="table bordered-table sm-table mb-0" style="width:100%" id="tbl-produk">
                  <thead>
                      <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Tanggal</th>
                          <th scope="col">Pelanggan</th>
                          <th scope="col">Kendaraan</th>
                          <th scope="col">Status</th> 
                          <th scope="col">Total</th>
                          <th scope="col" class="text-center">Action</th>
                      </tr>
                  </thead>
                  <tbody> 
                    <tr>
                        <td>1</td>
                        <td>25 Jan 2024	</td>
                        <td>
                          <div class="d-flex flex-column">  
                            <h6 class="text-md mb-0 fw-normal">Fauzan Caren</h6>
                            <div class="d-flex text-secondary-light fw-normal gap-1">  
                              <iconify-icon icon="solar:phone-calling-broken" class="icon text-xl line-height-1"></iconify-icon>
                              <span class="text-sm">0895352992663</span> 
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column">  
                            <h6 class="text-md mb-0 fw-normal">Toyota Avanza</h6>
                            <span class=" text-secondary-light fw-normaltext-sm">B 1234 GSF</span>
                          </div>
                        </td>
                        <td>
                          <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pengerjaan</span>
                        </td>
                        <td>Rp. 1.000.000</td> 
                        <td>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                          </a>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                          </a>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>25 Jan 2024	</td>
                        <td>
                          <div class="d-flex flex-column">  
                            <h6 class="text-md mb-0 fw-normal">Fauzan Caren</h6>
                            <div class="d-flex text-secondary-light fw-normal gap-1">  
                              <iconify-icon icon="solar:phone-calling-broken" class="icon text-xl line-height-1"></iconify-icon>
                              <span class="text-sm">0895352992663</span> 
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column">  
                            <h6 class="text-md mb-0 fw-normal">Toyota Avanza</h6>
                            <span class=" text-secondary-light fw-normaltext-sm">B 1234 GSF</span>
                          </div>
                        </td>
                        <td>
                          <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Selesai</span>
                        </td>
                        <td>Rp. 1.000.000</td> 
                        <td>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                          </a>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                          </a>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>25 Jan 2024	</td>
                        <td>
                          <div class="d-flex flex-column">  
                            <h6 class="text-md mb-0 fw-normal">Fauzan Caren</h6>
                            <div class="d-flex text-secondary-light fw-normal gap-1">  
                              <iconify-icon icon="solar:phone-calling-broken" class="icon text-xl line-height-1"></iconify-icon>
                              <span class="text-sm">0895352992663</span> 
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column">  
                            <h6 class="text-md mb-0 fw-normal">Toyota Avanza</h6>
                            <span class=" text-secondary-light fw-normaltext-sm">B 1234 GSF</span>
                          </div>
                        </td>
                        <td>
                          <span class="bg-primary-light text-primary-main px-24 py-4 rounded-pill fw-medium text-sm">Baru</span>
                        </td>
                        <td>Rp. 1.000.000</td> 
                        <td>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                          </a>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                          </a>
                          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                          </a>
                        </td>
                    </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<!-- Modal add Start -->
<div class="modal fade" id="modal-add-service" tabindex="-1" aria-labelledby="modal-add-serviceLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="modal-add-serviceLabel">Tambah Service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24"> 
                <!-- Form Wizard Start -->
                <div class="form-wizard"> 
                    <div class="form-wizard-header overflow-x-auto scroll-sm pb-8 my-32">
                        <ul class="list-unstyled form-wizard-list">
                            <li class="form-wizard-list__item active">
                                <div class="form-wizard-list__line">
                                    <span class="count">1</span>
                                </div>
                                <span class="text text-xs fw-semibold">Pelanggan</span>
                            </li>
                            <li class="form-wizard-list__item">
                                <div class="form-wizard-list__line">
                                    <span class="count">2</span>
                                </div>
                                <span class="text text-xs fw-semibold">Kendaraan</span>
                            </li>
                            <li class="form-wizard-list__item">
                                <div class="form-wizard-list__line">
                                    <span class="count">3</span>
                                </div>
                                <span class="text text-xs fw-semibold">Keluhan</span>
                            </li>
                            <li class="form-wizard-list__item">
                                <div class="form-wizard-list__line">
                                    <span class="count">4</span>
                                </div>
                                <span class="text text-xs fw-semibold">Add Location</span>
                            </li>
                            <li class="form-wizard-list__item">
                                <div class="form-wizard-list__line">
                                    <span class="count">5</span>
                                </div>
                                <span class="text text-xs fw-semibold">Completed</span>
                            </li>
                        </ul>
                    </div>

                    <fieldset class="wizard-fieldset show"> 
                        <div class="row gy-3">
                            <div class="col-12"> 
                              <div class="d-flex gap-2">
                                <div class="form-check checked-primary d-flex align-items-center gap-2">
                                    <input class="form-check-input" type="radio" name="radio" id="radio11" checked>
                                    <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="radio11"> Pelanggan Baru </label>
                                </div>
                                <div class="form-check checked-primary d-flex align-items-center gap-2">
                                    <input class="form-check-input" type="radio" name="radio" id="radio12">
                                    <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="radio12"> Pelanggan Lama </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Cari Pelanggan</label> 
                                <select class="js-example-basic-single" style="width:100%" placeholder="cari pelanggan" id="select-pelanggan">
                                  <option value="AL">Alabama</option> 
                                  <option value="WY">Wyoming</option>
                                </select> 
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Nama</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control wizard-required" placeholder="Masukan Nama" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Telp</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control wizard-required" placeholder="Masukan Telp" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <div class="position-relative">
                                    <input type="email" class="form-control" placeholder="Masukan Email">
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Alamat</label>
                                <div class="position-relative">
                                    <input type="email" class="form-control" placeholder="Masukan Alamat">
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div> 
                            <div class="form-group text-end">
                                <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                            </div>
                        </div>
                    </fieldset>	

                    <fieldset class="wizard-fieldset">
                        <h6 class="text-md text-neutral-500">Account Information</h6>
                        <div class="row gy-3">
                            <div class="col-12">
                                <label class="form-label">User Name*</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control wizard-required" placeholder="Enter User Name" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label">Card Number*</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control wizard-required" placeholder="Enter Card Number " required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label">Card Expiration(MM/YY)*</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control wizard-required" placeholder="Enter Card Expiration" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label">CVV Number*</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control wizard-required" placeholder="CVV Number" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password*</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control wizard-required" placeholder="Enter Password" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                            </div>
                        </div>
                    </fieldset>	

                    <fieldset class="wizard-fieldset">
                        <h6 class="text-md text-neutral-500">Bank Information</h6>
                        <div class="row gy-3">
                            <div class="col-sm-6">
                                <label class="form-label">Bank Name*</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control wizard-required" placeholder="Enter Bank Name" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Branch Name*</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control wizard-required" placeholder="Enter Branch Name" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Account Name*</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control wizard-required" placeholder="Enter Account Name" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Account Number*</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control wizard-required" placeholder="Enter Account Number" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                            </div>
                        </div>
                    </fieldset>	

                    <fieldset class="wizard-fieldset">
                        <h6 class="text-md text-neutral-500">Payment Information</h6>
                        <div class="row gy-3">
                            <div class="col-sm-12">
                                <label class="form-label">Holder Name*</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control wizard-required" placeholder="Enter Holder Name" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Card Number*</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control wizard-required" placeholder="Enter Card Number" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">CVC Number*</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control wizard-required" placeholder="CVC Number" required>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Expiry Date*</label>
                                <div class="row gy-4">
                                    <div class="col-sm-4">
                                        <div class="position-relative">
                                            <select class="form-control form-select">
                                                <option value="">Date</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                                <option value="">8</option>
                                                <option value="">9</option>
                                                <option value="">10</option>
                                                <option value="">11</option>
                                                <option value="">12</option>
                                                <option value="">13</option>
                                                <option value="">14</option>
                                                <option value="">15</option>
                                                <option value="">16</option>
                                                <option value="">17</option>
                                                <option value="">18</option>
                                                <option value="">19</option>
                                                <option value="">20</option>
                                                <option value="">21</option>
                                                <option value="">22</option>
                                                <option value="">23</option>
                                                <option value="">24</option>
                                                <option value="">25</option>
                                                <option value="">26</option>
                                                <option value="">27</option>
                                                <option value="">28</option>
                                                <option value="">29</option>
                                                <option value="">30</option>
                                                <option value="">31</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="position-relative">
                                            <select class="form-control form-select">
                                                <option value="">Month</option>
                                                <option value="">jan</option>
                                                <option value="">Feb</option>
                                                <option value="">March</option>
                                                <option value="">April</option>
                                                <option value="">May</option>
                                                <option value="">June</option>
                                                <option value="">Jully</option>
                                                <option value="">August</option>
                                                <option value="">Sept</option>
                                                <option value="">Oct</option>
                                                <option value="">Nov</option>
                                                <option value="">Dec</option>	
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="position-relative">
                                            <select class="form-control form-select">
                                                <option value="">Years</option>
                                                <option value="">2019</option>
                                                <option value="">2020</option>
                                                <option value="">2021</option>
                                                <option value="">2022</option>
                                                <option value="">2023</option>
                                                <option value="">2024</option>
                                                <option value="">2025</option>
                                                <option value="">2026</option>
                                                <option value="">2027</option>
                                                <option value="">2028</option>
                                                <option value="">2029</option>
                                                <option value="">2030</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                            </div>
                        </div>
                    </fieldset>	

                    <fieldset class="wizard-fieldset">
                        <div class="text-center mb-40">
                            <img src="assets/images/gif/success-img3.gif" alt="" class="gif-image mb-24">
                            <h6 class="text-md text-neutral-600">Congratulations </h6>
                            <p class="text-neutral-400 text-sm mb-0">Well done! You have successfully completed.</p>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-end gap-8">
                            <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                            <button type="button" class="form-wizard-submit btn btn-primary-600 px-32">Publish</button>
                        </div>
                    </fieldset>	 
                </div>
                <!-- Form Wizard End --> 
            </div>
        </div>
    </div>
</div>
<!-- Modal add End --> 
<?= $this->endSection(); ?>
<?= $this->section('jquery'); ?>

<script> 
$("#btn-add-service-modal").click(function() {
    $("#modal-add-service").modal("show");
});
 
      // =============================== Wizard Step Js Start ================================
      $(document).ready(function() {
          // click on next button
          $('.form-wizard-next-btn').on("click", function() {
              var parentFieldset = $(this).parents('.wizard-fieldset');
              var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
              var next = $(this);
              var nextWizardStep = true;
              parentFieldset.find('.wizard-required').each(function(){
                  var thisValue = $(this).val();

                  if( thisValue == "") {
                      $(this).siblings(".wizard-form-error").show();
                      nextWizardStep = false;
                  }
                  else {
                      $(this).siblings(".wizard-form-error").hide();
                  }
              });
              if( nextWizardStep) {
                  next.parents('.wizard-fieldset').removeClass("show","400");
                  currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
                  next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
                  $(document).find('.wizard-fieldset').each(function(){
                      if($(this).hasClass('show')){
                          var formAtrr = $(this).attr('data-tab-content');
                          $(document).find('.form-wizard-list .form-wizard-step-item').each(function(){
                              if($(this).attr('data-attr') == formAtrr){
                                  $(this).addClass('active');
                                  var innerWidth = $(this).innerWidth();
                                  var position = $(this).position();
                                  $(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                              }else{
                                  $(this).removeClass('active');
                              }
                          });
                      }
                  });
              }
          });
          //click on previous button
          $('.form-wizard-previous-btn').on("click",function() {
              var counter = parseInt($(".wizard-counter").text());;
              var prev =$(this);
              var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
              prev.parents('.wizard-fieldset').removeClass("show","400");
              prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
              currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
              $(document).find('.wizard-fieldset').each(function(){
                  if($(this).hasClass('show')){
                      var formAtrr = $(this).attr('data-tab-content');
                      $(document).find('.form-wizard-list .form-wizard-step-item').each(function(){
                          if($(this).attr('data-attr') == formAtrr){
                              $(this).addClass('active');
                              var innerWidth = $(this).innerWidth();
                              var position = $(this).position();
                              $(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                          }else{
                              $(this).removeClass('active');
                          }
                      });
                  }
              });
          });
          //click on form submit button
          $(document).on("click",".form-wizard .form-wizard-submit" , function(){
              var parentFieldset = $(this).parents('.wizard-fieldset');
              var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
              parentFieldset.find('.wizard-required').each(function() {
                  var thisValue = $(this).val();
                  if( thisValue == "" ) {
                      $(this).siblings(".wizard-form-error").show();
                  }
                  else {
                      $(this).siblings(".wizard-form-error").hide();
                  }
              });
          });
          // focus on input field check empty or not
          // $(".form-control").on('focus', function(){
          //     var tmpThis = $(this).val();
          //     if(tmpThis == '' ) {
          //         $(this).parent().addClass("focus-input");
          //     }
          //     else if(tmpThis !='' ){
          //         $(this).parent().addClass("focus-input");
          //     }
          // }).on('blur', function(){
          //     var tmpThis = $(this).val();
          //     if(tmpThis == '' ) {
          //         $(this).parent().removeClass("focus-input");
          //         $(this).siblings(".wizard-form-error").show();
          //     }
          //     else if(tmpThis !='' ){
          //         $(this).parent().addClass("focus-input");
          //         $(this).siblings(".wizard-form-error").hide();
          //     }
          // });
          
          $('#select-pelanggan').select2({
              dropdownParent: $('#modal-add-service .modal-body')
          });
      });
      // =============================== Wizard Step Js End ================================
 
</script>

<?= $this->endSection(); ?>