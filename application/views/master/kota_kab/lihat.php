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
                <button class="btn btn-light float-right batal_kota_kab"><i class="mdi mdi-close mdi-18px"></i></button>
                <h5 id="judul">Tambah Data</h5>
            </div>
            <form id="form_kota_kab" autocomplete="off">
                <input type="hidden" name="id_kota_kab" id="id_kota_kab">
                <input type="hidden" name="aksi" id="aksi" value="Tambah">
                <div class="card-body d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <select name="provinsi" id="provinsi" class="select2">
                                <option value="">Pilih</option>
                                <?php foreach ($provinsi as $p): ?>
                                    <option value="<?= $p['id_provinsi'] ?>"><?= $p['provinsi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kota_kab">Kota/Kab</label>
                            <input type="text" class="form-control" id="kota_kab" name="kota_kab" placeholder="Masukkan Kota/Kab">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-primary mt-1 mr-2" id="simpan_kota_kab">Simpan</button>
                    <button class="btn btn-danger mt-1 batal_kota_kab" id="batal_kota_kab" type="button" hidden>Batal</button>
                </div>
            </form>
        </div>
        <div >

        </div>
    </div>

    <div class="col-md-12 mt-0">
        <div class="card shadow">
            <div class="card-header p-3">
                <button class="btn btn-primary float-right" id="tambah_kota_kab">Tambah Data</button>
                <h5 id="judul">Master kota_kab</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover" id="tabel_master_kota_kab" width="100%" cellspacing="0">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="40%">Kota/kab</th>
                            <th width="40%">Provinsi</th>
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

<script>

    $(document).ready(function() {

        $('#tambah_kota_kab').on('click', function () {

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

        var tabel_master_kota_kab = $('#tabel_master_kota_kab').DataTable({
            "processing"        : true,
            "serverSide"        : true,
            "order"             : [],
            "ajax"              : {
                "url"   : "<?= base_url('master/tampil_data_kota_kab') ?>",
                "type"  : "POST"
            },
            "columnDefs"        : [{
                "targets"   : [0,3],
                "orderable" : false
            }, {
                'targets'   : [0,3],
                'className' : 'text-center',
            }]

        })

        // aksi simpan data kota_kab
        $('#simpan_kota_kab').on('click', function () {

            var form_kota_kab  = $('#form_kota_kab').serialize();
            var kota_kab     = $('#kota_kab').val();

            if (kota_kab == "") {

                swal({
                    title               : "Peringatan",
                    text                : 'Nama harus terisi dahulu!',
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
                            url     : "<?= base_url() ?>master/simpan_data_kota_kab",
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
                            data    : form_kota_kab,
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
                
                                tabel_master_kota_kab.ajax.reload(null,false);        
                                
                                $('#form_kota_kab').trigger("reset");

                                $('#batal_kota_kab').attr('hidden', true);

                                $('.hapus-kota_kab').removeAttr('hidden');
                
                                $('#aksi').val('Tambah');

                                $('.f_tambah').slideToggle('fast', function() {
                                    if ($(this).is(':visible')) {
                                        $('#status_toggle').val(1);          
                                    } else {  
                                        $('#status_toggle').val(0);            
                                    }        
                                });

                                $('#tambah_kota_kab').attr('hidden', false);
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

        // aksi batal kota_kab
        $('.batal_kota_kab').on('click', function () {

            $('#form_kota_kab').trigger("reset");
            $('#batal_kota_kab').attr('hidden', true);

            $('#aksi').val('Tambah');
            $('.hapus-kota_kab').removeAttr('hidden');

            $('.f_tambah').slideToggle('fast', function() {
                if ($(this).is(':visible')) {
                    $('#status_toggle').val(1);          
                } else {  
                    $('#status_toggle').val(0);            
                }        
            });

            $('#tambah_kota_kab').attr('hidden', false);
        })

        // edit data kota_kab
        $('#tabel_master_kota_kab').on('click', '.edit-kota_kab', function () {

            $('.hapus-kota_kab').attr('hidden', true);
            $('#tambah_kota_kab').attr('hidden', true);

            var sts = $('#status_toggle').val();

            var id_kota_kab  = $(this).data('id');

            $.ajax({
                url         : "<?=base_url() ?>master/ambil_data_kota_kab/"+id_kota_kab,
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
                    
                    $('#id_kota_kab').val(data.id_kota_kab);
                    $('#provinsi').val(data.id_provinsi).trigger('change');
                    $('#kota_kab').val(data.kota_kab);

                    $('#aksi').val('Ubah');
                    $('#batal_kota_kab').removeAttr('hidden');

                    $('#nama_kota_kab').attr('autofocus', true);

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

        // hapus kota_kab
        $('#tabel_master_kota_kab').on('click', '.hapus-kota_kab', function () {

            var id_kota_kab   = $(this).data('id');
            var sts         = $('#status_toggle').val();
            var nama        = $(this).attr('nama');

            swal({
                title       : 'Konfirmasi',
                text        : 'Yakin akan hapus kota_kab '+nama+' ?',
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
                        url         : "<?= base_url() ?>master/simpan_data_kota_kab",
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
                        data        : {aksi:'Hapus', id_kota_kab:id_kota_kab},
                        dataType    : "JSON",
                        success     : function (data) {

                                tabel_master_kota_kab.ajax.reload(null,false);   

                                swal({
                                    title               : 'Hapus kota/kab',
                                    text                : 'Data Berhasil Dihapus',
                                    buttonsStyling      : false,
                                    confirmButtonClass  : "btn btn-success",
                                    type                : 'success',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                }); 

                                    
                                
                                $('#form_kota_kab').trigger("reset");

                                $('#aksi').val('Tambah');

                                $('#batal_kota_kab').attr('hidden', true);

                                $('.hapus-kota_kab').removeAttr('hidden');

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
                            text                : 'Anda membatalkan hapus kota/kab',
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