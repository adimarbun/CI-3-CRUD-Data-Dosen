<div class="container pt-5">
	<style type="text/css">
		th:last-child, td:last-child
		{
		  position:sticky;
		  right:0px;
		}
	</style>
    <h3><?= $title ?></h3>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mb-2" href="<?= base_url('dosen/add'); ?>">Tambahkan Data Dosen</a>
            <div mb-2>
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tableDosen">
                            <thead>
                                <tr class="table-primary">
     								<th>No</th>
                                    <th>NAMA</th>
                                    <th>NIDN</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>AGAMA</th>
                                    <th>NO HP</th>
                                    <th>EMAIL</th>
                                    <th>JABATAN FUNGISONAL</th>
                                    <th>PENDIDIKAN TERAKHIR</th>
                                    <th style="position: sticky;left: '0px';">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                	$count = 0;
                                foreach ($data_dosen as $row){
                                	$count = $count+1;?>

                                    <tr>
                                    	<td><?= $count ?></td>
                                        <td><?= $row->Nama ?></td>
                                        <td><?= $row->Nidn ?></td>
                                        <td><?= $row->JenisKelamin ?></td>
                                        <td><?= $row->Agama ?></td>
                                        <td><?= $row->NoHp ?></td>
                                        <td><?= $row->Email ?></td>
                                        <td><?= $row->JabatanFungsional ?></td>
                                        <td><?= $row->PendidikanTerakhir ?></td>
                                        <td >
                                            <a href="<?= site_url('dosen/edit/' . $row->IdDosen) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                                            <a href="javascript:void(0);" data="<?= $row->IdDosen ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php 
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="btdelete">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#tableDosen').DataTable();
    $('#tableDosen').on('click', '.item-delete', function() {
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>dosen/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>