<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #0c4e23;">

    <!-- Sidebar - Brand -->
    <a href="{{ route('home') }}" class="align-self-center m-3">
        <img class="img-fluid" src="{{ asset('img/logo/logo-no-background.png') }}" alt="Logo" style="width: 150px; height: auto;">
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
    <li class="nav-item {{ Request::is('berita-acara', 'data-keluarga', 'bansos/filter') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Surat</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat:</h6>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('berita-acara') ? 'active' : '' }}" href="{{ route('berita-acara') }}">Berita Acara Serah Terima</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('data-keluarga') ? 'active' : '' }}" href="{{ route('data-keluarga') }}">Data Keluarga Korban</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Data -->
    <li class="nav-item {{ Request::is('identitas', 'keluarga', 'bencana', 'kecamatan', 'kelurahan', 'bantuan', 'detailBantuan') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-edit"></i>
            <span>Manajemen Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen Data:</h6>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('identitas') ? 'active' : '' }}" href="{{ route('identitas') }}">Identitas</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('keluarga') ? 'active' : '' }}" href="{{ route('keluarga') }}">Keluarga</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('bencana') ? 'active' : '' }}" href="{{ route('bencana') }}">Bencana</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('bantuan') ? 'active' : '' }}" href="{{ route('bantuan') }}">Bantuan</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('detailBantuan') ? 'active' : '' }}" href="{{ route('detailBantuan') }}">Detail Bantuan</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('kelurahan') ? 'active' : '' }}" href="{{ route('kelurahan') }}">Kelurahan</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('kecamatan') ? 'active' : '' }}" href="{{ route('kecamatan') }}">Kecamatan</a>
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
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('laporan-bencana') ? 'active' : '' }}" href="{{ route('laporan-bencana') }}">Bencana</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('laporan-keluarga') ? 'active' : '' }}" href="{{ route('laporan-keluarga') }}">Keluarga</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('laporan-jiwa') ? 'active' : '' }}" href="{{ route('laporan-jiwa') }}">Jiwa</a>
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
    <li class="nav-item {{ Request::is('logLoginLogout') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('logLoginLogout') }}">
            <i class="fas fa-fw fa-history"></i>
            <span>Log Authentication</span></a>
    </li>


    <!-- Nav Item - Log -->
    <li class="nav-item {{ Request::is('logidentitas', 'logkeluarga', 'logbencana', 'logbantuan', 'logdetailbantuan', 'logkelurahan', 'logkecamatan') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLog"
            aria-expanded="true" aria-controls="collapseLog">
            <i class="fas fa-fw fa-history"></i>
            <span>Log Data</span>
        </a>
        <div id="collapseLog" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Log Data:</h6>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('logcreate') ? 'active' : '' }}" href="{{ route('logcreate') }}">Log Create</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('logupdate') ? 'active' : '' }}" href="{{ route('logupdate') }}">Log Update</a>
                <a style="color: #0c4e23;" class="collapse-item {{ Request::is('logdelete') ? 'active' : '' }}" href="{{ route('logdelete') }}">Log Delete</a>
            </div>
        </div>
    </li>







    <hr>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
