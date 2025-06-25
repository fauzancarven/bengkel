<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Pelanggan</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="<?= base_url("admin/dashboard") ?>" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Pelanggan</li>
        </ul>
    </div>
    <div class="card h-100 p-0 radius-12">
        <div
            class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center flex-wrap gap-3 justify-content-between">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <span class="text-md fw-medium text-secondary-light mb-0">Show</span>
                <select id="page-pelanggan" class="form-select form-select-sm w-auto ps-12 py-6 radius-12 h-40-px">
                    <option value="5" selected>5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <div class="navbar-search">
                    <input id="search-pelanggan" type="text" class="bg-base h-40-px w-auto" name="search" placeholder="Search">
                    <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                </div>
                <select class="d-none form-select form-select-sm w-auto ps-12 py-6 radius-12 h-40-px">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
            <button id="btn-add-pelanggan-modal"
                class="btn btn-primary text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2">
                <iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>
                Add Customer
            </button>
        </div>
        <div class="card-body p-24">
            <div class="table-responsive scroll-sm">
                <table class="table bordered-table sm-table mb-0" style="width:100%" id="tbl-pelanggan">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal add Start -->
<div class="modal fade" id="modal-add-pelanggan" tabindex="-1" aria-labelledby="modal-add-pelangganLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="modal-add-pelangganLabel">Tambah Pelanggan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <div class="row">
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Nama</label>
                        <input id="txt-add-pelanggan-name" type="text" class="form-control radius-8"
                            placeholder="Masukan Nama">
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Telp.</label>
                        <input id="txt-add-pelanggan-telp" type="text" class="form-control radius-8"
                            placeholder="Masukan Telepon">
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Email.</label>
                        <input id="txt-add-pelanggan-email" type="email" class="form-control radius-8"
                            placeholder="Masukan Email">
                    </div>
                    <div class="col-12 mb-20">
                        <label for="txt-add-pelanggan-address"
                            class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat</label>
                        <textarea class="form-control" id="txt-add-pelanggan-address" rows="4" cols="50"
                            placeholder="Masukan Alamat"></textarea>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                        <button data-bs-dismiss="modal" type="reset"
                            class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8">
                            Cancel
                        </button>
                        <button type="submit" id="btn-submit-add-pelanggan"
                            class="btn btn-primary border border-primary-600 text-md px-48 py-12 radius-8">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal add End --> 

<!-- Modal edit Start -->
<div class="modal fade" id="modal-edit-pelanggan" tabindex="-1" aria-labelledby="modal-edit-pelangganLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="modal-edit-pelangganLabel">Ubah Pelanggan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <div class="row">
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Nama</label>
                        <input id="txt-edit-pelanggan-name" type="text" class="form-control radius-8"
                            placeholder="Masukan Nama">
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Telp.</label>
                        <input id="txt-edit-pelanggan-telp" type="text" class="form-control radius-8"
                            placeholder="Masukan Telepon">
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Email.</label>
                        <input id="txt-edit-pelanggan-email" type="email" class="form-control radius-8"
                            placeholder="Masukan Email">
                    </div>
                    <div class="col-12 mb-20">
                        <label for="txt-edit-pelanggan-address"
                            class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat</label>
                        <textarea class="form-control" id="txt-edit-pelanggan-address" rows="4" cols="50"
                            placeholder="Masukan Alamat"></textarea>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                        <button data-bs-dismiss="modal" type="reset"
                            class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8">
                            Cancel
                        </button>
                        <button type="submit" id="btn-submit-edit-pelanggan"
                            class="btn btn-primary border border-primary-600 text-md px-48 py-12 radius-8">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit End -->

<?= $this->endSection(); ?>
<?= $this->section('jquery'); ?>
<script>
var tablePelanggan = $("#tbl-pelanggan").DataTable({
    "searching": false,
    "lengthChange": false,
    "pageLength": parseInt($("#page-pelanggan").val()),
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": "<?= base_url('admin/pelanggan/getdata'); ?>",
        "type": "POST",
        "dataType": "json",
        "data": function(d) {
            d.search = $('#search-pelanggan').val();
        }
    },
    "columns": [
        {
            "data": null,
            "render": function(data, type, row, meta) {
                return meta.row + 1;
            }
        },
        { "data": "name" },
        { "data": "telp" },
        { "data": "email" },
        { "data": "address" },
        { data: null,
              render: function(data, type, row) { 
                  var html = ` <div class="d-flex align-items-center gap-10 justify-content-center"> 
                                    <button type="button" data-id="${row.id}"
                                        class="btn-edit bg-success-focus text-success-600 bg-hover-success-200 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle">
                                        <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                    </button>
                                    <button type="button" data-id="${row.id}"
                                        class="btn-delete remove-item-btn bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle">
                                        <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                    </button>
                                </div>`;
                  return html;
              }
        }
    ]
});
$('#search-pelanggan').on('keyup', function() { 
  tablePelanggan.ajax.reload(); 
});
$('#page-pelanggan').on('change', function() {
    tablePelanggan.page.len(this.value).draw();
    tablePelanggan.ajax.reload();
});


$("#btn-add-pelanggan-modal").click(function() {
    $("#modal-add-pelanggan").modal("show");
});
$("#btn-submit-add-pelanggan").click(function() {
    //Cek input name
    if ($("#txt-add-pelanggan-name").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan nama terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-add-pelanggan-name").focus(), 300);
        });
        return false;
    }


    //Cek input telp
    if ($("#txt-add-pelanggan-telp").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan nomer telepon terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-add-pelanggan-telp").focus(), 300);
        });
        return false;
    }

    //Cek input email
    // if ($("#txt-add-pelanggan-email").val() === "") {
    //     Swal.fire({
    //         icon: 'error',
    //         text: "Masukan email terlebih dahulu",
    //         confirmButtonColor: "#3085d6",
    //     }).then((result) => {
    //         swal.close();
    //         setTimeout(() => $("#txt-add-pelanggan-email").focus(), 300);
    //     });
    //     return false;
    // }

    //Cek input address
    if ($("#txt-add-pelanggan-address").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan alamat terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-add-pelanggan-address").focus(), 300);
        });
        return false;
    }
 
    $.ajax({
        type: "POST",
        url: "<?= base_url("admin/pelanggan/add")?>",
        data: {
            name: $("#txt-add-pelanggan-name").val(),
            email: $("#txt-add-pelanggan-email").val(),
            telp: $("#txt-add-pelanggan-telp").val(),
            address: $("#txt-add-pelanggan-address").val(),
        },
        success: function(data) {
            if (data["status"] === "success") {
                Swal.fire({
                    icon: 'success',
                    text: "Simpan data berhasil",
                    confirmButtonColor: "#3085d6",
                }).then((result) => {
                    swal.close();
                    setTimeout(() =>{
                      $("#modal-add-pelanggan").modal("hide"); 
                      tablePelanggan.ajax.reload();
                    }, 300);
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    text: data["message"],
                    confirmButtonColor: "#3085d6",
                }); 
            }
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr["responseJSON"]["message"])
            Swal.fire({
                icon: 'error',
                text: xhr["responseJSON"]["message"],
                confirmButtonColor: "#3085d6",
            });
        }
    });  
});

tablePelanggan.on('click', '.btn-edit', function() {
  var id = $(this).data('id');
  $.ajax({
    type: "POST",
    url: "<?= base_url("admin/pelanggan/get/")?>" + id, 
    dataType: "json",
    success: function (data) {
      if (data["status"] === "success") {
           $("#txt-edit-pelanggan-name").val(data["data"]["name"])
           $("#txt-edit-pelanggan-email").val(data["data"]["email"])
           $("#txt-edit-pelanggan-telp").val(data["data"]["telp"])
           $("#txt-edit-pelanggan-address").val(data["data"]["address"])

           $("#btn-submit-edit-pelanggan").data("id",data["data"]["id"])
           $("#modal-edit-pelanggan").modal("show")
      } else {
          Swal.fire({
              icon: 'error',
              text: data["message"],
              confirmButtonColor: "#3085d6",
          }); 
      }
    }
  });
});
$("#btn-submit-edit-pelanggan").click(function(){
 //Cek input name
    if ($("#txt-edit-pelanggan-name").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan nama terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-edit-pelanggan-name").focus(), 300);
        });
        return false;
    } 
    //Cek input telp
    if ($("#txt-edit-pelanggan-telp").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan nomer telepon terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-edit-pelanggan-telp").focus(), 300);
        });
        return false;
    }
  
    //Cek input address
    if ($("#txt-edit-pelanggan-address").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan alamat terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-edit-pelanggan-address").focus(), 300);
        });
        return false;
    }

    var id = $(this).data("id");
    $.ajax({
        type: "POST",
        url: "<?= base_url("admin/pelanggan/edit/")?>" + id,
        data: {
            name: $("#txt-edit-pelanggan-name").val(),
            email: $("#txt-edit-pelanggan-email").val(),
            telp: $("#txt-edit-pelanggan-telp").val(),
            address: $("#txt-edit-pelanggan-address").val(),
        },
        success: function(data) {
            if (data["status"] === "success") {
                Swal.fire({
                    icon: 'success',
                    text: "Simpan data berhasil",
                    confirmButtonColor: "#3085d6",
                }).then((result) => {
                    swal.close();
                    setTimeout(() =>{
                      $("#modal-edit-pelanggan").modal("hide");
                      tablePelanggan.ajax.reload();}, 300);
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    text: data["message"],
                    confirmButtonColor: "#3085d6",
                }); 
            }
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr["responseJSON"]["message"])
            Swal.fire({
                icon: 'error',
                text: xhr["responseJSON"]["message"],
                confirmButtonColor: "#3085d6",
            });
        }
    });  
});


tablePelanggan.on('click', '.btn-delete', function() {
  var id = $(this).data('id');
  Swal.fire({ 
      text: "Anda yakin ingin menghapus data pelanggan ini.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya, Yakin Hapus!"
  }).then((result) => {
      if (result.isConfirmed) {
          $.ajax({
              dataType: "json",
              method: "POST",
              url: "<?= base_url() ?>admin/pelanggan/delete/" + id, 
              success: function(data) { 
                  Swal.fire({
                      title: "Success!",
                      text: "Data pelanggan berhasil di hapus.",
                      icon: "success",
                      confirmButtonColor: "#3085d6",
                  });  
                  tablePelanggan.ajax.reload(null, false);
              }, 
              error: function(xhr, textStatus, errorThrown) {
                  console.log(xhr["responseJSON"]["message"])
                  Swal.fire({
                      icon: 'error',
                      text: xhr["responseJSON"]["message"],
                      confirmButtonColor: "#3085d6",
                  });
              }
          });
      }  
  });
});

</script>

<?= $this->endSection(); ?>