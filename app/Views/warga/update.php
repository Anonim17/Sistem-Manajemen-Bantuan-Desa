<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Form -->
    <div class="row">
        <div class="col-lg-10">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Barang</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('/warga/update_save') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" value="<?= $data['nik'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="no_kk">NO KK</label>
                            <input type="text" class="form-control" name="no_kk" value="<?= $data['no_kk'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="Laki-laki" <?php if ($data['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki Laki</option>
                                <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" data-provide="datepicker" value="<?= $data['tanggal_lahir'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <select class="form-control" name="pendidikan">
                                <option value="Belum Sekolah" <?php if ($data['pendidikan'] == 'Belum Sekolah') echo 'selected'; ?>>Belum Sekolah</option>
                                <option value="SD" <?php if ($data['pendidikan'] == 'SD') echo 'selected'; ?>>SD</option>
                                <option value="SMP" <?php if ($data['pendidikan'] == 'SMP') echo 'selected'; ?>>SMP</option>
                                <option value="SMA" <?php if ($data['pendidikan'] == 'SMA') echo 'selected'; ?>>SMA</option>
                                <option value="D1" <?php if ($data['pendidikan'] == 'D1') echo 'selected'; ?>>D1</option>
                                <option value="D2" <?php if ($data['pendidikan'] == 'D2') echo 'selected'; ?>>D2</option>
                                <option value="D3" <?php if ($data['pendidikan'] == 'D3') echo 'selected'; ?>>D3</option>
                                <option value="S1" <?php if ($data['pendidikan'] == 'S1') echo 'selected'; ?>>S1</option>
                                <option value="S2" <?php if ($data['pendidikan'] == 'S2') echo 'selected'; ?>>S2</option>
                                <option value="S3" <?php if ($data['pendidikan'] == 'S3') echo 'selected'; ?>>S3</option>
                                <option value="SLB" <?php if ($data['pendidikan'] == 'SLB') echo 'selected'; ?>>SLB</option>
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
                                <option value="Tinggal Bersama" <?php if ($data['status_kependudukan'] == 'Tinggal Bersama') echo 'selected'; ?>>Tinggal Bersama</option>
                                <option value="Meninggal" <?php if ($data['status_kependudukan'] == 'Meninggal') echo 'selected'; ?>>Meninggal</option>
                                <option value="Tidak Tinggal Bersama Keluarga" <?php if ($data['status_kependudukan'] == 'Tidak Tinggal Bersama Keluarga') echo 'selected'; ?>>Tidak Tinggal Bersama Keluarga</option>
                                <option value="Ke Luar Negeri" <?php if ($data['status_kependudukan'] == 'Ke Luar Negeri') echo 'selected'; ?>>Ke Luar Negeri</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hubungan_keluarga">Hubungan Keluarga</label>
                            <select class="form-control" name="hubungan_keluarga">
                                <option value="Kepala Keluarga" <?php if ($data['hubungan_keluarga'] == 'Kepala Keluarga') echo 'selected'; ?>>Kepala Keluarga</option>
                                <option value="Anak" <?php if ($data['hubungan_keluarga'] == 'Anak') echo 'selected'; ?>>Anak</option>
                                <option value="Suami" <?php if ($data['hubungan_keluarga'] == 'Suami') echo 'selected'; ?>>Suami</option>
                                <option value="Istri" <?php if ($data['hubungan_keluarga'] == 'Istri') echo 'selected'; ?>>Istri</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kondisi_fisik">Kondisi Fisik</label>
                            <input type="text" class="form-control" name="kondisi_fisik" value="<?= $data['kondisi_fisik'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" value="<?= $data['pekerjaan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="status_pensiun">Status Pensiun</label>
                            <select class="form-control" name="status_pensiun">
                                <option value="Ya" <?php if ($data['status_pensiun'] == 'Ya') echo 'selected'; ?>>Ya</option>
                                <option value="Tidak" <?php if ($data['status_pensiun'] == 'Tidak') echo 'selected'; ?>>Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pendapatan">Pendapatan</label>
                            <input type="text" class="form-control" name="pendapatan" value="<?= $data['pendapatan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="usaha">Usaha</label>
                            <select class="form-control" name="usaha">
                            <option value="Ya" <?php if ($data['usaha'] == 'Ya') echo 'selected'; ?>>Ya</option>
                                <option value="Tidak" <?php if ($data['usaha'] == 'Tidak') echo 'selected'; ?>>Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_rumah">Nomor Rumah</label>
                            <input type="text" class="form-control" name="no_rumah" value="<?= $data['no_rumah'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input type="text" class="form-control" name="rt" value="<?= $data['rt'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input type="text" class="form-control" name="rw" value="<?= $data['rw'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="text" class="form-control" name="no_telp" value="<?= $data['no_telp'] ?>">
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