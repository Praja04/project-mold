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
      <input type="hidden" name="id_cell" id="id_cell" value="<?= $data_req_cell['id_cell'] ?>">
      <div class="box"> 
          <div class="box-header with-border">
            <h4>Detail Request Cell</h4>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Battery Type</label>
                  <input readonly type="text" class="form-control" id="battery_type" name="battery_type" value="<?= $data_req_cell['battery_type'] ?>">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Voltage Battery</label>
                  <input readonly type="text" class="form-control" id="volt_battery" name="volt_battery" value="<?= $data_req_cell['volt_battery'] ?>">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Ah Battery</label>
                  <input readonly type="text" class="form-control" id="ah_battery" name="ah_battery" value="<?= $data_req_cell['ah_battery'] ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Total Seri</label>
                  <input readonly type="text" class="form-control" id="total_seri" name="total_seri" value="<?= $data_req_cell['total_seri'] ?>">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Total Pararel</label>
                  <input readonly type="text" class="form-control" id="total_pararel" name="total_pararel" value="<?= $data_req_cell['total_pararel'] ?>">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Need Cell</label>
                  <input readonly type="number" class="form-control" id="need_cell" name="need_cell" value="<?= $data_req_cell['need_cell'] ?>">
                </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-xl-12 col-12">
            <div class="box">
              <div class="box-header">
                <h4>Input Data To Cell</h4>
                <br>
                <table class="table">
                  <tr>
                    <td>
                      Limit Cell<input readonly type="number" class="form-control" id="limit_cell" name="limit_cell" value="<?= $data_req_cell['limit_cell'] ?>">
                    </td>
                  </tr>
                  <tr>
                    <td hidden>
                        ID Detail Cell<input readonly type="text" class="form-control" name="id_detail_cell" id="id_detail_cell" value="<?= isset($data_detail_req_cell_one['id_detail_cell']) ? $data_detail_req_cell_one['id_detail_cell'] : '-' ?>">
                    </td>
                    <td>
                        No Cell<input readonly type="text" class="form-control" name="no_cell" id="no_cell" value="<?= isset($data_detail_req_cell_one['cell']) ? $data_detail_req_cell_one['cell'] : '-' ?>">
                    </td>
                    <td>
                      <!-- file get content from API -->
                      <?php
                        $url = 'http://portal4.incoe.astra.co.id:8096/get_data_assy_lithium';
                        $data = file_get_contents($url);
                        $data = json_decode($data, true);
                      ?>

                      IR (mΩ)<input type="text" class="form-control" name="ir" id="ir" class="form-control" value="<?=$data[0]['param1']?>" readonly>
                    </td>
                    <td>
                      Voltage<input type="text" class="form-control" name="volt" id="volt" class="form-control" value="<?=$data[0]['param2']?>" readonly>
                    </td>
                    <td>
                      QR Code Battery<input type="text" class="form-control" name="qr_battery" id="qr_battery" class="form-control">
                    </td>
                    <td>
                        <button type="button" class="btn btn-md btn-primary" onclick="input_data_cell()" <?= isset($data_detail_req_cell_one['id_detail_cell']) ? '' : 'disabled' ?>>Submit</button>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="box-body">
                <div class="table-responsive">
                <br>
                  <table id="data_line_stop" class="table table-striped mb-0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Cell</th>
                        <th>QR Code</th>
                        <th>IR (mΩ)</th>
                        <th>Voltage</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach($data_detail_req_cell as $v) : ?>
                      <?php if($v['qr_battery'] != NULL): ?>
                      <tr class="">
                        <td><?= $i++; ?></td>
                        <td>Cell <?= $v['cell']; ?></td>
                        <td><?= $v['qr_battery']; ?></td>
                        <td><?= $v['ir']; ?> mΩ</td>
                        <td><?= $v['volt']; ?></td>
                      </tr>
                      <?php endif ?>
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
      $('#qr_battery').focus();

    $('#data_line_stop').DataTable({
        "scrollY": "600px",
        "scrollCollapse": true,
        "pageLength": 50,
    });

    // function clickButton() {
    //   $('#btn_submit').click();
    // }
    // setInterval(clickButton, 3600000); // SEJAM

    // update API with inter 3 second 
    setInterval(function() {
      $.ajax({
        url: '<?=base_url()?>get_data_lithium',
        type: 'get',
        dataType: 'json',
        success: function(data) {
          $('#ir').val(data[0].param1);
          $('#volt').val(data[0].param2);
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    }, 3000);
  });

  // create function if press enter auto click submit button
  $('#qr_battery').keypress(function(e) {
    if (e.which == 13) {
      input_data_cell();
    }
  });

function input_data_cell() {
    let id_detail_cell = $('#id_detail_cell').val();
    let id_cell = $('#id_cell').val();
    let qr_battery = $('#qr_battery').val();
    let ir = $('#ir').val();
    let volt = $('#volt').val();
    let no_cell = $('#no_cell').val();
    let limit_cell = $('#limit_cell').val();
    let need_cell = $('#need_cell').val();

    // Lakukan pengecekan limit_cell sebelum melakukan AJAX
    if (limit_cell == 0) {
        alert('Seluruh cell sudah terisi.');
        return; // Menghentikan eksekusi fungsi jika limit_cell = 0
    }

    // Lakukan AJAX hanya jika limit_cell > 0
    $.ajax({
        url: '<?= base_url('request_cell/') ?>add_detail_cell/' + id_detail_cell,
        type: 'post',
        data: {
            id_cell: id_cell,
            qr_battery: qr_battery,
            ir: ir,
            no_cell: no_cell,
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