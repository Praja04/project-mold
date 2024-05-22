<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                
                <div class="col-lg-6 col-12">
                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Verifikasi Mold</h4>
                        </div>
                        <!-- /.box-header -->
                        <form>
                            <div class="box-body">

                                <div class="form-group">
                                    <label class="form-label">Subject Mold:</label>
                                    <input type="Text" class="form-control" value="<?= $moldData['Subject_Mold'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tools/Jig:</label>
                                    <input disabled type="text" class="form-control" value="<?= $moldData['Subject_Tool'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mesin:</label>
                                    <input disabled type="text" class="form-control" value="<?= $moldData['Subject_Mesin'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Produk:</label>
                                    <input disabled type="text" class="form-control" value="<?= $moldData['Subject_Produk'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Proses:</label>
                                    <input disabled type="text" class="form-control" value="<?= $moldData['Subject_Proses'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Validasi Ke:</label>
                                    <input disabled type="text" class="form-control" value="<?= $moldData['Validasi_Ke'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LK3:</label>
                                    <input disabled type="text" class="form-control" value="<?= $moldData['LK3'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Spesifikasi:</label>
                                    <input disabled type="text" class="form-control" value="<?= $moldData['Spesifikasi'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Hasil Verifikasi:</label>
                                    <input disabled type="text" class="form-control" value=" <?php if ($moldData['Hasil_Verifikasi'] == 0) {
                                                                                                    echo "Belum di verifikasi";
                                                                                                } elseif ($moldData['Hasil_Verifikasi'] == 1) {
                                                                                                    echo "Sudah diverifikasi";
                                                                                                } else {
                                                                                                    echo "Hasil verifikasi ditolak";
                                                                                                } ?>">
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <?php if ($moldData['Hasil_Verifikasi'] == 0) { ?>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-danger" onclick="ubahHasilVerifikasi2(<?php echo $moldData['Id']; ?>)">Not Accepted</button>
                                    <button type="submit" class="btn btn-success pull-right" onclick="ubahHasilVerifikasi(<?php echo $moldData['Id']; ?>)">Accepted</button>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-lg-6 col-12">
                    <!-- Basic Forms -->
                    <div class="box">

                        <div class="box-header with-border">
                            <h4 class="box-title">Data Mold</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-3 col-form-label">Part Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" value="<?= $moldData['Part_Name'] ?>" id="example-text-input" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-3 col-form-label">Tanggal Update</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" value="<?= $moldData['Tanggal_Update'] ?>" id="example-search-input" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-3 col-form-label">Posisi Mold</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" value="<?= $moldData['Posisi_Mold'] ?>" id="example-email-input" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-sm-3 col-form-label">Suplier</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" value="<?= $moldData['Subcount_Suplier'] ?>" id="example-url-input" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Gambar Mold</h4>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <a href="../../../../uploads/<?= $moldData['Gambar_Mold'] ?>" class="gambar_mold col-sm-4 col-form-label"><img src="../../../../uploads/<?= $moldData['Gambar_Mold'] ?>" style="width: 100px; height:100px"></a>

                                        <div class="col-sm-6">
                                            <b>Deskripsi Mold</b>
                                            <p><?= $moldData['Deskripsi_Mold'] ?></p>
                                        </div>
                                    <div class="form-group row">
                                        <a href="../../../../uploads/<?= $moldData['Gambar_Part'] ?>" class="gambar_mold col-sm-4 col-form-label"><img src="../../../../uploads/<?= $moldData['Gambar_Part'] ?>" style="width: 100px; height:100px"></a>

                                        <div class="col-sm-6">
                                            <b>Deskripsi Part</b>
                                            <p><?= $moldData['Deskripsi_Part'] ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <a href="../../../../uploads/<?= $moldData['Gambar_Runner'] ?>" class="gambar_mold col-sm-4 col-form-label"><img src="../../../../uploads/<?= $moldData['Gambar_Runner'] ?>" style="width: 100px; height:100px"></a>

                                        <div class="col-sm-6">
                                            <b>Deskripsi Runner</b>
                                            <p><?= $moldData['Deskripsi_Runner'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <!-- <div class="col-12 mb-20">
                    <div class="row row-cols-1 row-cols-lg-3 g-4">
                        <div class="col">
                            <a href="<?= base_url() ?>/uploads/<?= $moldData['Gambar_Mold'] ?>" class="gambar_mold">
                                <div class="card h-p60">
                                    <img style="height: 50%;" class="card-img-top" src="../../../../uploads/<?= $moldData['Gambar_Mold'] ?>" alt="card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title b-0 px-0">Deskripsi Gambar Mold</h4>
                                        <p><?= $moldData['Deskripsi_Mold'] ?></p>
                                    </div>
                                    <div class="card-footer justify-content-between d-flex">
                                        <span class="text-muted">Last updated 3 mins ago</span>
                                        <span>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half text-warning"></i>
                                            <span class="text-muted ms-2">(12)</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="../../../../uploads/<?= $moldData['Gambar_Part'] ?>" class="gambar_mold">
                                <div class="card h-p60">
                                    <img style="height: 50%;" class="card-img-top" src="../../../../uploads/<?= $moldData['Gambar_Part'] ?>" alt="card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title b-0 px-0">Gambar Part</h4>
                                        <p><?= $moldData['Deskripsi_Part'] ?></p>
                                    </div>
                                    <div class="card-footer justify-content-between d-flex">
                                        <span class="text-muted">Last updated 3 mins ago</span>
                                        <span>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half text-warning"></i>
                                            <span class="text-muted ms-2">(12)</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a class="gambar_mold" href="../../../../uploads/<?= $moldData['Gambar_Runner'] ?>">
                                <div class="card h-p60">
                                    <img style="height: 50%;" class="card-img-top" src="../../../../uploads/<?= $moldData['Gambar_Runner'] ?>" alt="card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title b-0 px-0">Gambar Runner</h4>
                                        <p><?= $moldData['Deskripsi_Runner'] ?></p>
                                    </div>
                                    <div class="card-footer justify-content-between d-flex">
                                        <span class="text-muted">Last updated 3 mins ago</span>
                                        <span>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half text-warning"></i>
                                            <span class="text-muted ms-2">(12)</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->

            </div>

    </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        $('.gambar_mold').fancybox();
    });


    function ubahHasilVerifikasi(moldID) {
        $.ajax({
            url: '<?php echo base_url('admin/updateHasilVerifikasi/') ?>' + moldID,
            type: 'POST',
            success: function(response) {
                if (response.success === true) {
                    alert('Berhasil Verifikasi');
                } else {
                    alert('Gagal mengubah hasil verifikasi!');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }


    function ubahHasilVerifikasi2(moldID) {
        $.ajax({
            url: '<?php echo base_url('admin/updateHasilVerifikasi2/') ?>' + moldID,
            type: 'POST',
            success: function(response) {
                if (response.success === true) {
                    alert('Berhasil Verifikasi');
                } else {
                    alert('Gagal mengubah hasil verifikasi!');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
</script>


<?= $this->endSection() ?>