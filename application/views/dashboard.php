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

<div class="row">

    <div class="col-md-6 col-xl-3">
        <div class="card shadow">
            <div class="card-heading p-4 text-center">
                <div>
                    <h4 class="font-20">Total Siswa</h4>
                </div>
                <h3 style="margin-top: 30px;" class="text-center"><?= $tot_siswa ?></h3>
                <div class="progress mt-1" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card shadow">
            <div class="card-heading p-4 text-center">
                <div>
                    <h4 class="font-20">Total Mata Kuliah</h4>
                </div>
                <h3 style="margin-top: 30px;" class="text-center"><?= $tot_matkul ?></h3>
                <div class="progress mt-1" style="height: 4px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow">
            <div class="card-heading p-4 text-center">
                <div>
                    <h4 class="font-20">Total Kuota</h4>
                </div>
                <h3 style="margin-top: 30px;" class="text-center"><?= $tot_kuota ?></h3>
                <div class="progress mt-1" style="height: 4px;">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow">
            <div class="card-heading p-4 text-center">
                <div>
                    <h4 class="font-20">Total Pendaftar</h4>
                </div>
                <h3 style="margin-top: 30px;" class="text-center"><?= $tot_pendaftar ?></h3>
                <div class="progress mt-1" style="height: 4px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">

                <!-- Nav tabs -->
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item waves-effect waves-light shadow">
                        <a class="nav-link active" data-toggle="tab" href="#pertanggal" role="tab">
                            <span class="d-none d-md-block font-weight-bold">Per Tanggal</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light shadow">
                        <a class="nav-link" data-toggle="tab" href="#perbulan" role="tab">
                            <span class="d-none d-md-block font-weight-bold">Per Bulan</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span> 
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="pertanggal" role="tabpanel">
                        <p class="mb-0 mt-1">
                        <canvas id="pertanggal_c" height="110"></canvas>
                        </p>
                    </div>

                    <div class="tab-pane p-3" id="perbulan" role="tabpanel">
                        <p class="mb-0 mt-1">
                            <canvas id="perbulan_c" height="110"></canvas>
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>


<?php 

    foreach ($bln as $b) {
        $bulan[] = $b;
    }

    foreach ($day as $d) {
        $hari[] = $d;
    }

    foreach ($siswa_h as $t) {
        $t_h[] = $t;
    }

    foreach ($matkul_h as $pj) {
        $pj_h[] = $pj;
    }

    foreach ($siswa_b as $tb) {
        $t_b[] = $tb;
    }

    foreach ($matkul_b as $pjb) {
        $pj_b[] = $pjb;
    }

?>

<script>
    $(document).ready(function () {

        var ctx = document.getElementById('perbulan_c').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode($bulan) ?>,
                datasets: [
                {
                    label: "Total Siswa",
                    backgroundColor: "rgba(141, 252, 221, 0.4)",
                    borderColor: "#02c58d",
                    borderWidth: 2,
                    hoverBackgroundColor: "rgba(141, 252, 221, 0.5)",
                    hoverBorderColor: "#02c58d",
                    data: <?= json_encode($t_b) ?>
                },
                {
                    label: "Total Mata Kuliah",
                    backgroundColor: "rgba(219, 243, 255, 0.4)",
                    borderColor: "#59c6fb",
                    borderWidth: 2,
                    hoverBackgroundColor: "rgba(219, 243, 255, 0.5)",
                    hoverBorderColor: "#59c6fb",
                    data: <?= json_encode($pj_b) ?>
                }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0, // it is for ignoring negative step.
                            beginAtZero: true,
                            callback: function(value, index, values) {
                                if (Math.floor(value) === value) {
                                    return value;
                                }
                            }
                        }
                    }]
                }
            }
        });

        // 05-11-2020
        var ctx = document.getElementById('pertanggal_c').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?= json_encode($hari) ?>,
                datasets: [
                {
                    label: "Total Siswa",
                    fill: true,
                    lineTension: 0.5,
                    backgroundColor: "rgba(54, 245, 190, 0.2)",
                    borderColor: "#02c58d",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#02c58d",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#02c58d",
                    pointHoverBorderColor: "#eef0f2",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: <?= json_encode($t_h) ?>
                },
                {
                    label: "Total Mata Kuliah",
                    fill: true,
                    lineTension: 0.5,
                    backgroundColor: "rgba(140, 211, 245, 0.2)",
                    borderColor: "#59c6fb",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#59c6fb",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#59c6fb",
                    pointHoverBorderColor: "#59c6fb",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: <?= json_encode($pj_h) ?>
                }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0, // it is for ignoring negative step.
                            beginAtZero: true,
                            callback: function(value, index, values) {
                                if (Math.floor(value) === value) {
                                    return value;
                                }
                            }
                        }
                    }]
                }
            }
        });
        
    })
</script>