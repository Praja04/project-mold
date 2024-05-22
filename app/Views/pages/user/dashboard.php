<?= $this->extend('template/layout'); ?>

<?php

// returns false if the 'some_name' item doesn't exist or is null,
// true otherwise:
if (!isset($_SESSION['user_nama'])) {
  // ...
  return redirect()->to(base_url('/'));
}

?>
<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-full">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box no-shadow mb-0 bg-transparent">
            <div class="box-header no-border px-0">
              <h4 class="box-title">Your Dashboard Mold</h4>
              <ul class="box-controls pull-right d-md-flex d-none">

                <li class="dropdown">
                  <button class="dropdown-toggle btn btn-primary-light px-10" data-bs-toggle="dropdown" href="#" aria-expanded="false">View Drawing PDF</button>
                  <div class="dropdown-menu dropdown-menu-end" style="">
                    <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 col-12">
          <div class="box bg-secondary-light pull-up" >
            <div class="box-body">
              <div class="flex-grow-1">
                <div class="d-flex align-items-center pe-2 justify-content-between">
                  <div class="d-flex">
                    <span class="badge badge-primary me-10">Mold CBI</span>
                    <span class="badge badge-primary me-5"><i class="fa fa-product-hunt"></i></span>
                  </div>

                </div>
                <h4 class="mt-25 mb-5" id="partname"></h4>
                <p class="text-fade mb-0 fs-12">Nama Part</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 col-12">
          <div class="box bg-secondary-light pull-up" >
            <div class="box-body">
              <div class="flex-grow-1">
                <div class="d-flex align-items-center pe-2 justify-content-between">
                  <div class="d-flex">
                    <span class="badge badge-primary me-10">Address</span>
                    <span class="badge badge-primary me-5"><i class="fa fa-map-marker"></i></span>
                  </div>

                </div>
                <h4 class="mt-25 mb-5" id="posisimold"></h4>
                <p class="text-fade mb-0 fs-12">Posisi Mold</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 col-12">
          <div class="box bg-secondary-light pull-up" >
            <div class="box-body">
              <div class="flex-grow-1">
                <div class="d-flex align-items-center pe-2 justify-content-between">
                  <div class="d-flex">
                    <span class="badge badge-primary me-10">Date</span>
                    <span class="badge badge-primary me-5"><i class="fa fa-calendar-o "></i></span>
                  </div>
                  <!-- <div class="dropdown"></div> -->
                </div>
                <h4 class="mt-25 mb-5" id="tanggalupdate"></h4>
                <p class="text-fade mb-0 fs-12">Tanggal Update</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 col-12">
          <div class="box bg-secondary-light pull-up" >
            <div class="box-body">
              <div class="flex-grow-1">
                <label class="form-check-label">
                <p class="text-fade mb-0 fs-12"><b>Hasil verifikasi mold anda</b></p>
                </label>
                <div style=" text-align: center;">
                  <img id="gambar_verif" src="" alt="verifikasi" width="33" height="33">
                </div>
                <div id="condition" style="display: block;">
                  <p id="hasil" style="color: black;"></p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-xl-4 col-12">
            <div class="box">
              <div class="box-body">
                <h3 class="mt-0 mb-20">Gambar Mold</h3>
                <p class="text-fade" id="deskripsi_mold"></p>
                <div id="charts_widget_2_chart"></div>
                <img id="gambarmold" src="" alt="" width="300" height="200">
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-12">
            <div class="box">
              <div class="box-body">
                <h3 class="mt-0 mb-20">Gambar Part</h3>
                <p class="text-fade" id="deskripsi_part"></p>
                <img id="gambar_part" src="" alt="" width="300" height="200">
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-12">
            <div class="box">
              <div class="box-body">
                <h3 class="mt-0 mb-20">Gambar Runner</h3>
                <p class="text-fade" id="deskripsi_runner"></p>
                <img id="gambar_runner" src="" alt="" width="300" height="200">
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
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Fungsi untuk mendapatkan data dari URL menggunakan fetch API
    const getData = () => {
      // URL endpoint untuk permintaan
      const url = "<?= base_url('user/getData') ?>";

      // Gunakan fetch API untuk permintaan GET
      fetch(url)
        .then(response => {
          // Pastikan respons berhasil (status 200)
          if (!response.ok) {
            throw new Error('HTTP error ' + response.status);
          }
          // Ubah respons menjadi format JSON
          return response.json();
        })
        .then(data => {
          gambarmold = data.Gambar_Mold;
          gambarpart = data.Gambar_Part;
          gambar_runner = data.Gambar_Runner;
          gambar_verif = data.Hasil_Verifikasi;

          document.getElementById('partname').textContent = data.Part_Name;
          document.getElementById('posisimold').textContent = data.Posisi_Mold;
          document.getElementById('tanggalupdate').textContent = data.Tanggal_Update;
          document.getElementById('deskripsi_mold').textContent = data.Deskripsi_Mold;
          document.getElementById('deskripsi_part').textContent = data.Deskripsi_Part;
          document.getElementById('deskripsi_runner').textContent = data.Deskripsi_Runner;
          document.getElementById('gambarmold').src = "<?php echo base_url('uploads/') ?>" + gambarmold;
          document.getElementById('gambar_part').src = "<?php echo base_url('uploads/') ?>" + gambarpart;
          document.getElementById('gambar_runner').src = "<?php echo base_url('uploads/') ?>" + gambar_runner;

          if (gambar_verif == 1) {
            console.log(gambar_verif);
            document.getElementById('gambar_verif').src = "<?php echo base_url('assets/images/succes.png') ?>";
            document.getElementById('hasil').textContent = "Diterima";
            document.getElementById('condition').className = "badge badge-opacity-success me-3";
          } else if (gambar_verif == 0) {
            console.log(gambar_verif);
            document.getElementById('gambar_verif').src = "<?php echo base_url('assets/images/loading.png') ?>";
            document.getElementById('hasil').textContent = "Diproses";
            document.getElementById('condition').className = "badge badge-opacity-warning me-3";
          } else {
            console.log(gambar_verif);
            document.getElementById('gambar_verif').src = "<?php echo base_url('assets/images/reject.png') ?>";
            document.getElementById('hasil').textContent = "Ditolak";
            document.getElementById('condition').className = "badge badge-opacity-danger me-3";
          }
        })
        .catch(error => {
          // Tangani kesalahan jika ada
          console.error('Kesalahan saat mengambil data:', error);
        });
    };

    // Panggil fungsi getData saat dokumen siap
    getData();
  });
</script>

<?= $this->endSection(); ?>