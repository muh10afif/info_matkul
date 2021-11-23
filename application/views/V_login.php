<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>INFO MATKUL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/template/assets/images/favicon.ico">

    <!-- Sweet Alert-->
    <link href="<?= base_url() ?>assets/swa/sweetalert2.css" rel="stylesheet" type="text/css" />

    <!-- select2 -->
    <link href="<?= base_url() ?>assets/select2/select2.min.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>assets/select2/select2-bootstrap4.min.css" rel="stylesheet"/>

    <!-- Bootstrap Css -->
    <link href="<?= base_url() ?>assets/template_login/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url() ?>assets/template_login/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url() ?>assets/template_login/assets/css/app.css" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-right: 10px;
            margin-top: -26px;
            position: relative;
            z-index: 2;
        }
        .mt-5, .my-5 {
            margin-top: 0rem!important;
        }
        .select2-container--bootstrap4 .select2-selection--single .select2-selection__arrow {
            position: absolute;
            top: 0%;
            right: 3px;
            width: 20px;
        }
        .select2-container--bootstrap4 .select2-results__option--highlighted, .select2-container--bootstrap4 .select2-results__option--highlighted.select2-results__option[aria-selected=true] {
            background-color: #30419b;
            color: #f8f9fa;
        }
    </style>
</head>

<body>
    
    <div class="account-pages my-5 pt-sm-5">
        <div class="home-btn d-none d-sm-block">
            <a href="<?= base_url() ?>" class="text-white"><i class="mdi mdi-home-outline mdi-48px h2"></i></a>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 clas">
                    <div class="card overflow-hidden shadow">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h2 class="text-white">I N F O</h2>
                                <p class="text-white-50 mb-0">MATA KULIAH</p>
                               
                            </div>
                        </div>
                        <div class="card-body pt-3">
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" id="form-login" autocomplete="off">
                                    <input type="hidden" name="id_matkul" value="<?= $this->session->userdata('id_matkul'); ?>">
                                    <input type="hidden" name="matkul" value="<?= $this->session->userdata('matkul'); ?>">
                                    <input type="hidden" name="status" value="<?= $this->session->userdata('status_login'); ?>">
                                    <input type="hidden" name="aksi_login" id="aksi_login" value="login">
                                    
                                    <div class="f_login">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            <i toggle="#password" class="fa fa-meh-rolling-eyes fa-lg field-icon toggle-password"></i>
                                        </div>
                                    </div>

                                    <div class="row f_regis" style="display: none;">
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
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username_regis">Username</label>
                                                <input type="text" class="form-control" id="username_regis" name="username_regis" placeholder="Username">
                                            </div>

                                            <div class="form-group">
                                                <label for="userpassword_regis">Password</label>
                                                <input type="password" class="form-control" id="password_regis" name="password_regis" placeholder="Password">
                                                <i toggle="#password_regis" class="fa fa-meh-rolling-eyes fa-lg field-icon toggle-password"></i>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row m-t-30 mb-0">
                                        <div class="col-sm-7">
                                            
                                        </div>
                                        <div class="col-sm-5 text-right">
                                            <a href="javascript:void(0)" class="text-muted register">Register</a>
                                            <a href="javascript:void(0)" class="text-muted batal_regis" style="display: none;">Batal Register</a>
                                        </div>
                                    </div>
                                    
                                    <hr>

                                    <div class="mt-3">
                                        <button class="btn btn-block waves-effect waves-light text-white btn-login" style="background-color: #30419b;" type="submit">Login</button>
                                    </div>
                                    
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>© 2021 Info Matakuliah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="<?= base_url() ?>assets/template_login/assets/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/template_login/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/template_login/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/template_login/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url() ?>assets/template_login/assets/libs/node-waves/waves.min.js"></script>

    <!-- select2 -->
    <script src="<?= base_url() ?>assets/select2/select2.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="<?= base_url() ?>assets/swa/sweetalert2.all.min.js"></script>

    <script src="<?= base_url() ?>assets/template_login/assets/js/app.js"></script>

    <script>
        $('.select2').select2({
            theme       : 'bootstrap4',
            width       : 'style',
            placeholder : $(this).attr('placeholder'),
            allowClear  : false
        });
    </script>

    <script>
        
        $(document).ready(function () {

            $('.register').on('click', function () {

                $('.f_login').slideUp();
                $('.f_regis').slideDown();
                $('.register').fadeOut();
                $('.batal_regis').fadeIn();
                $('.clas').removeClass('col-xl-5');
                $('.clas').addClass('col-xl-10');
                $('.btn-login').text('Register');

                $('#aksi_login').val('register');
            })

            $('.batal_regis').on('click', function () {

                $('.f_login').slideDown();
                $('.f_regis').slideUp();
                $('.register').fadeIn();
                $('.batal_regis').fadeOut();
                $('.clas').addClass('col-xl-5');
                $('.clas').removeClass('col-xl-10');
                $('.btn-login').text('Login');

                $('#aksi_login').val('login');
            })
            
            $('#form-login').on('submit', function () {

                var form_data   = $(this).serialize();
                var aksi_login  = $('#aksi_login').val();

                if (aksi_login == 'register') {
                    
                    var username    = $('#username_regis').val();
                    var password    = $('#password_regis').val();
                    var nama        = $('#nama').val();
                    var no_wa       = $('#no_wa').val();
                    var jk          = $('[name=jk]').val();

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

                    } else if (username == "") {

                        $('#username').focus();

                        swal({
                            title               : "Peringatan",
                            text                : 'Username harus terisi dahulu!',
                            type                : 'warning',
                            showConfirmButton   : false,
                            timer               : 700
                        }); 

                        return false;

                    } else if (password == "") {

                        $('#password').focus();

                        swal({
                            title               : "Peringatan",
                            text                : 'Password harus terisi dahulu!',
                            type                : 'warning',
                            showConfirmButton   : false,
                            timer               : 700
                        }); 

                        return false;

                    } else {

                        $.ajax({
                            type        : "post",
                            url         : "<?= base_url('Auth/cek_regis') ?>",
                            beforeSend  : function () {
                                swal({
                                    title   : 'Menunggu',
                                    html    : 'Memproses Data',
                                    onOpen  : () => {
                                        swal.showLoading();
                                    }
                                })
                            },
                            data        : form_data,
                            dataType    : 'JSON',
                            success     : function (data) {

                                if (data.status == 1) {

                                    var url = "<?= base_url('dashboard') ?>";

                                    window.location.href = url;

                                } else if (data.status == 0) {

                                    $('#username').val('');

                                    swal({
                                        title               : "Peringatan",
                                        text                :  (data.pesan).toLowerCase().replace(/(?<= )[^\s]|^./g, a=>a.toUpperCase()),
                                        type                : 'warning',
                                        showConfirmButton   : false,
                                        timer               : 1000
                                    }); 

                                    $('#username').focus();

                                    return false;
                                    
                                } else if (data.status == 2) {

                                    $('#password').val('');

                                    swal({
                                        title               : "Peringatan",
                                        text                : (data.pesan).toLowerCase().replace(/(?<= )[^\s]|^./g, a=>a.toUpperCase()),
                                        type                : 'warning',
                                        showConfirmButton   : false,
                                        timer               : 1000
                                    }); 

                                    $('#password').focus();

                                    return false;
                                    
                                } else if (data.status == 3) {

                                    var url = "<?= base_url('matakuliah') ?>";

                                    window.location.href = url;

                                } else {
                                    
                                    swal({
                                        title               : "Peringatan",
                                        text                : (data.pesan).toLowerCase().replace(/(?<= )[^\s]|^./g, a=>a.toUpperCase()),
                                        type                : 'warning',
                                        showConfirmButton   : false,
                                        timer               : 1000
                                    }); 

                                    return false;

                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                swal({
                                    title               : "Peringatan",
                                    text                : "Koneksi Tidak Terhubung",
                                    type                : 'warning',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                }); 

                                return false;
                            }							

                            
                        })
                        
                        return false;

                    }

                    return false;
                    
                } else {

                    var username    = $('#username').val();
                    var password    = $('#password').val();

                    if ((username == "") && (password == "")) {

                        $('#username').focus();

                        swal({
                            title               : "Peringatan",
                            text                : 'Semua data harus terisi dahulu!',
                            type                : 'warning',
                            showConfirmButton   : false,
                            timer               : 1000
                        }); 

                        return false;

                    } else if (username == "") {

                        $('#username').focus();

                        swal({
                            title               : "Peringatan",
                            text                : 'Username harus terisi dahulu!',
                            type                : 'warning',
                            showConfirmButton   : false,
                            timer               : 700
                        }); 

                        return false;

                    } else if (password == "") {

                        $('#password').focus();

                        swal({
                            title               : "Peringatan",
                            text                : 'Password harus terisi dahulu!',
                            type                : 'warning',
                            showConfirmButton   : false,
                            timer               : 700
                        }); 

                        return false;

                    } else {

                        $.ajax({
                            type        : "post",
                            url         : "<?= base_url('Auth/cek') ?>",
                            beforeSend  : function () {
                                swal({
                                    title   : 'Menunggu',
                                    html    : 'Memproses Data',
                                    onOpen  : () => {
                                        swal.showLoading();
                                    }
                                })
                            },
                            data        : form_data,
                            dataType    : 'JSON',
                            success     : function (data) {

                                if (data.status == 1) {

                                    var url = "<?= base_url('dashboard') ?>";

                                    window.location.href = url;

                                } else if (data.status == 0) {

                                    $('#username').val('');

                                    swal({
                                        title               : "Peringatan",
                                        text                :  (data.pesan).toLowerCase().replace(/(?<= )[^\s]|^./g, a=>a.toUpperCase()),
                                        type                : 'warning',
                                        showConfirmButton   : false,
                                        timer               : 1000
                                    }); 

                                    $('#username').focus();

                                    return false;
                                    
                                } else if (data.status == 2) {

                                    $('#password').val('');

                                    swal({
                                        title               : "Peringatan",
                                        text                : (data.pesan).toLowerCase().replace(/(?<= )[^\s]|^./g, a=>a.toUpperCase()),
                                        type                : 'warning',
                                        showConfirmButton   : false,
                                        timer               : 1000
                                    }); 

                                    $('#password').focus();

                                    return false;
                                    
                                } else if (data.status == 3) {

                                    var url = "<?= base_url('matakuliah') ?>";

                                    window.location.href = url;

                                } else {
                                    
                                    swal({
                                        title               : "Peringatan",
                                        text                : (data.pesan).toLowerCase().replace(/(?<= )[^\s]|^./g, a=>a.toUpperCase()),
                                        type                : 'warning',
                                        showConfirmButton   : false,
                                        timer               : 1000
                                    }); 

                                    return false;

                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                swal({
                                    title               : "Peringatan",
                                    text                : "Koneksi Tidak Terhubung",
                                    type                : 'warning',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                }); 

                                return false;
                            }							

                            
                        })
                        
                        return false;

                    }

                        
                }

            })

            $(".toggle-password").click(function() {

                $(this).toggleClass("fa-meh-rolling-eyes fa-smile-beam");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                input.attr("type", "text");
                } else {
                input.attr("type", "password");
                }

            });

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

        })
        
    </script>

</body>

</html>