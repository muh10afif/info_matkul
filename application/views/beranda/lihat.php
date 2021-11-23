<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Info Matkul</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/template/assets/images/favicon.ico">

    <?php $this->load->view('template/css'); ?>
    <script src="<?= base_url() ?>assets/template/assets/js/jquery.min.js"></script>
    <style>
        .card:hover{
            box-shadow: 5px 5px 5px #d1d1d1;
            transform:scale(1.1);
            transition: all .5s ease;
        }
    </style>
</head>

<body>

    <div class="header-bg mb-0" >
        <!-- Navigation Bar-->
        <?php $this->load->view('beranda/header');
         ?>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->

    <div class="wrapper">
        <div class="container-fluid">
            
            <?php $this->load->view('beranda/isi'); ?>

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

    <!-- Footer -->
    <footer class="footer">
        © 2021 Info Matkul.
    </footer>

    <!-- End Footer -->

    <?php $this->load->view('template/js'); ?>

</body>

</html>