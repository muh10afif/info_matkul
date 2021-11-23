<style>
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-right: 10px;
        margin-top: -23px;
        position: relative;
        z-index: 2;
    }
</style>
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
                <button class="btn btn-light float-right batal_user"><i class="mdi mdi-close mdi-18px"></i></button>
                <h5 id="judul">Tambah Data</h5>
            </div>
            <form id="form_user" autocomplete="off">
                <input type="hidden" name="id_user" id="id_user">
                <input type="hidden" name="aksi" id="aksi" value="Tambah">
                <div class="card-body row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                            <i toggle="#password" class="fa fa-meh-rolling-eyes fa-lg field-icon toggle-password"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">Level</label>
                            <select name="id_level" id="id_level" class="select2">
                                <option value="">Pilih</option>
                                <?php foreach ($level as $l): ?>
                                    <option value="<?= $l['id_level'] ?>"><?= $l['level'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_siswa">Siswa</label>
                            <select name="id_siswa" id="id_siswa" class="select2">
                                <option value="">Pilih</option>
                                <?php foreach ($siswa as $s): ?>
                                    <option value="<?= $s['id_siswa'] ?>"><?= $s['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-primary mt-1 mr-2" id="simpan_user">Simpan</button>
                    <button class="btn btn-danger mt-1 batal_user" id="batal_user" type="button" hidden>Batal</button>
                </div>
            </form>
        </div>
        <div >

        </div>
    </div>

    <div class="col-md-12 mt-0">
        <div class="card shadow">
            <div class="card-header p-3">
                <button class="btn btn-primary float-right" id="tambah_user">Tambah Data</button>
                <h5 id="judul">Master user</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover" id="tabel_master_user" width="100%" cellspacing="0">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="20%">Username</th>
                            <th width="20%">Nama</th>
                            <th width="20%">Level</th>
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

        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-meh-rolling-eyes fa-smile-beam");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
            input.attr("type", "text");
            } else {
            input.attr("type", "password");
            }

        });

        $('#tambah_user').on('click', function () {

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

        var tabel_master_user = $('#tabel_master_user').DataTable({
            "processing"        : true,
            "serverSide"        : true,
            "order"             : [],
            "ajax"              : {
                "url"   : "<?= base_url('master/tampil_data_user') ?>",
                "type"  : "POST"
            },
            "columnDefs"        : [{
                "targets"   : [0,4],
                "orderable" : false
            }, {
                'targets'   : [0,4],
                'className' : 'text-center',
            }]

        })

        // aksi simpan data user
        $('#simpan_user').on('click', function () {

            var form_user  = $('#form_user').serialize();
            var nama        = $('#nama').val();
            var username       = $('#username').val();

            if (username == "") {

                swal({
                    title               : "Peringatan",
                    text                : 'Username harus terisi dahulu!',
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
                            url     : "<?= base_url() ?>master/simpan_data_user",
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
                            data    : form_user,
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
                
                                tabel_master_user.ajax.reload(null,false);        
                                
                                $('#form_user').trigger("reset");

                                $('#batal_user').attr('hidden', true);

                                $('.hapus-user').removeAttr('hidden');
                
                                $('#aksi').val('Tambah');

                                $('.f_tambah').slideToggle('fast', function() {
                                    if ($(this).is(':visible')) {
                                        $('#status_toggle').val(1);          
                                    } else {  
                                        $('#status_toggle').val(0);            
                                    }        
                                });

                                $('#tambah_user').attr('hidden', false);
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

        // aksi batal user
        $('.batal_user').on('click', function () {

            $('#form_user').trigger("reset");
            $('#batal_user').attr('hidden', true);

            $('#aksi').val('Tambah');
            $('.hapus-user').removeAttr('hidden');

            $('.f_tambah').slideToggle('fast', function() {
                if ($(this).is(':visible')) {
                    $('#status_toggle').val(1);          
                } else {  
                    $('#status_toggle').val(0);            
                }        
            });

            $('#tambah_user').attr('hidden', false);
        })

        // edit data user
        $('#tabel_master_user').on('click', '.edit-user', function () {

            $('.hapus-user').attr('hidden', true);
            $('#tambah_user').attr('hidden', true);

            var sts = $('#status_toggle').val();

            var id_user  = $(this).data('id');

            $.ajax({
                url         : "<?=base_url() ?>master/ambil_data_user/"+id_user,
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
                    
                    $('#id_user').val(data.id_user);
                    $('#username').val(data.username);
                    $('#id_level').val(data.id_level).trigger('change');
                    $('#id_siswa').val(data.id_siswa).trigger('change');

                    $('#aksi').val('Ubah');
                    $('#batal_user').removeAttr('hidden');

                    $('#nama_user').attr('autofocus', true);

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

        // hapus user
        $('#tabel_master_user').on('click', '.hapus-user', function () {

            var id_user   = $(this).data('id');
            var sts         = $('#status_toggle').val();
            var nama        = $(this).attr('nama');

            swal({
                title       : 'Konfirmasi',
                text        : 'Yakin akan hapus user '+nama+' ?',
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
                        url         : "<?= base_url() ?>master/simpan_data_user",
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
                        data        : {aksi:'Hapus', id_user:id_user},
                        dataType    : "JSON",
                        success     : function (data) {

                                tabel_master_user.ajax.reload(null,false);   

                                swal({
                                    title               : 'Hapus user',
                                    text                : 'Data Berhasil Dihapus',
                                    buttonsStyling      : false,
                                    confirmButtonClass  : "btn btn-success",
                                    type                : 'success',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                }); 

                                    
                                
                                $('#form_user').trigger("reset");

                                $('#aksi').val('Tambah');

                                $('#batal_user').attr('hidden', true);

                                $('.hapus-user').removeAttr('hidden');

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
                            text                : 'Anda membatalkan hapus user',
                            buttonsStyling      : false,
                            confirmButtonClass  : "btn btn-primary",
                            type                : 'error',
                            showConfirmButton   : false,
                            timer               : 1000
                        }); 
                }
            })

        })

        $('#id_provinsi').on('change', function () {

            var id_provinsi = $(this).val();

            $.ajax({
                url     : "<?= base_url('auth/tampil_user') ?>",
                method  : "POST",
                data    : {id_provinsi:id_provinsi},
                dataType: "JSON",
                success : function (data) {

                    $('#id_user').html(data.option);

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    $('.loading').fadeOut();

                    swal({
                        title               : "Gagal",
                        text                : "Gagal menampilkan data",
                        type                : 'error',
                        showConfirmButton   : false,
                        timer               : 1000
                    }); 

                    return false;
                }
            })

        })

        function provinsi(id_provinsi, id_kota) {
            
            $.ajax({
                url     : "<?= base_url('auth/tampil_user') ?>",
                method  : "POST",
                data    : {id_provinsi:id_provinsi},
                dataType: "JSON",
                success : function (data) {

                    $('#id_user').html(data.option);
                    $('#id_user').val(id_kota).trigger('change');

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    $('.loading').fadeOut();

                    swal({
                        title               : "Gagal",
                        text                : "Gagal menampilkan data",
                        type                : 'error',
                        showConfirmButton   : false,
                        timer               : 1000
                    }); 

                    return false;
                }
            })

        }

    });

</script>