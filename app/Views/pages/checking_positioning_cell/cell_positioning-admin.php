<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-full">
    <!-- Main content -->
    <section class="content">
      <div class="box"> 
          <div class="box-header with-border">
            <h4>Cell Positioning</h4>
          </div>
        <div class="row">
          <div class="col-xl-12 col-12">
            <div class="box">
              <div class="box-body">
                <div class="table-responsive">
                  <br>
                  <table id="data_line_stop" class="table table-striped mb-0">
                    <thead>
                      <tr>
                          <th class="text-center align-middle" style="white-space:nowrap;" rowspan="2">Seri</th>
                          <?php foreach($data_calc_cell as $key => $value): ?>
                              <th class="text-center align-middle" style="white-space:nowrap;" colspan="4">Pararel <?= $key + 1; ?></th>
                          <?php endforeach; ?>
                          <th class="text-center align-middle" style="white-space:nowrap;" colspan="2">Total</th>
                      </tr>
                      <tr>
                          <?php foreach($data_calc_cell as $key => $value): ?>
                              <th class="text-center align-middle" style="white-space:nowrap;">Cell</th>
                              <th class="text-center align-middle" style="white-space:nowrap;">QR</th>
                              <th class="text-center align-middle" style="white-space:nowrap;">Ir</th>
                              <th class="text-center align-middle" style="white-space:nowrap;">Volt</th>
                          <?php endforeach; ?>
                          <th class="text-center align-middle" style="white-space:nowrap;">Ir</th>
                          <th class="text-center align-middle" style="white-space:nowrap;">Volt</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($all_data as $pararel_key => $pararel_data): ?>
                            <tr>
                                <td class="text-center align-middle"><?= $i++; ?></td>
                                <?php foreach ($pararel_data as $index => $value): ?>
                                    <?php if ($index !== 'ir_total' && $index !== 'volt_total'): ?>
                                        <?php if ($value['qr_battery'] !== '' && $value['cell'] !== ''): ?>
                                            <td class="text-center align-middle"><?= $value['qr_battery']; ?></td>
                                            <td class="text-center align-middle"><?= $value['cell']; ?></td>
                                        <?php endif; ?>
                                        <td class="text-center align-middle"><?= $value['ir']; ?></td>
                                        <td class="text-center align-middle"><?= $value['volt']; ?></td>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box-footer" style="text-align: center;">
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- /.content-wrapper -->
<div class="modal" id="loading-modal" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background-color:rgba(0, 0, 0, 0.01);">
      <div class="modal-body text-center">
        <div class="spinner-border text-light" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <h5 class="mt-2 text-light">Loading...</h5>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {

    $('#data_line_stop').DataTable({
        "scrollY": "600px",
        "scrollCollapse": true,
        "pageLength": 50,
    });

    // function clickButton() {
    //   $('#btn_submit').click();
    // }
    // setInterval(clickButton, 3600000); // SEJAM
  });

</script>
<?= $this->endSection(); ?>