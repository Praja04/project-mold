<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<style>
  /* Center the matrix */
  #matrix-container {
    text-align: center;
  }
  .box-body {
    position: absolute;
    top: 80%;
    left: 25%;
  }

  /* Style for matrix buttons */
  .matrix-button {
    display: inline-block;
    width: 80px; /* Adjust button width as needed */
    height: 80px; /* Adjust button height as needed */
    font-size: 20px; /* Adjust font size as needed */
    text-align: center;
    line-height: 80px; /* Center the text vertically */
    border: 1px solid #ccc;
    margin: 5px;
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-full">
    <!-- Main content -->
    <section class="content">
      <div class="box"> 
        <div class="box-header with-border">
          <h4>Cell Positioning Matrix</h4>
        </div>
        <div class="row">
          <div class="col-xl-12 col-12">
            <div class="box">
              <div class="box-body" id="matrix-container">
                <!-- Matrix buttons will be inserted here -->
              </div>
              <div class="box-footer" style="text-align: center;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
</div>

<!-- Modal -->
<?php foreach ($all_data as $index => $data): ?>
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" data-value="<?= $index ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title " id="myLargeModalLabel">S<?= $index + 1?></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <?php foreach ($data as $item): ?>
              <div class="col-md-2 text-center">
                <h4 id="cell_<?= $item['id_detail_cell'] ?>"><?= $item['cell'] ?></h4>
                <br/>
                <input hidden type="text" class="form-control" name="id_detail_cell" id="id_detail_cell_<?= $item['id_detail_cell'] ?>" value="<?= $item['id_detail_cell'] ?>" class="form-control">
                <input hidden type="text" class="form-control" name="qr_battery" id="qr_battery_<?= $item['id_detail_cell'] ?>" value="<?= $item['qr_battery'] ?>" class="form-control">
                <input type="text" class="form-control" name="scan_qr_battery" id="scan_qr_battery_<?= $item['id_detail_cell'] ?>" class="form-control">
                <br/>
                <button type="button" class="btn btn-md btn-primary" onclick="checkQR(<?= $item['id_detail_cell'] ?>)">Submit</button>
                <br />
                <?php if($item['check_qr'] == 'true'): ?>
                <i id="check_icon_<?= $item['id_detail_cell'] ?>" class="fa fa-check" style="color: green;"></i>
                <?php elseif($item['check_qr'] == 'false'): ?>
                <i id="check_icon_<?= $item['id_detail_cell'] ?>" class="fa fa-close" style="color: red;"></i>
                <?php else: ?>
                <i id="check_icon_<?= $item['id_detail_cell'] ?>" class="fa fa-window-minimize" style="color: grey;"></i>
                <?php endif ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php endforeach; ?>
<!-- /.modal -->




<script>
const countArray = <?= json_encode($countArray) ?>;

function checkQR(index) {
    var qrBattery = document.getElementById('qr_battery_' + index).value;
    var scanQrBattery = document.getElementById('scan_qr_battery_' + index).value;
    var idDetailCell = document.getElementById('id_detail_cell_' + index).value;
    
    console.log(index);
    console.log(qrBattery);
    console.log(scanQrBattery);
    console.log(idDetailCell);

    var check_qr = qrBattery === scanQrBattery ? "true" : "false";

    $.ajax({
        url: '<?= base_url('request_cell/') ?>check_cell/' + idDetailCell,
        type: 'POST',
        data: {
            check_qr: check_qr,
        },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            // Tampilkan ikon check jika check_qr bernilai true, dan ikon close jika tidak
            if (check_qr === "true") {
                document.getElementById('check_icon_' + index).className = "fa fa-check";
                document.getElementById('check_icon_' + index).style.color = "green";
            } else {
                document.getElementById('check_icon_' + index).className = "fa fa-close";
                document.getElementById('check_icon_' + index).style.color = "red";
            }
            document.getElementById('check_icon_' + index).style.display = "inline";
        }
    });

}


function createMatrix() {
  var matrixContainer = document.getElementById('matrix-container');
  var matrixData;
  var matrixSize;
  
  // Periksa apakah countArray adalah 16 atau 24
  if (countArray === 16) {
    matrixSize = 4;
    matrixData = [
      [16, 9, 8, 1],
      [15, 10, 7, 2],
      [14, 11, 6, 3],
      [13, 12, 5, 4]
    ];
  } else if (countArray === 24) {
    matrixSize = 6;
    matrixData = [
      [24, 13, 12, 1],
      [23, 14, 11, 2],
      [22, 15, 10, 3],
      [21, 16, 9, 4],
      [20, 17, 8, 5],
      [19, 18, 7, 6]
    ];
  } else {
    // Jika countArray bukan 16 atau 24, lakukan penanganan error atau tindakan lainnya
    console.error('Invalid countArray value:', countArray);
    return;
  }

  // Loop untuk membuat matriks berdasarkan matrixData dan matrixSize yang sesuai
  for (var i = 0; i < matrixSize; i++) {
    var rowDiv = document.createElement('div');
    rowDiv.classList.add('row'); // Add row class to the div
    for (var j = 0; j < matrixData[i].length; j++) {
      var button = document.createElement('button');
      button.classList.add('matrix-button'); // Add button classes
      button.setAttribute('type', 'button');
      button.setAttribute('data-value', matrixData[i][j]); // Set data-value attribute
      button.innerText = matrixData[i][j];
      rowDiv.appendChild(button);
    }
    matrixContainer.appendChild(rowDiv); // Append the row to the matrix container
  }
}

// Panggil fungsi untuk membuat dan mengisi matriks saat halaman dimuat
window.onload = function() {
  createMatrix();

  // Mendapatkan semua tombol matriks
  var matrixButtons = document.querySelectorAll('.matrix-button');

  // Tambahkan event listener untuk setiap tombol
  matrixButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      // Mendapatkan nilai data-value dari tombol yang diklik
      var value = this.getAttribute('data-value');

      var fixval = value - 1;
      
      // Menyesuaikan modal dengan nilai data-value yang sesuai
      var modal = document.querySelector('.bs-example-modal-lg[data-value="' + fixval + '"]');
      
      // Menampilkan modal yang sesuai
      var modalInstance = new bootstrap.Modal(modal);
      modalInstance.show();
    });
  });
};
</script>


<?= $this->endSection(); ?>