<!-- Page-Title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title"><?= $title ?></h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Info MataKuliah</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h5 class="text-white mt-0 mb-0">Filter Data</h5>
      </div>
      <form action="#" method="POST" id="form_report" class="form-control-line" autocomplete="off">
        <input type="hidden" id="aksi" name="jns">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="col-md-3">

                    <div class='input-group mt-1'>
                        <input type='text' name="tgl_awal" id="tgl_awal" class="form-control datepicker text-center" placeholder="Awal Periode" value="<?= date("d-m-Y", now('Asia/Jakarta')) ?>" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <span class="ti-calendar"></span>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">

                    <div class='input-group mt-1'>
                        <input type='text' name="tgl_akhir" id="tgl_akhir" class="form-control datepicker text-center" placeholder="Akhir Periode" value="<?= date("d-m-Y", now('Asia/Jakarta')) ?>" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <span class="ti-calendar"></span>
                            </span>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-md-6">
              
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <button type="button" id="btn-filter" class="btn btn-success mr-2"><i class="fas fa-check mr-2"></i>Tampilkan</button>
              <button type="button" id="btn-reset" tgl="<?= date('d-m-Y', now('Asia/Jakarta')) ?>" class="btn btn-danger"><i class="fas fa-ban mr-2"></i>Reset</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?= $this->session->flashdata('aksi'); ?>
        <div class="card shadow">
            <div class="card-body table-responsive">

                <table class="table table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="tabel_matkul" width="100%" cellspacing="0">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="20%">Mata Kuliah</th>
                            <th width="20%">Narasumber</th>
                            <?php if ($id_siswa == '') : ?>
                                <th width="20%">Siswa</th>
                            <?php endif ?>
                            <th width="20%">Add Time</th>
                            <th width="10%">Aksi</th>
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

    $(document).ready(function () {

        var tabel_matkul = $('#tabel_matkul').DataTable({
            "processing"        : true,
            "serverSide"        : true,
            "order"             : [],
            "ajax"              : {
                "url"   : "<?= base_url('matakuliah/tampil_matkul') ?>",
                "type"  : "POST",
                "data"  : function (data) {
                    data.id_siswa    = '<?= $id_siswa ?>';
                    data.tgl_awal   = $('#tgl_awal').val();
                    data.tgl_akhir  = $('#tgl_akhir').val();
                },
            },
            "columnDefs"        : [{
                "targets"   : [0],
                "orderable" : false
            }, {
                'targets'   : [0],
                'className' : 'text-center',
            }]
        })

        $('#btn-filter').on('click', function () {

            tabel_matkul.ajax.reload(null, false);

            var awal  = $('#tgl_awal').val();
            var akhir = $('#tgl_akhir').val();

        })

        $('#btn-reset').on('click', function () {

            var tgl   = $('#btn-reset').attr('tgl');
            
            $('#tgl_awal').datepicker('setDate', tgl);
            $('#tgl_akhir').datepicker('setDate', tgl);

            var awal  = $('#tgl_awal').val();
            var akhir = $('#tgl_akhir').val();

            tabel_matkul.ajax.reload(null, false);

        })


        $('#tabel_matkul').on('click', '.hapus', function () {
          
            var id_tr       = $(this).data('id');
            var id_matkul   = $(this).attr('id_matkul');
            var matkul      = $(this).attr('matkul');
    
            swal({
                title       : 'Konfirmasi',
                text        : 'Yakin akan hapus mata kuliah '+matkul+' ?',
                type        : 'warning',
    
                buttonsStyling      : false,
                confirmButtonClass  : "btn btn-danger",
                cancelButtonClass   : "btn btn-primary mr-3",
    
                showCancelButton    : true,
                confirmButtonText   : 'Ya, hapus',
                confirmButtonColor  : '#d33',
                cancelButtonColor   : '#3085d6',
                cancelButtonText    : 'Batal',
                reverseButtons      : true
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url         : "<?= base_url() ?>matakuliah/hapus_matkul",
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
                        data        : {id_tr:id_tr, id_matkul:id_matkul},
                        dataType    : "JSON",
                        success     : function (data) {
    
                            tabel_matkul.ajax.reload(null,false);   

                            swal({
                                title               : 'Hapus',
                                text                : 'Data Berhasil Dihapus',
                                buttonsStyling      : false,
                                confirmButtonClass  : "btn btn-success",
                                type                : 'success',
                                showConfirmButton   : false,
                                timer               : 1000
                            }); 
                                
                            
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            swal({
                                title               : "Gagal",
                                text                : 'Gagal proses data',
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
                            title               : 'Batal',
                            text                : 'Anda membatalkan hapus data',
                            buttonsStyling      : false,
                            confirmButtonClass  : "btn btn-primary",
                            type                : 'error',
                            showConfirmButton   : false,
                            timer               : 1000
                        }); 
                }
            })
    
        })
        
    })
    
</script>