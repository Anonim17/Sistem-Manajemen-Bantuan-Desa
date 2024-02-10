<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Bantuan Sosial Ekonomi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <button class="button btn-primary"><b><a class="nav-link" href="<?= base_url('login') ?>" style="color: white;">Login</a></b></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('/AdminLTE/img/icon1.png') ?>" alt="Deskripsi gambar" style="width: auto;">
        </div>
        <h1>Program Bantuan Sosial Ekonomi</h1>
        <p>Dukungan untuk Masyarakat yang Membutuhkan</p>
        <p class="text-center">KECAMATAN CIBALONG, DESA SINGAJAYA, DUSUN BANTARPAYUNG</p>
        <p class="text-center">Jln. Raya Karangnunggal No. 73 Tlp (0265) 566274 Singajaya – Cibalong 46185</p>
    </header>

    <section class="container mt-5">
        <h2 class="mb-4">Form Pencarian</h2>
        <form action="" method="GET">
            <div class="mb-3">
                <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
            </div>
            <div class="mb-3">
                <label for="no_kk" class="form-label">No KK (Nomor Kartu Keluarga)</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Masukkan No KK">
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Penentuan Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0-599.999</td>
                    <td>Sangat Miskin</td>
                </tr>
                <tr>
                    <td>600.000-1.599.999</td>
                    <td>Miskin</td>
                </tr>
                <tr>
                    <td>1.599.999-5.599.999</td>
                    <td>Mampu</td>
                </tr>
                <tr>
                    <td>5.599.999-</td>
                    <td>Sangat Mampu</td>
                </tr>
            </tbody>
        </table>
    </section>

    <?php if (isset($_GET['nik']) and isset($_GET['no_kk'])) : ?>
        <?php
        $nik = $_GET['nik'];
        $no_kk = $_GET['no_kk'];

        $db = db_connect();
        $query = "SELECT *
                FROM warga
                WHERE nik = '" . $nik . "' and no_kk = '" . $no_kk . "'";

        $warga = $db->query($query)->getResultArray();

        $query2 = "SELECT nama_bantuan, jumlah_bantuan, tanggal_bantuan, status
                FROM bantuan_warga, bantuan
                WHERE bantuan_warga.no_kk = '" . $no_kk . "' and bantuan.id = bantuan_warga.id_bantuan";

        $bantuan_warga = $db->query($query2)->getResultArray();

        $query3 = "SELECT 
                    no_kk,
                    SUM(pendapatan) AS jml_pendapatan
                FROM warga
                GROUP BY no_kk";

        $pendapatan = $db->query($query3)->getResultArray();

        foreach ($pendapatan as $index => $item) {
            if ($item['no_kk'] == $no_kk) {
                break;
            }
        }

        $pendapatan_keluarga = $pendapatan[$index];
        ?>
        <hr>
        <?php if (empty($warga)) : ?>
            <section class="bg-light py-5">
                <div class="container text-center">
                    <h1>Data Tidak Ditemukan!!</h1>
                </div>
            </section>
        <?php else : ?>
            <section class="bg-light py-5">
                <div class="container">
                    <h2>Data Penduduk dan Status Bantuan</h2>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Identitas Penduduk</h5>
                                    <?php foreach ($warga as $value) : ?>
                                        <p><b>NIK</b> : <?= $value['nik'] ?></p>
                                        <p><b>NO KK</b> : <?= $value['no_kk'] ?></p>
                                        <p><b>NAMA</b> : <?= $value['nama'] ?></p>
                                        <p><b>Jenis Kelamin</b> : <?= $value['jenis_kelamin'] ?></p>
                                        <p><b>Tanggal Lahir</b> : <?= $value['tanggal_lahir'] ?></p>
                                        <p><b>Pendidikan</b> : <?= $value['pendidikan'] ?></p>
                                        <p><b>Status Kawin</b> : <?= $value['status_kawin'] ?></p>
                                        <p><b>Status Kependudukan</b> : <?= $value['status_kependudukan'] ?></p>
                                        <p><b>Hubungan Keluarga</b> : <?= $value['hubungan_keluarga'] ?></p>
                                        <p><b>Kondisi Fisik</b> : <?= $value['kondisi_fisik'] ?></p>
                                        <p><b>Pekerjaan</b> : <?= $value['pekerjaan'] ?></p>
                                        <p><b>Status Pensiun</b> : <?= $value['status_pensiun'] ?></p>
                                        <p><b>Pendapatan</b> : <?= $value['pendapatan'] ?></p>
                                        <p><b>Usaha</b> : <?= $value['usaha'] ?></p>
                                        <p><b>Alamat</b> : <?= $value['alamat'] ?></p>
                                        <p><b>Nomor Rumah</b> : <?= $value['no_rumah'] ?></p>
                                        <p><b>RT</b> : <?= $value['rt'] ?></p>
                                        <p><b>RW</b> : <?= $value['rw'] ?></p>
                                        <p><b>Nomor Telepon</b> : <?= $value['no_telp'] ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Status Keluarga</h5>
                                    <?php if ($pendapatan_keluarga['jml_pendapatan'] > 1600000) : ?>
                                        <p><b>Pendapatan Keluarga :</b> : <?= $pendapatan_keluarga['jml_pendapatan'] ?></p>
                                        <p>Keluarga Anda Tidak Berhak Menjadi Penerima Bantuan, karena total pendapatan keluarga anda lebih dari <?= $pendapatan_keluarga['jml_pendapatan'] ?></p>
                                    <?php else : ?>
                                        <p><b>Pendapatan Keluarga :</b> : <?= $pendapatan_keluarga['jml_pendapatan'] ?></p>
                                        <p>Keluarga Anda Berhak untuk Menerima Bantuan, karena total pendapatan keluarga anda lebih dari <?= $pendapatan_keluarga['jml_pendapatan'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Status Bantuan</h5>
                                    <?php if (empty($bantuan_warga)) : ?>
                                        <h3>Bukan Penerima Bantuan!</h3>
                                    <?php else : ?>
                                        <center>
                                            <p><b>Keluarga dengan keterangan </b></p>
                                        </center>
                                        <p><b>kepala keluarga :</b> : <?= $warga[0]['nama'] ?></p>
                                        <p><b>No KK :</b> : <?= $warga[0]['no_kk'] ?></p>

                                        <center>
                                            <p><b>Memperoleh bantuan</b></p>
                                        </center>
                                        <?php foreach ($bantuan_warga as $value) : ?>
                                            <p><b>Nama Bantuan</b> : <?= $value['nama_bantuan'] ?></p>
                                            <p><b>Jumlah Bantuan</b> : <?= $value['jumlah_bantuan'] ?></p>
                                            <p><b>Tanggal Bantuan</b> : <?= $value['tanggal_bantuan'] ?></p>
                                            <p><b>Status</b> : <?= $value['status'] ?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endif; ?>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Apa itu Bantuan Sosial Ekonomi?</h2>
                <p>Program ini dirancang untuk membantu masyarakat yang sedang menghadapi kesulitan ekonomi dengan memberikan bantuan dalam bentuk dana tunai atau barang-barang kebutuhan.</p>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container text-center">
            <h2>Keuntungan Program Bantuan</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dana Tunai</h5>
                            <p class="card-text">Bantuan dalam bentuk dana tunai untuk membantu Anda mengatasi kesulitan keuangan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Barang Kebutuhan</h5>
                            <p class="card-text">Bantuan dalam bentuk barang-barang kebutuhan seperti makanan, pakaian, dan lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pendidikan dan Pelatihan</h5>
                            <p class="card-text">Program ini juga menyediakan dukungan pendidikan dan pelatihan untuk meningkatkan keterampilan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>Hak Cipta &copy; 2023 Program Bantuan Sosial Ekonomi</p>
    </footer>

    <!-- Add Bootstrap JS and Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>