<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('/AdminLTE/img/icon1.png') ?>" alt="Deskripsi gambar" style="width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">Pendataan Bantuan Warga</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if (session()->get('level') == 'admin') : ?>

        <!-- Nav Item - Dashboard -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Dashboard
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Managemen Data
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="/warga/index">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Warga</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="/bantuan/index">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Jenis Bantuan</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="/bantuan_warga/index">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Laporan Bantuan Warga</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="/user/index">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Managemen User</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="/logout">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Logout</span></a>
        </li>

    <?php endif; ?>

    <?php if (session()->get('level') == 'petugas') : ?>

        <!-- Nav Item - Dashboard -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Dashboard
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Managemen Data
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="/warga/index">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Warga</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="/logout">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Logout</span></a>
        </li>

    <?php endif; ?>

</ul>
<!-- End of Sidebar -->