<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Form -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Filter</h6>
                    <form action="" method="GET">
                        <div class="form-group">
                            <label for="no_kk">STATUS KELUARGA</label>
                            <select name="status_keluarga" class="form-control">
                                <option value="miskin">Miskin</option>
                                <option value="sangat miskin">Sangat Miskin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pilih</button>
                    </form>
                </div>

                <?php if (!isset($_GET['status_keluarga'])) : ?>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pilih Filter Status Keluarga Terlebih Dahulu!</h6>
                    </div>
                <?php else : ?>
                    <?php
                    $warga = $data[0];
                    $bantuan = $data[1];
                    ?>

                    <div class="card-body">
                        <form method="post" action="<?= base_url('/bantuan_warga/store') ?>" id="form">
                            <div class="form-group">
                                <label for="no_kk">Nomor KK</label>
                                <select name="no_kk" id="no_kk" class="form-control">
                                    <option disabled>Pilih No_KK Penerima!</option>
                                    <?php foreach ($warga as $data) : ?>
                                        <?php if ($_GET['status_keluarga'] == 'miskin') : ?>
                                            <?php if (!(600000 < $data['jml_pendapatan'] && $data['jml_pendapatan'] <= 1600000)) : ?>
                                                <?php continue; ?>
                                            <?php endif; ?>
                                            <?php $status = "Miskin"; ?>
                                            <option value="<?= $data['no_kk'] ?>"><?= $data['no_kk'] . ', ' . $data['nama'] . ' (' . $data['jml_pendapatan'] . ', ' . $status . ')' ?></option>
                                        <?php endif; ?>
                                        <?php if ($_GET['status_keluarga'] == 'sangat miskin') : ?>
                                            <?php if (!($data['jml_pendapatan'] <= 600000)) : ?>
                                                <?php continue; ?>
                                            <?php endif; ?>
                                            <?php $status = "Sangat Miskin"; ?>
                                            <option value="<?= $data['no_kk'] ?>"><?= $data['no_kk'] . ', ' . $data['nama'] . ' (' . $data['jml_pendapatan'] . ', ' . $status . ')' ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_bantuan">JENIS BANTUAN</label>
                                <select name="id_bantuan" id="id_bantuan" class="form-control">
                                    <option disabled>Pilih NIK Penerima!</option>
                                    <?php foreach ($bantuan as $data) : ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['nama_bantuan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <input type="hidden" class="form-control" name="status" value="Belum Diterima">
                            <div class="form-group">
                                <label for="tanggal_bantuan">TANGGAL BANTUAN</label>
                                <input type="date" class="form-control" name="tanggal_bantuan" data-provide="datepicker">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <!-- End Form -->
</div>

<?= $this->endSection(); ?>