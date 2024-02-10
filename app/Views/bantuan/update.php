<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Form -->
    <div class="row">
        <div class="col-lg-10">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Jenis Bantuan</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('/bantuan/update_save') ?>" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?= $data['id'] ?>">
                        <div class="form-group">
                            <label for="nama_bantuan">NAMA BANTUAN</label>
                            <input type="text" class="form-control" name="nama_bantuan" value="<?= $data['nama_bantuan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_bantuan">JUMLAH BANTUAN</label>
                            <input type="text" class="form-control" name="jumlah_bantuan" value="<?= $data['jumlah_bantuan'] ?>">
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