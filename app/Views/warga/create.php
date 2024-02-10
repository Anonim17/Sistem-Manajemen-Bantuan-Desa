<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- Form -->
    <div class="row">
        <div class="col-lg-10">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Registrasi Sosial Ekonomi</h6>
                    <?php if (!empty(session()->getFlashdata('notif'))) : ?>
                        <div class="alert alert-warning">
                            <p>
                                <?php foreach (session()->getFlashdata('notif') as $field => $error) : ?>
                                    <?php echo $field . ' => ' . $error; ?>
                                    <br>
                                <?php endforeach; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('/warga/store') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="no_kk">NO KK</label>
                            <input type="text" class="form-control" name="no_kk" placeholder="NO KK">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="Laki-laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" data-provide="datepicker">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <span class="form-arrow"><i class="bx bx-chevron-down"></i></span>
                            <select class="form-control" name="pendidikan">
                                <option value="Belum Sekolah">Belum Sekolah</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="SLB">SLB</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_kawin">Status Pernikahan</label>
                            <select class="form-control" name="status_kawin">
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_kependudukan">Status Kependudukan</label>
                            <select class="form-control" name="status_kependudukan">
                                <option value="Tinggal Bersama">Tinggal Bersama</option>
                                <option value="Meninggal">Meninggal</option>
                                <option value="Tidak Tinggal Bersama Keluarga">Tidak Tinggal Bersama Keluarga</option>
                                <option value="Ke Luar Negeri">Ke Luar Negeri</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hubungan_keluarga">Hubungan Keluarga</label>
                            <select class="form-control" name="hubungan_keluarga">
                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                <option value="Anak">Anak</option>
                                <option value="Suami">Suami</option>
                                <option value="Istri">Istri</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kondisi_fisik">Kondisi Fisik</label>
                            <input type="text" class="form-control" name="kondisi_fisik" placeholder="Kondisi Fisik">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="status_pensiun">Status Pensiun</label>
                            <select class="form-control" name="status_pensiun">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pendapatan">Pendapatan</label>
                            <input type="text" class="form-control" name="pendapatan" placeholder="Pendapatan">
                        </div>
                        <div class="form-group">
                            <label for="usaha">Usaha</label>
                            <select class="form-control" name="usaha">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_rumah">Nomor Rumah</label>
                            <input type="text" class="form-control" name="no_rumah" placeholder="Nomor Rumah">
                        </div>
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input type="text" class="form-control" name="rt" placeholder="RT">
                        </div>
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input type="text" class="form-control" name="rw" placeholder="RW">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="text" class="form-control" name="no_telp" placeholder="No Telepon">
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