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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>NO KK</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Pendidikan</th>
                            <th>Status Kawin</th>
                            <th>Status Kependudukan</th>
                            <th>Hubungan Keluarga</th>
                            <th>Kondisi Fisik</th>
                            <th>Pekerjaan</th>
                            <th>Status Pensiun</th>
                            <th>Pendapatan</th>
                            <th>Usaha</th>
                            <th>Alamat</th>
                            <th>Nomor Rumah</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Nomor Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($data as $warga) : ?>
                            <tr>
                                <td>
                                    <a href="<?= base_url('/warga/update/' . $warga['nik']) ?>" class="btn btn-warning btn-circle">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="<?= base_url('/warga/delete/' . $warga['nik']) ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin untuk menghapus data?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                <td><?php echo $warga['no_kk']; ?></td>
                                <td><?php echo $warga['nik']; ?></td>
                                <td><?php echo $warga['nama']; ?></td>
                                <td><?php echo $warga['jenis_kelamin']; ?></td>
                                <td><?php echo $warga['tanggal_lahir']; ?></td>
                                <td><?php echo $warga['pendidikan']; ?></td>
                                <td><?php echo $warga['status_kawin']; ?></td>
                                <td><?php echo $warga['status_kependudukan']; ?></td>
                                <td><?php echo $warga['hubungan_keluarga']; ?></td>
                                <td><?php echo $warga['kondisi_fisik']; ?></td>
                                <td><?php echo $warga['pekerjaan']; ?></td>
                                <td><?php echo $warga['status_pensiun']; ?></td>
                                <td><?php echo $warga['pendapatan']; ?></td>
                                <td><?php echo $warga['usaha']; ?></td>
                                <td><?php echo $warga['alamat']; ?></td>
                                <td><?php echo $warga['no_rumah']; ?></td>
                                <td><?php echo $warga['rt']; ?></td>
                                <td><?php echo $warga['rw']; ?></td>
                                <td><?php echo $warga['no_telp']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- Tambahkan baris lainnya sesuai data yang Anda ingin tampilkan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>