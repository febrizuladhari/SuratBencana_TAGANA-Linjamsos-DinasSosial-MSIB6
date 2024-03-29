<nav class="navbar navbar-expand navbar-ligh topbar mb-4 static-top shadow" style="background-color: #dec100;">

    <div class="align-self-center">
        <h4 class="font-weight-bold text-white">Sistem Informasi Manajemen Bencana</h4>
    </div>

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    {{-- <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> --}}

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">




        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        {{-- <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li> --}}

        {{-- Tanggal Hari Ini --}}
        {{-- <script>
            var today = new Date();

            // Mendapatkan tanggal, bulan, dan tahun dari objek Date
            var date = today.getDate();
            var month = today.getMonth() + 1; // Perlu ditambah 1 karena index bulan dimulai dari 0
            var year = today.getFullYear();

            // Mengonversi tanggal, bulan, dan tahun menjadi string
            // Pastikan untuk menambahkan leading zero jika angka bulan atau tanggal hanya satu digit
            var dateString = (date < 10 ? '0' : '') + date + '/' + (month < 10 ? '0' : '') + month + '/' + year;

            document.write(dateString);
        </script> --}}


        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white"><strong>{{ Auth::user()->name }}</strong></span>
                <img class="img-profile rounded-circle mx-2"
                    src="{{ asset('img/profile.jpg') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profile') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                </a>
                <a class="dropdown-item" href="{{ route('register') }}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Tambah User
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ url('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
