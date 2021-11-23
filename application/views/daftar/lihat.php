<style>
    .card:hover{
        box-shadow: 5px 5px 5px #d1d1d1;
        transform:scale(1.1);
        transition: all .5s ease;
    }
    .padding-0{
        padding-right:0;
        padding-left:0;
    }
</style>
<br><br><div class="row d-flex justify-content-center">

    <?php $k=0; foreach ($matkul as $m): 

        $id_matkul = $m['id_matkul'];
        $nm_matkul = $m['matkul'];

        $warna = ['primary', 'danger', 'warning', 'success'];

        if ($k <= 3) {
            $wr = $k;
        } else {
            $wr = $k % 4;
        }
        
        // cari id_matkul
        $cari = $this->master->cari_data('tr_kuota_matkul', ['id_siswa' => $id_siswa, 'id_matkul' => $id_matkul])->num_rows();

        if ($cari > 0) {
            $st     = "1";
            $str    = "Sudah Terdaftar";
            $btn    = "btn-warning";
        } else {
            $st     = "0";
            $str    = "Daftar";
            $btn    = "btn-success";
        }
    ?>
        
        <div class="col-md-4">
            <div class="card pulse">
                <div class="card-heading p-3 text-center">
                    <div>
                        <h4 class="font-20 mt-1"><?= ucwords($m['matkul']) ?></h4>
                    </div>
                    <span class="text-center sisa<?= $id_matkul ?>" style="font-size: 80px;"><?= $m['sisa_kuota'] ?></span> / <?= $m['kuota'] ?>
                    <div class="progress mt-1" style="height: 4px;">
                        <div class="progress-bar bg-<?= $warna[$wr] ?>" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><mark><?= $m['narasumber'] ?></mark></h6>
                </div>
                <div class="card-footer">
                   <div class="d-flex justify-content-center">
                        <div class="col-md-6 padding-0">
                            <button class="btn btn-light btn-lg mt-1 btn-block" onclick="tampil_tabel('<?= $id_matkul ?>','<?= $nm_matkul ?>')" type="button" id_matkul="<?= $id_matkul ?>" matkul = "<?= $nm_matkul ?>">Detail</button>
                        </div>
                        <div class="col-md-6 padding-0 btn-daftar<?= $id_matkul ?>">
                            <button class="btn <?= $btn ?> btn-lg mt-1 btn-block daftar daftar<?= $id_matkul ?>" type="button" status="<?= $st ?>" matkul = "<?= $nm_matkul ?>" id_siswa = "<?= $id_siswa ?>" id_matkul="<?= $id_matkul ?>"><?= $str ?></button>
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
        
        $('.daftar').on('click', function () {

            var status      = $(this).attr('status');
            var matkul      = $(this).attr('matkul');
            var id_matkul   = $(this).attr('id_matkul');
            var id_siswa    = $(this).attr('id_siswa');

            if (status == 0) {

                swal({
                    title       : 'Konfirmasi',
                    text        : 'Yakin akan daftar mata kuliah '+matkul+' ?',
                    type        : 'warning',

                    buttonsStyling      : false,
                    confirmButtonClass  : "btn btn-primary",
                    cancelButtonClass   : "btn btn-danger mr-3",

                    showCancelButton    : true,
                    confirmButtonText   : 'Ya, daftar',
                    confirmButtonColor  : '#d33',
                    cancelButtonColor   : '#3085d6',
                    cancelButtonText    : 'Batal',
                    reverseButtons      : true
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url         : "<?= base_url() ?>daftar/simpan_data",
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
                            data        : {id_siswa:id_siswa, id_matkul:id_matkul},
                            dataType    : "JSON",
                            success     : function (data) { 

                                    $('.daftar'+id_matkul).attr('status', 1);
                                    $('.daftar'+id_matkul).text('Sudah Terdaftar');
                                    $('.daftar'+id_matkul).addClass('btn-warning');
                                    $('.sisa'+id_matkul).text(data.sisa);

                                    if (data.sisa == 0) {
                                        $('.btn-daftar'+id_matkul).fadeOut();
                                    }

                                    swal({
                                        title               : 'Daftar',
                                        text                : 'Data Berhasil Disimpan',
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
                                text                : 'Anda membatalkan kirim data',
                                buttonsStyling      : false,
                                confirmButtonClass  : "btn btn-primary",
                                type                : 'error',
                                showConfirmButton   : false,
                                timer               : 1000
                            }); 
                    }
                })
                
            }

        })
        
    })
</script>