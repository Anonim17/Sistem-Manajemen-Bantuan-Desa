<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Managemen User</h6>
            <?php if (!empty(session()->getFlashdata('notif'))) : ?>
                <div class="alert alert-warning">
                    <p>
                        <?= session()->getFlashdata('notif'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <hr>
            <a href="/user/create" class="btn btn-success btn-icon-split">
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $user) : ?>
                            <tr>
                                <td><?= $user['nik']; ?></td>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['level']; ?></td>
                                <td><?= $user['status']; ?></td>
                                <td>
                                    <a href="<?= base_url('/user/delete/' . $user['id']) ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin untuk menghapus data?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?= base_url('/user/update/' . $user['id']) ?>" class="btn btn-warning btn-circle">
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