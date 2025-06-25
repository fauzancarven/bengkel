<?= $this->extend('admin/template'); ?> 
<?= $this->section('content'); ?>
 <div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
      <h6 class="fw-semibold mb-0">Produk</h6>
      <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium">
          <a href="<?= base_url("admin/dashboard") ?>" class="d-flex align-items-center gap-1 hover-text-primary">
            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
            Dashboard
          </a>
        </li> 
        <li>-</li>
        <li class="fw-medium">Produk</li>
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
            <button id="btn-add-produk-modal"
                class="btn btn-primary text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2">
                <iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>
                Add Produk
            </button>
        </div>
        <div class="card-body p-24">
            <div class="table-responsive scroll-sm">
                <table class="table bordered-table sm-table mb-0" style="width:100%" id="tbl-produk">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Harga</th>
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
<div class="modal fade" id="modal-add-produk" tabindex="-1" aria-labelledby="modal-add-produkLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="modal-add-produkLabel">Tambah Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <div class="row">
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Kategori</label>
                         <select id="txt-add-produk-category" class="form-select form-select-sm radius-8">
                            <option value="Barang" selected>Barang</option>
                            <option value="Jasa">Jasa</option> 
                        </select> 
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Nama.</label>
                        <input id="txt-add-produk-name" type="text" class="form-control radius-8"
                            placeholder="Masukan Nama">
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Satuan.</label>
                        <input id="txt-add-produk-satuan" type="text" class="form-control radius-8"
                            placeholder="Masukan satuan">
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Harga.</label>
                        <input id="txt-add-produk-harga" type="text" class="form-control radius-8"
                            placeholder="Masukan harga">
                    </div> 
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                        <button data-bs-dismiss="modal" type="reset"
                            class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8">
                            Cancel
                        </button>
                        <button type="submit" id="btn-submit-add-produk"
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
<div class="modal fade" id="modal-edit-produk" tabindex="-1" aria-labelledby="modal-edit-produkLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="modal-edit-produkLabel">Ubah Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <div class="row">
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Kategori</label>
                         <select id="txt-edit-produk-category" class="form-select form-select-sm radius-8">
                            <option value="Barang" selected>Barang</option>
                            <option value="Jasa">Jasa</option> 
                        </select> 
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Nama.</label>
                        <input id="txt-edit-produk-name" type="text" class="form-control radius-8"
                            placeholder="Masukan Nama">
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Satuan.</label>
                        <input id="txt-edit-produk-satuan" type="text" class="form-control radius-8"
                            placeholder="Masukan satuan">
                    </div>
                    <div class="col-12 mb-20">
                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">Harga.</label>
                        <input id="txt-edit-produk-harga" type="text" class="form-control radius-8"
                            placeholder="Masukan harga">
                    </div> 
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                        <button data-bs-dismiss="modal" type="reset"
                            class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8">
                            Cancel
                        </button>
                        <button type="submit" id="btn-submit-edit-produk"
                            class="btn btn-primary border border-primary-600 text-md px-48 py-12 radius-8">
                            Save
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit End -->
  
<?= $this->endSection(); ?>
<?= $this->section('jquery'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
function formatRupiah(angka) {
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
  }

  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return "Rp. " + rupiah;
}
var tableProduk = $("#tbl-produk").DataTable({
    "searching": false,
    "lengthChange": false,
    "pageLength": parseInt($("#page-produk").val()),
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": "<?= base_url('admin/produk/getdata'); ?>",
        "type": "POST",
        "dataType": "json",
        "data": function(d) {
            d.search = $('#search-produk').val();
        }
    },
    "columns": [
        {
            "data": null,
            "render": function(data, type, row, meta) {
                return meta.row + 1;
            }
        },
        { "data": "category" },
        { "data": "name" },
        { "data": "satuan" },
        { "data": "harga" ,
          render: function(data, type, row) { 
            return formatRupiah(row.harga)
          }
        },
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

$('#search-produk').on('keyup', function() { 
  tableProduk.ajax.reload(); 
});
$('#page-produk').on('change', function() {
    tableProduk.page.len(this.value).draw();
    tableProduk.ajax.reload();
});

$("#btn-add-produk-modal").click(function() {
    $("#modal-add-produk").modal("show");
}); 
$('#txt-add-produk-harga').inputmask('numeric', {
  prefix: 'Rp. ', 
  radixPoint: ",",
  groupSeparator: ".",
  digits: 2,
  autoGroup: true,
  rightAlign: false
}); 
$('#txt-edit-produk-harga').inputmask('numeric', {
  prefix: 'Rp. ', 
  radixPoint: ",",
  groupSeparator: ".",
  digits: 2,
  autoGroup: true,
  rightAlign: false
}); 
$("#btn-submit-add-produk").click(function() {
    //Cek input name
    if ($("#txt-add-produk-name").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan nama terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-add-produk-name").focus(), 300);
        });
        return false;
    }


    //Cek input satuan
    if ($("#txt-add-produk-satuan").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan satuan terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-add-produk-satuan").focus(), 300);
        });
        return false;
    }
 

    //Cek input harga
    if ($("#txt-add-produk-harga").inputmask('unmaskedvalue') === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan harga terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-add-produk-harga").focus(), 300);
        });
        return false;
    }
 
    $.ajax({
        type: "POST",
        url: "<?= base_url("admin/produk/add")?>",
        data: {
            category: $("#txt-add-produk-category").val(),
            name: $("#txt-add-produk-name").val(),
            satuan: $("#txt-add-produk-satuan").val(),
            harga: $("#txt-add-produk-harga").inputmask('unmaskedvalue'), 
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
                      $("#modal-add-produk").modal("hide"); 
                      tableProduk.ajax.reload();
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

tableProduk.on('click', '.btn-edit', function() {
  var id = $(this).data('id');
  $.ajax({
    type: "POST",
    url: "<?= base_url("admin/produk/get/")?>" + id, 
    dataType: "json",
    success: function (data) {
      if (data["status"] === "success") {
           $("#txt-edit-produk-name").val(data["data"]["name"])
           $("#txt-edit-produk-category").val(data["data"]["category"])
           $("#txt-edit-produk-satuan").val(data["data"]["satuan"])
           $("#txt-edit-produk-harga").val(data["data"]["harga"])

           $("#btn-submit-edit-produk").data("id",data["data"]["id"])
           $("#modal-edit-produk").modal("show")
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
$("#btn-submit-edit-produk").click(function(){
    //Cek input name
    if ($("#txt-edit-produk-name").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan nama terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-edit-produk-name").focus(), 300);
        });
        return false;
    }


    //Cek input satuan
    if ($("#txt-edit-produk-satuan").val() === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan satuan terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-edit-produk-satuan").focus(), 300);
        });
        return false;
    }
 

    //Cek input harga
    if ($("#txt-edit-produk-harga").inputmask('unmaskedvalue') === "") {
        Swal.fire({
            icon: 'error',
            text: "Masukan harga terlebih dahulu",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            swal.close();
            setTimeout(() => $("#txt-edit-produk-harga").focus(), 300);
        });
        return false;
    }

    var id = $(this).data("id");
    $.ajax({
        type: "POST",
        url: "<?= base_url("admin/produk/edit/")?>" + id,
        data: {
            category: $("#txt-edit-produk-category").val(),
            name: $("#txt-edit-produk-name").val(),
            satuan: $("#txt-edit-produk-satuan").val(),
            harga: $("#txt-edit-produk-harga").inputmask('unmaskedvalue'), 
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
                      $("#modal-edit-produk").modal("hide");
                      tableProduk.ajax.reload();}, 300);
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

tableProduk.on('click', '.btn-delete', function() {
  var id = $(this).data('id');
  Swal.fire({ 
      text: "Anda yakin ingin menghapus data produk ini.",
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
              url: "<?= base_url() ?>admin/produk/delete/" + id, 
              success: function(data) { 
                  Swal.fire({
                      title: "Success!",
                      text: "Data produk berhasil di hapus.",
                      icon: "success",
                      confirmButtonColor: "#3085d6",
                  });  
                  tableProduk.ajax.reload(null, false);
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