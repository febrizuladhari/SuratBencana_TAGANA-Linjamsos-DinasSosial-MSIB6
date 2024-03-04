<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text mx-3">Aplikasi Surat Bencana</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Surat
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('berita-acara', 'data-keluarga') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Surat</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat:</h6>
                <a class="collapse-item {{ Request::is('berita-acara') ? 'active' : '' }}" href="{{ route('berita-acara') }}">Berita Acara Serah Terima</a>
                <a class="collapse-item {{ Request::is('data-keluarga') ? 'active' : '' }}" href="{{ route('data-keluarga') }}">Data Keluarga</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ Request::is('bencana', 'kecamatan', 'kelurahan', 'keluarga', 'identitas') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-edit"></i>
            <span>Edit Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Edit Data:</h6>
                <a class="collapse-item {{ Request::is('bencana') ? 'active' : '' }}" href="{{ route('bencana') }}">Bencana</a>
                <a class="collapse-item {{ Request::is('kecamatan') ? 'active' : '' }}" href="{{ route('kecamatan') }}">Kecamatan</a>
                <a class="collapse-item {{ Request::is('kelurahan') ? 'active' : '' }}" href="{{ route('kelurahan') }}">Kelurahan</a>
                <a class="collapse-item {{ Request::is('keluarga') ? 'active' : '' }}" href="{{ route('keluarga') }}">Keluarga</a>
                <a class="collapse-item {{ Request::is('identitas') ? 'active' : '' }}" href="{{ route('identitas') }}">Identitas</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Laporan
    </div>

     <!-- Nav Item - Data Laporan -->
     <li class="nav-item {{ Request::is('laporan-bencana', 'laporan-keluarga', 'laporan-jiwa') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Laporan</span></a>
            <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kategori:</h6>
                <a class="collapse-item {{ Request::is('laporan-bencana') ? 'active' : '' }}" href="{{ route('laporan-bencana') }}">Bencana</a>
                <a class="collapse-item {{ Request::is('laporan-keluarga') ? 'active' : '' }}" href="{{ route('laporan-keluarga') }}">Keluarga</a>
                <a class="collapse-item {{ Request::is('laporan-jiwa') ? 'active' : '' }}" href="{{ route('laporan-jiwa') }}">Jiwa</a>
            </div>
        </div>
    </li>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-print"></i>
            <span>Cetak Laporan</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Log Activity
    </div>

    <!-- Nav Item -->
    <li class="nav-item {{ Request::is('logtambahsurat') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('logtambahsurat') }}">
            <i class="fas fa-fw fa-history"></i>
            <span>Log Tambah Surat</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item {{ Request::is('logtambahbencana') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('logtambahbencana') }}">
            <i class="fas fa-fw fa-history"></i>
            <span>Log Tambah Bencana</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item {{ Request::is('loghapusdata') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('loghapusdata') }}">
            <i class="fas fa-fw fa-history"></i>
            <span>Log Hapus Data</span></a>
    </li>






    <hr>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
