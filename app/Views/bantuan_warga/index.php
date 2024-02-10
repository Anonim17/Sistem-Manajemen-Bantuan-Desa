<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/bantuan_warga/create" class="btn btn-success btn-icon-split">
                <span class="text">Tambah Data</span>
            </a>
            <hr>
            
            <h6 class="m-0 font-weight-bold text-primary">Filter</h6>
            <?php if (!empty(session()->getFlashdata('notif'))) : ?>
                <div class="alert alert-warning">
                    <p>
                        <?= session()->getFlashdata('notif'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <form action="" method="GET">
                <div class="form-group">
                    <label for="no_kk">JENIS BANTUAN</label>
                    <select name="bantuan" class="form-control">
                        <?php foreach ($bantuan as $data_bantuan) : ?>
                            <?php if (isset($_GET['bantuan'])) : ?>
                                <option value="<?= $data_bantuan['id'] ?>" <?php if ($data_bantuan['id'] == $_GET['bantuan']) {
                                                                                echo "selected";
                                                                            } ?>><?= $data_bantuan['nama_bantuan'] ?>, <?= $data_bantuan['jumlah_bantuan'] ?></option>
                            <?php else : ?>
                                <option value="<?= $data_bantuan['id'] ?>"><?= $data_bantuan['nama_bantuan'] ?>, <?= $data_bantuan['jumlah_bantuan'] ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Pilih</button>
            </form>
        </div>

        <?php if (!isset($_GET['bantuan'])) : ?>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pilih Filter Jenis Bantuan Terlebih Dahulu!</h6>
            </div>
        <?php else : ?>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Laporan Bantuan</h6>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>AKSI</th>
                                    <th>No KK</th>
                                    <th>NIK</th>
                                    <th>NAMA PENERIMA</th>
                                    <th>NAMA BANTUAN</th>
                                    <th>JUMLAH BANTUAN</th>
                                    <th>STATUS</th>
                                    <th>TANGGAL BANTUAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $bantuan) : ?>
                                    <?php if ($bantuan['id_bantuan'] != $_GET['bantuan']) : ?>
                                        <?php continue; ?>
                                    <?php endif; ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url('/bantuan_warga/delete/' . $bantuan['id']) ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin untuk menghapus data?');">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <?php if ($bantuan['status'] == 'Belum Diterima') : ?>
                                                <a href="<?= base_url('/bantuan_warga/update_diterima/' . $bantuan['id']) ?>" class="btn btn-success btn-circle">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            <?php else : ?>
                                                <a href="<?= base_url('/bantuan_warga/update_ditolak/' . $bantuan['id']) ?>" class="btn btn-warning btn-circle">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            <?php endif ?>
                                        </td>
                                        <td><?php echo $bantuan['no_kk']; ?></td>
                                        <td><?php echo $bantuan['nik']; ?></td>
                                        <td><?php echo $bantuan['nama']; ?></td>
                                        <td><?php echo $bantuan['nama_bantuan']; ?></td>
                                        <td><?php echo $bantuan['jumlah_bantuan']; ?></td>
                                        <td><?php echo $bantuan['status']; ?></td>
                                        <td><?php echo $bantuan['tanggal_bantuan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>