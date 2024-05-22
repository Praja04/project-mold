<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>


                </ul>
                <div>
                    <div class="btn-wrapper">
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                </div>
            </div>
            <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row" >
                                <div class="col-sm-12 ">
                                    <div class="statistics-details d-flex align-items-center justify-content-between ">
                                      
                                    <div>
                                            <p class="statistics-title">Part Name</p>
                                            <h3 class="rate-percentage" id="partname"></h3>
                                        </div>
                                        <div>
                                            <p class="statistics-title">Part Number</p>
                                            <h3 class="rate-percentage" id="partnumber"></h3>
                                        </div>
                                        <div>
                                            <p class="statistics-title">Tanggal Update</p>
                                            <h3 class="rate-percentage" id="tanggalupdate"></h3>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">Posisi Mold</p>
                                            <h3 class="rate-percentage" id="posisimold"></h3>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">Kode Mold</p>
                                            <h3 class="rate-percentage" id="kodemold"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 d-flex flex-column">
                            <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card">
                                    <div class="card card-rounded">
                                        <div class="card-body">
                                            <div class="d-sm-flex justify-content-between align-items-start">
                                                <div>
                                                    <h4 class="card-title card-title-dash">Gambar Mold</h4>
                                                    <p class="card-subtitle card-subtitle-dash">Kondisi mold saat ini. </p>
                                                </div>
                                            </div>
                                            <div class="chartjs-bar-wrapper mt-3">
                                                <img id="gambar" src="" alt="gambar_mold" width="100%" height="600px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                            <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card">
                                    <div class="card card-rounded">
                                        <div class="card-body" style="height: 200px;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="card-title card-title-dash">Verifikasi Mold</h4>
                                                    </div>
                                                    <div class="list-wrapper">
                                                        <ul class="todo-list todo-list-rounded">
                                                            <li class="d-block">
                                                                <div class="form-check w-100">
                                                                    <label class="form-check-label">
                                                                        <b>Hasil verifikasi mold anda</b>
                                                                    </label>
                                                                    <div style=" text-align: center;">
                                                                        <img id="gambar_verif" src="" alt="verifikasi" width="50%">
                                                                    </div>
                                                                    <div id="condition" style="display: block;">
                                                                        <p id="hasil"></p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card"></div>
                            </div>
                            <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card"></div>
                            </div>
                            <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card"></div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    // Perbarui elemen HTML dengan ID 'partname' menggunakan data Part_Name
                    gambarmold = data.Lampiran_Gambar;
                    gambar_verif = data.Hasil_Verifikasi;
                    document.getElementById('partname').textContent = data.Part_Name;
                    document.getElementById('partnumber').textContent = data.Part_Number;
                    document.getElementById('tanggalupdate').textContent = data.Tanggal_Update;
                    document.getElementById('posisimold').textContent = data.Posisi_Mold;
                    document.getElementById('kodemold').textContent = data.Kode_Mold;
                    document.getElementById('gambar').src = "<?php echo base_url('uploads/') ?>" + gambarmold;
                    if (gambar_verif == 1) {
                        console.log(gambar_verif);
                        document.getElementById('gambar_verif').src = "<?php echo base_url('assets/images/succes.png') ?>";
                        document.getElementById('hasil').textContent = "Diterima";
                        document.getElementById('condition').className = "badge badge-opacity-success me-3";
                    }
                    else if(gambar_verif == 0) {
                        console.log(gambar_verif);
                        document.getElementById('gambar_verif').src = "<?php echo base_url('assets/images/loading.png') ?>";
                        document.getElementById('hasil').textContent = "Diproses";
                        document.getElementById('condition').className = "badge badge-opacity-warning me-3";
                    }else {
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
<?= $this->endSection() ?>