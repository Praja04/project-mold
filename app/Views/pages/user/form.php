<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-12" id="form1">
                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Form Mold</h4>
                        </div>
                        <!-- /.box-header -->
                        <form id="form1-content">
                            <div class="box-body">
                                <h4 class="mt-0 mb-20">1. Data Mold:</h4>
                                <div class="form-group">
                                    <label class="form-label">Part Name:</label>
                                    <select class="form-select" id="partname">
                                        <option value="">Pilih Item</option>
                                        <?php foreach ($items as $item) : ?>
                                            <option value="<?= $item['ITEM'] ?>" data-made-in="<?= $item['MADE_IN'] ?>" data-status="<?= $item['STATUS'] ?>" data-material="<?= $item['Material'] ?>" data-id="<?= $item['NO.'] ?>"><?= $item['ITEM'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Element yang akan ditampilkan -->
                                <div id="additionalContent">
                                    <p id="madeInContent"></p>
                                    <p id="statusContent"></p>
                                    <p id="materialContent"></p>
                                    <p id="moldIdContent" style="visibility: hidden;"></p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Detail Mold</label>
                                    <textarea id="outputTextarea" class="form-control" rows="3" placeholder="..." disabled></textarea>
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-primary me-2" id="nextBtnForm1">Next</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-lg-12 col-12" id="form2">
                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Form Mold</h4>
                        </div>
                        <!-- /.box-header -->
                        <form id="form2-content">
                            <div class="box-body">
                                <h4 class="mt-0 mb-20">2. History Mold:</h4>
                                <h5 id="namapart"></h5>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Update:</label>
                                    <input class="form-control" type="datetime-local" id="tanggal_update">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Posisi Mold:</label>
                                    <input class="form-control" type="text" id="posisi_mold">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gambar Mold:</label>
                                    <input class="form-control" type="file" id="gambar_mold">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Deskripsi Mold:</label>
                                    <input class="form-control" type="text" id="deskripsi_mold" placeholder="Deskripsi Gambar Mold">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gambar Part:</label>
                                    <input class="form-control" type="file" id="gambar_part">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Deskripsi Part:</label>
                                    <input class="form-control" type="text" id="deskripsi_part" placeholder="Deskripsi Gambar Part">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gambar Runner:</label>
                                    <input class="form-control" type="file" id="gambar_runner">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Deskripsi Part:</label>
                                    <input class="form-control" type="text" id="deskripsi_runner" placeholder="Deskripsi Gambar Runner">
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-primary me-2" id="backBtnForm2">Back</button>
                                <button type="button" class="btn btn-primary me-2" id="nextBtnForm2">Next</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-lg-12 col-12" id="form3">
                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Form Mold</h4>
                        </div>
                        <!-- /.box-header -->
                        <form id="form3-content">
                            <div class="box-body">
                                <h4 class="mt-0 mb-20">3. Drawing Produk:</h4>
                                <div class="form-group">
                                    <label class="form-label">Lampiran Drawing (pdf):</label>
                                    <input class="form-control" type="file" id="drawing_produk">
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-primary me-2" id="backBtnForm3">Back</button>
                                <button type="button" class="btn btn-primary me-2" id="nextBtnForm3">Next</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-lg-12 col-12" id="form4">
                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Form Mold</h4>
                        </div>
                        <!-- /.box-header -->
                        <form id="form4-content">
                            <div class="box-body">
                                <h4 class="mt-0 mb-20">4. Verifikasi Mold:</h4>
                                <div class="form-group">
                                    <label class="form-label" for="subject_mold">Mold</label>
                                    <select class="form-select" name="subject_mold" id="subject_mold">
                                        <option value="baru">Baru</option>
                                        <option value="modifikasi">Modifikasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="tools">Jig/Tools</label>
                                    <select class="form-select" name="tools" id="tools">
                                        <option value="baru">Baru</option>
                                        <option value="modifikasi">Modifikasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="mesin">Mesin</label>
                                    <select class="form-select" name="mesin" id="mesin">
                                        <option value="baru">Baru</option>
                                        <option value="modifikasi">Modifikasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="produk">Produk</label>
                                    <select class="form-select" name="produk" id="produk">
                                        <option value="baru">Baru</option>
                                        <option value="modifikasi">Modifikasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="proses">Proses</label>
                                    <select class="form-select" name="proses" id="proses">
                                        <option value="baru">Baru</option>
                                        <option value="modifikasi">Modifikasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="subcount">Subcount / Suplier</label>
                                    <input class="form-control" type="text" class="form-control" name="subcount" id="subcount" placeholder="Subcount / Suplier">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="verif_ke">Verifikasi Ke </label>
                                    <input class="form-control" type="text" class="form-control" name="verif_ke" id="verif_ke" placeholder="verifikasi ke">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="lk3">Ada kaitan dengan LK3</label>
                                    <input class="form-control" type="text" class="form-control" id="lk3" name="lk3" placeholder="tidak / ya">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="spek">Spesifikasi</label>
                                    <textarea class="form-control" rows="3" id="spek" name="spek" placeholder="Spesifikasi"></textarea>
                                </div>
                                <div class="form-group" style="visibility: hidden;">
                                    <label class="form-label" for="hasilverif">Hasil Verifikasi</label>
                                    <input class="form-control" type="hidden" class="form-control" id="hasilverif" name="hasilverif" value="0">
                                    <!-- Set default value for hasilverif -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-primary me-2" id="backBtnForm4">Back</button>
                                <button type="button" class="btn btn-success" id="submitBtn">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>

            <div class="toast" id="submitToast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="3000">
                <div class="toast-header">
                    <strong class="me-auto">Notifications</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Data submitted successfully!
                </div>
            </div>
        </section>
    </div>
</div>

<script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        let moldId = '';
        $('#partname').change(function() {
            var partname = document.getElementById('partname');
            var selectedOption = $(this).find('option:selected');
            var madeIn = selectedOption.data('made-in');
            var status = selectedOption.data('status');
            var material = selectedOption.data('material');
            moldId = selectedOption.data('id');
            if (selectedOption.val()) {
                // $('#madeInContent').text('Made In: ' + madeIn);
                // $('#statusContent').text('Status: ' + status);
                // $('#materialContent').text('Material: ' + material);
                // $('#moldIdContent').text('Mold ID: ' + moldId);
                $('#namapart').text('Part Name: ' + selectedOption.val());
                // //$('#additionalContent').show();

                // Gabungkan teks dari elemen-elemen tersebut
                var combinedText = 'Made In: ' + madeIn + '\n' + 'Status: ' + status + '\n' + 'Material: ' + material;

                // Masukkan teks gabungan ke dalam textarea menggunakan jQuery
                $('#outputTextarea').val(combinedText);
            } else {
                $('#additionalContent').hide();
                $('#madeInContent').text('');
            }
        });


        // Function to show toast
        function showToast(message, isError = false) {
            var submitToast = $('#submitToast');
            if (submitToast.length) {
                if (isError) {
                    message = 'Invalid input';
                    submitToast.removeClass('bg-success').addClass('bg-danger');
                } else {
                    submitToast.removeClass('bg-danger').addClass('bg-success');
                }
                submitToast.find('.toast-body').html(message);
                submitToast.toast('show');
            } else {
                console.error('Element for toast not found!');
            }
        }

        // Function to hide/show forms
        function toggleForms(form1Visible, form2Visible = false, form3Visible = false, form4Visible = false) {
            $('#form1').toggle(form1Visible);
            $('#form2').toggle(form2Visible);
            $('#form3').toggle(form3Visible);
            $('#form4').toggle(form4Visible);
        }

        // Initial state: Show form 1, hide form 2 and form 3
        toggleForms(true);

        // Next button click event for form 1
        $('#nextBtnForm1').click(function() {
            // Validate form 1
            if (validateForm1()) {
                // If form 1 is valid, show form 2
                toggleForms(false, true);
            } else {
                // If form 1 is not valid, show error or alert
                showToast('Please fill all fields in form 1', true);
            }
        });

        // Back button click event for form 2
        $('#backBtnForm2').click(function() {
            // Show form 1 again
            toggleForms(true);
        });

        // Next button click event for form 2
        $('#nextBtnForm2').click(function() {
            // Validate form 2
            if (validateForm2()) {
                // If form 2 is valid, show form 3
                toggleForms(false, false, true);
            } else {
                // If form 2 is not valid, show error or alert
                showToast('Please fill all fields in form 2', true);
            }
        });

        // Back button click event for form 3
        $('#backBtnForm3').click(function() {
            // Show form 2 again
            toggleForms(false, true);
        });

        $('#nextBtnForm3').click(function() {
            // Validate form 3
            if (validateForm3()) {
                // If form 2 is valid, show form 4
                toggleForms(false, false, false, true);
            } else {
                // If form 3 is not valid, show error or alert
                showToast('Please fill all fields in form 3', true);
            }
        });

        // Back button click event for form 4
        $('#backBtnForm4').click(function() {
            // Show form 3 again
            toggleForms(false, false, true);
        });

        // Submit button click event for form 4
        $('#submitBtn').click(function() {
            // Validate form 4
            if (validateForm4()) {
                // If form 3 is valid, submit the form
                submitForm();
            } else {
                // If form 3 is not valid, show error or alert
                showToast('Please fill all fields in form 4', true);
            }
        });

        // Function to validate form 1 fields
        function validateForm1() {
            // Check if partname and partnumber are not empty
            var partname = $('#partname').val();
            return partname.trim() !== '';
        }

        function validateForm2() {
            var tanggalupdate = $('#tanggal_update').val();
            var posisimold = $('#posisi_mold').val();
            var gambar_mold = $('#gambar_mold').val();
            var deskripsi_mold = $('#deskripsi_mold').val();
            var gambar_part = $('#gambar_part').val();
            var deskripsi_part = $('#deskripsi_part').val();
            var gambar_runner = $('#gambar_runner').val();
            var deskripsi_runner = $('#deskripsi_runner').val();
            return tanggalupdate.trim() !== '' && posisimold.trim() !== '' && gambar_mold.trim() != '' && deskripsi_mold.trim() !== '' && deskripsi_runner.trim() != '' && gambar_runner.trim() != '' && deskripsi_part.trim() !== '' && gambar_part.trim() !== '';
        }

        function validateForm3() {
            var drawing_produk = $('#drawing_produk').val();
            return drawing_produk.trim() !== '';
        }

        // Function to validate form 3 fields
        function validateForm4() {
            // Check if any field is empty
            var fields = ['subject_mold', 'tools', 'mesin', 'produk', 'proses', 'subcount', 'verif_ke', 'lk3', 'spek'];
            for (var i = 0; i < fields.length; i++) {
                var fieldValue = $('#' + fields[i]).val();
                if (fieldValue.trim() === '') {
                    return false;
                }
            }
            return true;
        }

        function submitForm() {
            var formData = new FormData();
            formData.append('moldIdContent', moldId);
            formData.append('partname', $('#partname').val());
            formData.append('gambar_mold', $('#gambar_mold')[0].files[0]);
            formData.append('deskripsi_mold', $('#deskripsi_mold').val());
            formData.append('gambar_part', $('#gambar_part')[0].files[0]);
            formData.append('deskripsi_part', $('#deskripsi_part').val());
            formData.append('gambar_runner', $('#gambar_runner')[0].files[0]);
            formData.append('deskripsi_runner', $('#deskripsi_runner').val());
            formData.append('tanggal_update', $('#tanggal_update').val());
            formData.append('posisi_mold', $('#posisi_mold').val());
            formData.append('drawing_produk', $('#drawing_produk')[0].files[0]);
            formData.append('subject_mold', $('#subject_mold').val());
            formData.append('tools', $('#tools').val());
            formData.append('mesin', $('#mesin').val());
            formData.append('produk', $('#produk').val());
            formData.append('proses', $('#proses').val());
            formData.append('subcount', $('#subcount').val());
            formData.append('verif_ke', $('#verif_ke').val());
            formData.append('lk3', $('#lk3').val());
            formData.append('spek', $('#spek').val());
            formData.append('hasilverif', '0'); // Default value

            // for (let pair of formData.entries()) {
            //     console.log(pair[0] + ',' + pair[1]);
            // }
            $.ajax({
                url: '/submit2',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.hasOwnProperty('message')) {
                        showToast(response.message);
                        $('#form1-content')[0].reset();
                        toggleForms(true);
                        setTimeout(function() {
                            location.reload();
                        }, 6000);
                    } else if (response.hasOwnProperty('error')) {
                        showToast(response.error, true);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

    });
</script>
<?= $this->endSection() ?>