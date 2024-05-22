<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-full">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-12 col-12">
          <div class="row">
            <div class="col-12 col-xl-12">
              <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">List Request Cell</h4>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".modal_req_cell">
                    Add Request Cell
                  </button>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="list_req_cell" class="table table-bordered table-striped" style="width:100%">
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Battery Type</th>
                          <th>Voltage Battery</th>
                          <th>Ah Battery</th>
                          <th>Total Seri</th>
                          <th>Total Pararel</th>
                          <th>Need Cell</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($data_req_cell as $v) : ?>
                          <tr>
                            <td><?= date('d-m-Y', strtotime($v['created_at'])) ?></td>
                            <td><?= $v['battery_type'] ?></td>
                            <td><?= $v['volt_battery'] ?></td>
                            <td><?= $v['ah_battery'] ?></td>
                            <td><?= $v['total_seri'] ?></td>
                            <td><?= $v['total_pararel'] ?></td>
                            <td><?= $v['need_cell'] ?></td>
                            <td class="text-center">
                            <?php if (session()->get('username') == 'admin'): ?>
                                <a href="<?= base_url('request_cell/') ?>cell_positioning_matrix/<?= $v['id_cell'] ?>/<?= $v['total_seri'] ?>" class="btn btn-success btn-sm">Matrix</a>
                                <a href="<?= base_url('request_cell/') ?>list_data_cell_adm/<?= $v['id_cell'] ?>/<?= $v['total_seri'] ?>" class="btn btn-success btn-sm">Position</a>
                                <a href="<?= base_url('request_cell/') ?>cell_detail/<?= $v['id_cell'] ?>/<?= $v['total_seri'] ?>" class="btn btn-primary btn-sm">Detail</a>
                                <a href="<?= base_url('request_cell/') ?>delete_cell/<?= $v['id_cell'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            <?php else: ?>
                                <a href="<?= base_url('request_cell/') ?>cell_positioning_matrix/<?= $v['id_cell'] ?>/<?= $v['total_seri'] ?>" class="btn btn-success btn-sm">Matrix</a>
                                <a href="<?= base_url('request_cell/') ?>list_data_cell/<?= $v['id_cell'] ?>/<?= $v['total_seri'] ?>" class="btn btn-success btn-sm">Position</a>
                                <a href="<?= base_url('request_cell/') ?>cell_detail/<?= $v['id_cell'] ?>/<?= $v['total_seri'] ?>" class="btn btn-primary btn-sm">Detail</a>
                            <?php endif; ?>
                              
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- /.content-wrapper -->

<div class="modal fade modal_req_cell" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Request Cell</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('request_cell/add_req_cell') ?>" method="post">
      <?= csrf_field() ?>
        <div class="modal-body">
          <div class="row">

            <div class="col-3">
              <div class="form-group">
                <label class="form-label">Battery Type</label>
                <select class="form-select select2" id="battery_type" name="battery_type" style="width: 100%;" required>
                    <option selected disabled>-- Choose Type --</option>
                    <option value="8FBN25" >8FBN25</option>
                    <option value="8FBMT50" >8FBMT50</option>
                    <option value="FB15" >FB15</option>
                    <option value="FB25" >FB25</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="form-label">Voltage Battery</label>
                <select class="form-control select2" id="volt_battery" name="volt_battery" style="width: 100%;" required>
                  <option selected disabled>-- Choose Voltage --</option>
                  <option value="35.2">35.2V</option>
                  <option value="44.8">44.8</option>
                  <option value="51.2">51.2V</option>
                  <option value="76.8">76.8V</option>
                  <option value="80">80V</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="form-label">Ah Battery</label>
                <select class="form-control select2" id="ah_battery" name="ah_battery" style="width: 100%;" required>
                    <option selected disabled>-- Choose Ah --</option>
                    <option value="440">440Ah</option>
                    <option value="500">500Ah</option>
                    <option value="600">600Ah</option>
                    <option value="605">605Ah</option>
                    <option value="800">800Ah</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer" style="float: right;">
          <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
          <input type="submit" class="btn btn-primary float-end" value="Tambah">
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
  $(document).ready(function() {
    $('#data_lhp_ball_mill').DataTable({
      order: []
    });
    $('.modal .select2').select2({
      dropdownParent: $('.modal')
    });
  });
</script>
<?= $this->endSection(); ?>