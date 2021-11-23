<!-- Page-Title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title"><?= $title ?></h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Info Mata Kuliah</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">

    <div class="col-md-6 col-xl-3"> 
        <div class="card shadow bg-primary text-white text-center">
            <div class="card-heading p-4">
                <div>
                    <h4 class="tgl-part"></h4>
                </div>
                <h3 style="margin-top: 20px;" class="time-part"></h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card shadow">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right mt-1">
                    <i class="ti-medall bg-success text-white"></i>
                </div>
                <div>
                    <h4 class="font-20">Mata Kuliah</h4>
                </div>
                <h3 style="margin-top: 50px;" class="text-center"><?= $matkul_sis ?></h3>
                <div class="progress mt-1" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

</div>