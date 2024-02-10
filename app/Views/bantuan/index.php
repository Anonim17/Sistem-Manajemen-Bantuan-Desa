<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Bantuan</h6>
            <?php if (!empty(session()->getFlashdata('notif'))) : ?>
                <div class="alert alert-warning">
                    <p>
                        <?= session()->getFlashdata('notif'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <hr>
            <a href="/bantuan/create" class="btn btn-success btn-icon-split">
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NAMA BANTUAN</th>
                            <th>JUMLAH BANTUAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $bantuan) : ?>
                            <tr>
                                <td><?php echo $bantuan['nama_bantuan']; ?></td>
                                <td><?php echo $bantuan['jumlah_bantuan']; ?></td>
                                <td>
                                    <a href="<?= base_url('/bantuan/delete/' . $bantuan['id']) ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin untuk menghapus data?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?= base_url('/bantuan/update/' . $bantuan['id']) ?>" class="btn btn-warning btn-circle">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </td>
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