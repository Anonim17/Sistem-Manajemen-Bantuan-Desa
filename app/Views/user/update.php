<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Form -->
    <div class="row">
        <div class="col-lg-10">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('/user/update_save') ?>">
                        <input type="text" class="form-control" name="id" value="<?= $data['id'] ?>">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" value="<?= $data['nik'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" class="form-control" type="text" name="username" value="<?= $data['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" type="text" name="password" placeholder="Please enter new!"">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control" name="level">
                                <option value="admin" <?php if ($data['level'] == 'admin') echo 'selected'; ?>>Admin</option>
                                <option value="petugas" <?php if ($data['level'] == 'petugas') echo 'selected'; ?>>Petugas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                                <option value="1" <?php if ($data['status'] == '1') echo 'selected'; ?>>Aktif</option>
                                <option value="0" <?php if ($data['status'] == '0') echo 'selected'; ?>>Non-Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- End Form -->
</div>

<?= $this->endSection(); ?>