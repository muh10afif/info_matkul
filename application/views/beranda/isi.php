<style>
    .padding-0{
        padding-right:0;
        padding-left:0;
    }
</style>
<div class="row d-flex justify-content-center">

    <?php $k=0; foreach ($matkul as $m): 

        $id_matkul = $m['id_matkul'];
        $nm_matkul = $m['matkul'];

        $warna = ['primary', 'danger', 'warning', 'success'];

        if ($k <= 3) {
            $wr = $k;
        } else {
            $wr = $k % 4;
        }
        
    ?>
        
        <div class="col-md-4">
            <div class="card pulse daftar">
                <div class="card-heading p-3 text-center">
                    <div>
                        <h4 class="font-20 mt-1"><?= ucwords($m['matkul']) ?></h4>
                    </div>
                    <span class="text-center" style="font-size: 80px;"><?= $m['sisa_kuota'] ?></span> / <?= $m['kuota'] ?>
                    <div class="progress mt-1" style="height: 4px;">
                        <div class="progress-bar bg-<?= $warna[$wr] ?>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer">
                   <div class="d-flex justify-content-center">
                        <div class="col-md-6 padding-0">
                            <button class="btn btn-light btn-lg mt-1 btn-block" onclick="tampil_tabel('<?= $id_matkul ?>','<?= $nm_matkul ?>')" type="button" id_matkul="<?= $id_matkul ?>" matkul = "<?= $nm_matkul ?>">Detail</button>
                        </div>
                        <div class="col-md-6 padding-0">
                            <button class="btn btn-success btn-lg mt-1 btn-block" type="button" onclick="daftar('<?= $id_matkul ?>','<?= $nm_matkul ?>')">Daftar</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
    <?php $k++; endforeach; ?>
    
</div>

<input type="hidden" id="id_matkul">


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
    
    function daftar(id, matkul) {

        $.ajax({
            url     : "<?= base_url() ?>auth/sess_matkul",
            type    : "POST",
            data    : {id_matkul:id, matkul:matkul},
            dataType: "JSON",
            success : function (data) {

                window.location.href = "<?= base_url('auth/login') ?>";
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                swal({
                    title               : "Gagal",
                    text                : 'Gagal Menampilkan Data',
                    type                : 'error',
                    showConfirmButton   : false,
                    timer               : 1000
                }); 

                return false;
            }
        })

        return false;
        
    }

    function tampil_tabel(id_matkul, matkul) {
        
        $('#id_matkul').val(id_matkul);
        
        $('#modal_tabel').modal('show');
        $('#judul_modal').text('List siswa mata kuliah '+matkul);

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
        
    }


    $(document).ready(function () {
        
        
        
    })
</script>