<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <?php if ($moldData) : ?>
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

                    </div>
                <?php else : ?>
                    <h1>Data Mold tidak ditemukan</h1>
                    <p>Untuk User ini, tidak ada data mold yang tersedia.</p>
                <?php endif; ?>
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