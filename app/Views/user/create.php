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
                    <form method="post" action="<?= base_url('/user/store') ?>">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" class="form-control" type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" type="text" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control" name="level">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                        <input type="hidden" class="form-control" name="status" value="1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form -->
</div>

<?= $this->endSection(); ?>