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
                <button class="btn btn-light float-right batal_siswa"><i class="mdi mdi-close mdi-18px"></i></button>
                <h5 id="judul">Tambah Data</h5>
            </div>
            <form id="form_siswa" autocomplete="off">
                <input type="hidden" name="id_siswa" id="id_siswa">
                <input type="hidden" name="aksi" id="aksi" value="Tambah">
                <div class="card-body row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label><br>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="jk1" name="jk" class="custom-control-input" value="Laki-laki">
                            <label class="custom-control-label" for="jk1">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="jk2" name="jk" class="custom-control-input" value="Perempuan">
                            <label class="custom-control-label" for="jk2">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="2" placeholder="Masukkan Alamat"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Provinsi</label>
                            <select name="id_provinsi" id="id_provinsi" class="select2">
                                <option value="">Pilih</option>
                                <?php foreach ($provinsi as $p): ?>
                                    <option value="<?= $p['id_provinsi'] ?>"><?= $p['provinsi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kota/Kab</label>
                            <select name="id_kota_kab" id="id_kota_kab" class="select2">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="no_wa">No WA</label>
                            <input type="text" class="form-control" id="no_wa" name="no_wa" placeholder="Masukkan No WA">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-primary mt-1 mr-2" id="simpan_siswa">Simpan</button>
                    <button class="btn btn-danger mt-1 batal_siswa" id="batal_siswa" type="button" hidden>Batal</button>
                </div>
            </form>
        </div>
        <div >

        </div>
    </div>

    <div class="col-md-12 mt-0">
        <div class="card shadow">
            <div class="card-header p-3">
                <button class="btn btn-primary float-right" id="tambah_siswa">Tambah Data</button>
                <h5 id="judul">Master Siswa</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover" id="tabel_master_siswa" width="100%" cellspacing="0">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="20%">Nama</th>
                            <th width="20%">Jenis Kelamin</th>
                            <th width="20%">Alamat</th>
                            <th width="20%">No WA</th>
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

        $('#tambah_siswa').on('click', function () {

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

        var tabel_master_siswa = $('#tabel_master_siswa').DataTable({
            "processing"        : true,
            "serverSide"        : true,
            "order"             : [],
            "ajax"              : {
                "url"   : "<?= base_url('master/tampil_data_siswa') ?>",
                "type"  : "POST"
            },
            "columnDefs"        : [{
                "targets"   : [0,5],
                "orderable" : false
            }, {
                'targets'   : [0,5],
                'className' : 'text-center',
            }]

        })

        // aksi simpan data siswa
        $('#simpan_siswa').on('click', function () {

            var form_siswa  = $('#form_siswa').serialize();
            var nama        = $('#nama').val();
            var no_wa       = $('#no_wa').val();

            if (nama == "") {

                swal({
                    title               : "Peringatan",
                    text                : 'Nama harus terisi dahulu!',
                    type                : 'warning',
                    showConfirmButton   : false,
                    timer               : 700
                }); 

                return false;

            } else if (no_wa == "") {

                swal({
                    title               : "Peringatan",
                    text                : 'No WA harus terisi dahulu!',
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
                            url     : "<?= base_url() ?>master/simpan_data_siswa",
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
                            data    : form_siswa,
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
                
                                tabel_master_siswa.ajax.reload(null,false);        
                                
                                $('#form_siswa').trigger("reset");

                                $('#batal_siswa').attr('hidden', true);

                                $('.hapus-siswa').removeAttr('hidden');
                
                                $('#aksi').val('Tambah');

                                $('.f_tambah').slideToggle('fast', function() {
                                    if ($(this).is(':visible')) {
                                        $('#status_toggle').val(1);          
                                    } else {  
                                        $('#status_toggle').val(0);            
                                    }        
                                });

                                $('#tambah_siswa').attr('hidden', false);
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

        // aksi batal siswa
        $('.batal_siswa').on('click', function () {

            $('#form_siswa').trigger("reset");
            $('#batal_siswa').attr('hidden', true);

            $('#aksi').val('Tambah');
            $('.hapus-siswa').removeAttr('hidden');

            $('.f_tambah').slideToggle('fast', function() {
                if ($(this).is(':visible')) {
                    $('#status_toggle').val(1);          
                } else {  
                    $('#status_toggle').val(0);            
                }        
            });

            $('#tambah_siswa').attr('hidden', false);
        })

        // edit data siswa
        $('#tabel_master_siswa').on('click', '.edit-siswa', function () {

            $('.hapus-siswa').attr('hidden', true);
            $('#tambah_siswa').attr('hidden', true);

            var sts = $('#status_toggle').val();

            var id_siswa  = $(this).data('id');

            $.ajax({
                url         : "<?=base_url() ?>master/ambil_data_siswa/"+id_siswa,
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
                    
                    $('#id_siswa').val(data.id_siswa);
                    $('#nik').val(data.nik);
                    $('#nama').val(data.nama);
                    $("input[name=jk][value=" + data.jenis_kelamin + "]").prop('checked', true);
                    $('#alamat').val(data.alamat);
                    $('#id_provinsi').val(data.id_provinsi).trigger('change');
                    $('#email').val(data.email);
                    $('#no_wa').val(data.no_wa);

                    provinsi(data.id_provinsi, data.id_kota_kab);

                    $('#aksi').val('Ubah');
                    $('#batal_siswa').removeAttr('hidden');

                    $('#nama_siswa').attr('autofocus', true);

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

        // hapus siswa
        $('#tabel_master_siswa').on('click', '.hapus-siswa', function () {

            var id_siswa   = $(this).data('id');
            var sts         = $('#status_toggle').val();
            var nama        = $(this).attr('nama');

            swal({
                title       : 'Konfirmasi',
                text        : 'Yakin akan hapus siswa '+nama+' ?',
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
                        url         : "<?= base_url() ?>master/simpan_data_siswa",
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
                        data        : {aksi:'Hapus', id_siswa:id_siswa},
                        dataType    : "JSON",
                        success     : function (data) {

                                tabel_master_siswa.ajax.reload(null,false);   

                                swal({
                                    title               : 'Hapus siswa',
                                    text                : 'Data Berhasil Dihapus',
                                    buttonsStyling      : false,
                                    confirmButtonClass  : "btn btn-success",
                                    type                : 'success',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                }); 

                                    
                                
                                $('#form_siswa').trigger("reset");

                                $('#aksi').val('Tambah');

                                $('#batal_siswa').attr('hidden', true);

                                $('.hapus-siswa').removeAttr('hidden');

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
                            text                : 'Anda membatalkan hapus siswa',
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
                url     : "<?= base_url('auth/tampil_kota_kab') ?>",
                method  : "POST",
                data    : {id_provinsi:id_provinsi},
                dataType: "JSON",
                success : function (data) {

                    $('#id_kota_kab').html(data.option);

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
                url     : "<?= base_url('auth/tampil_kota_kab') ?>",
                method  : "POST",
                data    : {id_provinsi:id_provinsi},
                dataType: "JSON",
                success : function (data) {

                    $('#id_kota_kab').html(data.option);
                    $('#id_kota_kab').val(id_kota).trigger('change');

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