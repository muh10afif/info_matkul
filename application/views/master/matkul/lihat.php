<input type="hidden" id="status_toggle">
<!-- Page-Title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Info Mata Kuliah</a></li>
                <li class="breadcrumb-item">Master</li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 f_tambah" style="display: none;">
        <div class="card shadow">
            <div class="card-header">
                <button class="btn btn-light float-right batal_matkul"><i class="mdi mdi-close mdi-18px"></i></button>
                <h5 id="judul">Tambah Data</h5>
            </div>
            <form id="form_matkul" autocomplete="off">
                <input type="hidden" name="id_matkul" id="id_matkul">
                <input type="hidden" name="aksi" id="aksi" value="Tambah">
                <div class="card-body row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="narasumber">Narasumber</label>
                            <input type="text" class="form-control" id="narasumber" name="narasumber" placeholder="Masukkan Narasumber">
                        </div>

                        <div class="form-group">
                            <label for="matkul">Mata Kuliah</label>
                            <input type="text" class="form-control" id="matkul" name="matkul" placeholder="Masukkan Mata Kuliah">
                        </div>
                        <div class="form-group">
                            <label for="kuota">Kuota</label>
                            <input type="number" class="form-control" id="kuota" name="kuota" placeholder="Masukkan Kuota">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-primary mt-1 mr-2" id="simpan_matkul">Simpan</button>
                    <button class="btn btn-danger mt-1 batal_matkul" id="batal_matkul" type="button" hidden>Batal</button>
                </div>
            </form>
        </div>
        <div >

        </div>
    </div>

    <div class="col-md-12 mt-0">
        <div class="card shadow">
            <div class="card-header p-3">
                <button class="btn btn-primary float-right" id="tambah_matkul">Tambah Data</button>
                <h5 id="judul">Master matkul</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover" id="tabel_master_matkul" width="100%" cellspacing="0">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="">Narasumber</th>
                            <th width="">Matkul</th>
                            <th width="">Kuota</th>
                            <th width="">Sisa</th>
                            <th width="">Terdaftar</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal_tabel" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title mt-0" id="judul_modal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
        <div class="modal-body table-responsive">

            <table class="table table-bordered table-hover dt-responsive nowrap tabel_siswa" style="border-collapse: collapse; border-spacing: 0; width: 100%;" width="100%" cellspacing="0">
                <thead class="thead-light text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Nama</th>
                        <th width="20%">Jenis Kelamin</th>
                        <th width="20%">Alamat</th>
                        <th width="10%">Email</th>
                        <th width="10%">No WA</th>
                    </tr>
                </thead>
                <tbody>
                        
                </tbody>
            </table>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban mr-2"></i>Tutup</button>
        </div>
    </div>
  </div>
</div>

<script>

    $(document).ready(function() {

        $('#tambah_matkul').on('click', function () {

            $('html, body').animate({
                scrollTop: $('body').offset().top
            }, 800);
            
            $('.f_tambah').slideToggle('fast', function() {
                if ($(this).is(':visible')) {
                    $('#status_toggle').val(1);          
                } else {  
                    $('#status_toggle').val(0);            
                }        
            });
            
        })

        var tabel_master_matkul = $('#tabel_master_matkul').DataTable({
            "processing"        : true,
            "serverSide"        : true,
            "order"             : [],
            "ajax"              : {
                "url"   : "<?= base_url('master/tampil_data_matkul') ?>",
                "type"  : "POST"
            },
            "columnDefs"        : [{
                "targets"   : [0,3,4,5,6],
                "orderable" : false
            }, {
                'targets'   : [0,3,4,5,6],
                'className' : 'text-center',
            }]

        })

        // aksi simpan data matkul
        $('#simpan_matkul').on('click', function () {

            var form_matkul  = $('#form_matkul').serialize();
            var matkul       = $('#matkul').val();

            if (matkul == "") {

                swal({
                    title               : "Peringatan",
                    text                : 'Matkul harus terisi dahulu!',
                    type                : 'warning',
                    showConfirmButton   : false,
                    timer               : 700
                }); 

                return false;

            } else {

                swal({
                    title       : 'Konfirmasi',
                    text        : 'Yakin akan kirim data',
                    type        : 'warning',

                    buttonsStyling      : false,
                    confirmButtonClass  : "btn btn-primary",
                    cancelButtonClass   : "btn btn-warning mr-3",

                    showCancelButton    : true,
                    confirmButtonText   : 'Ya',
                    confirmButtonColor  : '#3085d6',
                    cancelButtonColor   : '#d33',
                    cancelButtonText    : 'Batal',
                    reverseButtons      : true
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url     : "<?= base_url() ?>master/simpan_data_matkul",
                            type    : "POST",
                            beforeSend  : function () {
                                swal({
                                    title   : 'Menunggu',
                                    html    : 'Memproses Data',
                                    onOpen  : () => {
                                        swal.showLoading();
                                    }
                                })
                            },
                            data    : form_matkul,
                            dataType: "JSON",
                            success : function (data) {
                                
                                swal({
                                    title               : "Berhasil",
                                    text                : 'Data berhasil disimpan',
                                    buttonsStyling      : false,
                                    confirmButtonClass  : "btn btn-success",
                                    type                : 'success',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                });    
                
                                tabel_master_matkul.ajax.reload(null,false);        
                                
                                $('#form_matkul').trigger("reset");

                                $('#batal_matkul').attr('hidden', true);

                                $('.hapus-matkul').removeAttr('hidden');
                
                                $('#aksi').val('Tambah');

                                $('.f_tambah').slideToggle('fast', function() {
                                    if ($(this).is(':visible')) {
                                        $('#status_toggle').val(1);          
                                    } else {  
                                        $('#status_toggle').val(0);            
                                    }        
                                });

                                $('#tambah_matkul').attr('hidden', false);
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                swal({
                                    title               : "Gagal",
                                    text                : "Gagal Proses Data",
                                    type                : 'error',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                }); 

                                return false;
                            }	
                        })
                
                        return false;

                    } else if (result.dismiss === swal.DismissReason.cancel) {

                        swal({
                            title               : "Batal",
                            text                : 'Anda membatalkan simpan data',
                            buttonsStyling      : false,
                            confirmButtonClass  : "btn btn-primary",
                            type                : 'error',
                            showConfirmButton   : false,
                            timer               : 1000
                        }); 
                    }
                })

                return false;

            }

        })

        // aksi batal matkul
        $('.batal_matkul').on('click', function () {

            $('#form_matkul').trigger("reset");
            $('#batal_matkul').attr('hidden', true);

            $('#aksi').val('Tambah');
            $('.hapus-matkul').removeAttr('hidden');

            $('.f_tambah').slideToggle('fast', function() {
                if ($(this).is(':visible')) {
                    $('#status_toggle').val(1);          
                } else {  
                    $('#status_toggle').val(0);            
                }        
            });

            $('#tambah_matkul').attr('hidden', false);
        })

        $('#tabel_master_matkul').on('click', '.detail-matkul', function () {

            var id_matkul  = $(this).data('id');
            var nm_matkul  = $(this).attr('nama');

            var tabel_siswa = $('.tabel_siswa').DataTable({
                "processing"        : true,
                "order"             : [],
                "ajax"              : {
                    "url"   : "<?= base_url('beranda/tampil_siswa') ?>",
                    "type"  : "POST",
                    "data"  : function (data) {
                        data.id_matkul    = id_matkul;
                    },
                },
                "columnDefs"        : [{
                    "targets"   : [0,4],
                    "orderable" : false
                }, {
                    'targets'   : [0,4],
                    'className' : 'text-center',
                }],
                'bDestroy' : true

            })

            $('#modal_tabel').modal('show');
            $('#judul_modal').text('List siswa mata kuliah '+matkul);

        })
        

        // edit data matkul
        $('#tabel_master_matkul').on('click', '.edit-matkul', function () {

            $('.hapus-matkul').attr('hidden', true);
            $('#tambah_matkul').attr('hidden', true);

            var sts = $('#status_toggle').val();

            var id_matkul  = $(this).data('id');

            $.ajax({
                url         : "<?=base_url() ?>master/ambil_data_matkul/"+id_matkul,
                type        : "GET",
                beforeSend  : function () {
                    swal({
                        title   : 'Menunggu',
                        html    : 'Memproses Data',
                        onOpen  : () => {
                            swal.showLoading();
                        }
                    })
                },
                dataType    : "JSON",
                success     : function(data)
                {
                    swal.close();
                    
                    $('#id_matkul').val(data.id_matkul);
                    $('#narasumber').val(data.narasumber);
                    $('#matkul').val(data.matkul);
                    $('#kuota').val(data.kuota);

                    $('#aksi').val('Ubah');
                    $('#batal_matkul').removeAttr('hidden');

                    $('#nama_matkul').attr('autofocus', true);

                    $('html, body').animate({
                        scrollTop: $('body').offset().top
                    }, 800);

                    if (sts == 0) {
                        $('.f_tambah').slideToggle('fast', function() {
                            if ($(this).is(':visible')) {
                                $('#status_toggle').val(1);          
                            } else {  
                                $('#status_toggle').val(0);            
                            }        
                        });  
                    }

                    return false;

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })

            return false;

        })

        // hapus matkul
        $('#tabel_master_matkul').on('click', '.hapus-matkul', function () {

            var id_matkul   = $(this).data('id');
            var sts         = $('#status_toggle').val();
            var nama        = $(this).attr('nama');

            swal({
                title       : 'Konfirmasi',
                text        : 'Yakin akan hapus matkul '+nama+' ?',
                type        : 'warning',

                buttonsStyling      : false,
                confirmButtonClass  : "btn btn-danger",
                cancelButtonClass   : "btn btn-primary mr-3",

                showCancelButton    : true,
                confirmButtonText   : 'Hapus',
                confirmButtonColor  : '#3085d6',
                cancelButtonColor   : '#d33',
                cancelButtonText    : 'Batal',
                reverseButtons      : true
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url         : "<?= base_url() ?>master/simpan_data_matkul",
                        method      : "POST",
                        beforeSend  : function () {
                            swal({
                                title   : 'Menunggu',
                                html    : 'Memproses Data',
                                onOpen  : () => {
                                    swal.showLoading();
                                }
                            })
                        },
                        data        : {aksi:'Hapus', id_matkul:id_matkul},
                        dataType    : "JSON",
                        success     : function (data) {

                                tabel_master_matkul.ajax.reload(null,false);   

                                swal({
                                    title               : 'Hapus matkul',
                                    text                : 'Data Berhasil Dihapus',
                                    buttonsStyling      : false,
                                    confirmButtonClass  : "btn btn-success",
                                    type                : 'success',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                }); 

                                    
                                
                                $('#form_matkul').trigger("reset");

                                $('#aksi').val('Tambah');

                                $('#batal_matkul').attr('hidden', true);

                                $('.hapus-matkul').removeAttr('hidden');

                                if (sts == 1) {
                                    $('.f_tambah').slideToggle('fast', function() {
                                        if ($(this).is(':visible')) {
                                            $('#status_toggle').val(1);          
                                        } else {  
                                            $('#status_toggle').val(0);            
                                        }        
                                    });  
                                }
                            
                        },
                        error       : function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err.Message);
                        }

                    })

                    return false;
                } else if (result.dismiss === swal.DismissReason.cancel) {

                    swal({
                            title               : 'Batal',
                            text                : 'Anda membatalkan hapus matkul',
                            buttonsStyling      : false,
                            confirmButtonClass  : "btn btn-primary",
                            type                : 'error',
                            showConfirmButton   : false,
                            timer               : 1000
                        }); 
                }
            })

        })

    });

</script>