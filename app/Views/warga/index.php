<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Warga</h6>
            <?php if (!empty(session()->getFlashdata('notif'))) : ?>
                <div class="alert alert-warning">
                    <p>
                        <?= session()->getFlashdata('notif'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <hr>
            <a href="/warga/create" class="btn btn-success btn-icon-split">
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="95%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Detail</th>
                            <th>NO KK</th>
                            <th>NAMA</th>
                            <th>NIK</th>
                            <th>Jumlah Anggota Keluarga</th>
                            <th>Status Keluarga</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>ALAMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $warga) : ?>
                            <?php
                            $db = db_connect();
                            $query = "SELECT * FROM warga WHERE hubungan_keluarga = 'Kepala Keluarga' and no_kk = " . $warga['no_kk'];
                            $result = $db->query($query)->getResultArray();

                            if (!isset($result[0])) {
                                $query = "SELECT * FROM warga WHERE hubungan_keluarga = 'Istri' and no_kk = " . $warga['no_kk'];
                                $result = $db->query($query)->getResultArray();
                            }
                            if (!isset($result[0])) {
                                $query = "SELECT * FROM warga WHERE hubungan_keluarga = 'Anak' and no_kk = " . $warga['no_kk'];
                                $result = $db->query($query)->getResultArray();
                            }
                            ?>

                            <tr>
                                <td>
                                    <a href="<?= base_url('/warga/detail/' . $warga['no_kk']) ?>" class="btn btn-success btn-circle">
                                        <i class="fas fa-info"></i>
                                    </a>
                                </td>
                                <td><?php echo $warga['no_kk']; ?></td>
                                <td><?php echo $result[0]['nama']; ?></td>
                                <td><?php echo $result[0]['nik']; ?></td>
                                <td><?php echo $warga['jumlah_anggota']; ?></td>
                                <td>
                                    <?php echo $warga['jml_pendapatan']; ?>
                                    <br>
                                    <?php
                                    if ($warga['jml_pendapatan'] < 600000) {
                                        echo "(Sangat Miskin)";
                                    } elseif (600000 <= $warga['jml_pendapatan'] &&  $warga['jml_pendapatan'] < 1600000) {
                                        echo "(Miskin)";
                                    } elseif (1600000 <= $warga['jml_pendapatan'] &&  $warga['jml_pendapatan'] < 6600000) {
                                        echo "(Mampu)";
                                    } else {
                                        echo "(Sangat Mampu)";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $result[0]['rt']; ?></td>
                                <td><?php echo $result[0]['rw']; ?></td>
                                <td><?php echo $result[0]['alamat']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>