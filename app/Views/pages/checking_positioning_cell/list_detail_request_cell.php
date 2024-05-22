<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<?php
// var_dump($ref_lhp_ball_mill[0]['last_in_qty']);die;
// echo $summary_detail_note[0]['loss_over']; die;
?>
<div class="content-wrapper">
  <div class="container-full">
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4>All Data Detail Request Cell</h4>
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
                        <th>No</th>
                        <th hidden>Id</th>
                        <th>Cell</th>
                        <th>QR Code</th>
                        <th>Ir</th>
                        <th>Voltage</th>
                        <th class="text-center">Check</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($data_all_detail_req_cell as $v) : ?>
                        <tr class="">
                          <td><?= $i++; ?></td>
                          <td hidden id="id_detail_cell"><?= $v['id_detail_cell']; ?></td>
                          <td id="cell">Cell <?= $v['cell']; ?></td>
                          <td id="qr_battery"><?= $v['qr_battery']; ?></td>
                          <td id="ir"><?= $v['ir']; ?></td>
                          <td id="volt"><?= $v['volt']; ?></td>
                          <?php if ($v['check_qr'] == 'true') : ?>
                            <td class="text-center"><i id="check_icon_<?= $v['id_detail_cell'] ?>" class="fa fa-check" style="color: green;"></i></td>
                          <?php elseif ($v['check_qr'] == 'false') : ?>
                            <td class="text-center"><i id="check_icon_<?= $v['id_detail_cell'] ?>" class="fa fa-close" style="color: red;"></i></td>
                          <?php else : ?>
                            <td class="text-center"><i id="check_icon_<?= $v['id_detail_cell'] ?>" class="fa fa-window-minimize" style="color: grey;"></i></td>
                          <?php endif ?>
                        </tr>
                      <?php endforeach ?>
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

  function input_data_cell() {
    let id_cell = $('#id_cell').val();
    let qr_battery = $('#qr_battery').val();
    let ir = $('#ir').val();
    let volt = $('#volt').val();
    let limit_cell = $('#limit_cell').val();
    let need_cell = $('#need_cell').val();

    // Lakukan pengecekan limit_cell sebelum melakukan AJAX
    if (limit_cell == 0) {
      alert('Seluruh cell sudah terisi.');
      return; // Menghentikan eksekusi fungsi jika limit_cell = 0
    }

    // Lakukan AJAX hanya jika limit_cell > 0
    $.ajax({
      url: '<?= base_url('request_cell/') ?>add_detail_cell',
      type: 'post',
      data: {
        id_cell: id_cell,
        qr_battery: qr_battery,
        ir: ir,
        volt: volt,
        limit_cell: limit_cell,
        need_cell: need_cell,
      },
      dataType: 'json',
      success: function(data) {
        $.ajax({
          url: '<?= base_url('request_cell/') ?>edit_req_cell/' + id_cell,
          type: 'post',
          data: {
            limit_cell: limit_cell,
          },
          dataType: 'json',
          success: function(data) {
            location.reload();
          },
          error: function(xhr, status, error) {
            console.error(xhr.responseText);
          }
        });

      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  }
</script>
<?= $this->endSection(); ?>