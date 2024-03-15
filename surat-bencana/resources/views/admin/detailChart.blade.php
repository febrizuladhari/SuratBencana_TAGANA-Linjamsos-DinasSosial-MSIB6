@extends('layouts.layout_admin')


@section('title')
    <title>Detail Grafik</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Grafik</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Bantuan Diberikan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jlhBantuan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Keluarga Terdampak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jlhKeluarga }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Korban Terdampak
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $jlhIdentitas }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-injured fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Bencana</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jlhBencana }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-house-damage fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Content Row -->
    <div class="row">

        <!-- Bencana per Kecamatan Chart -->
        <div class="col-6">
            <div class="card h-100 shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Bencana per Kecamatan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <canvas id="bencanaPerKecamatanChart"></canvas>
                    <script>
                        var bencanaPerKecamatan = {!! json_encode($bencanaPerKecamatan->toArray()) !!};

                        var ctx = document.getElementById('bencanaPerKecamatanChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: Object.keys(bencanaPerKecamatan),
                                datasets: [{
                                    data: Object.values(bencanaPerKecamatan),
                                    backgroundColor: [
                                        '#FF6384',
                                        '#36A2EB',
                                        '#FFCE56',
                                    ]
                                }]
                            },
                            options: {
                                animation: {
                                    animateRotate: true,
                                    animateScale: true,
                                    duration: 5000
                                }
                            }
                        });
                    </script>

                </div>
            </div>
        </div>


        {{-- Jenis Bantuan --}}
        <div class="col-6">
            <div class="card h-100 shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jenis Bantuan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <canvas id="chartJenisBantuan"></canvas>
                    <script>
                        var jenisBantuan = {!! json_encode($jenisBantuan->toArray()) !!};

                        var ctx = document.getElementById('chartJenisBantuan').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'polarArea',
                            data: {
                                labels: Object.keys(jenisBantuan),
                                datasets: [{
                                    data: Object.values(jenisBantuan),
                                    backgroundColor: [
                                        // Daftar warna untuk setiap jenis bantuan
                                        '#FF6384',
                                        '#36A2EB',
                                        '#FFCE56',
                                        // ... tambahkan warna lainnya jika diperlukan
                                    ]
                                }]
                            },
                            options: {
                                animation: {
                                    animateRotate: true,
                                    animateScale: true,
                                    duration: 3000
                                }
                            }
                        });
                    </script>

                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->
    <div class="row my-4">

        <!-- Bencana per Tahun -->
        <div class="col-6">
            <div class="card h-100 shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Bencana per Tahun</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <canvas id="chartBencanaPerTahun"></canvas>

                    <script>
                        var years = @json($bencanaPerTahun->pluck('year'));
                        var totals = @json($bencanaPerTahun->pluck('total'));

                        var ctx = document.getElementById('chartBencanaPerTahun').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: years,
                                datasets: [{
                                    label: 'Jumlah Bencana',
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1,
                                    data: totals
                                }]
                            },
                            options: {
                                animation: {
                                    animateRotate: true,
                                    animateScale: true,
                                    duration: 3000
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>

                </div>
            </div>
        </div>

        <!-- Korban Jenis Kelamin Chart -->
        <div class="col-6">
            <div class="card h-100 shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Korban Berdasarkan Jenis Kelamin</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <canvas id="chartKelaminDashboard"></canvas>

                    <script>
                        // Data jenis kelamin
                        const data = {
                            labels: ['Laki-laki', 'Perempuan'],
                            datasets: [{
                                label: 'Jenis Kelamin',
                                data: [{{ $jumlahLakiLaki }}, {{ $jumlahPerempuan }}],
                                backgroundColor: [
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 99, 132, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 99, 132, 1)'
                                ],
                                borderWidth: 1
                            }]
                        };

                        // Konfigurasi chart
                        const config = {
                            type: 'bar',
                            data: data,
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                },
                                animation: {
                                    animateRotate: true,
                                    animateScale: true,
                                    duration: 3000
                                }
                            },
                        };

                        // Inisialisasi chart
                        var myChart = new Chart(
                            document.getElementById('chartKelaminDashboard'),
                            config
                        );
                    </script>
                </div>
            </div>
        </div>


    </div>


    {{-- Grafik Berdasar Inputan Tahun --}}
    <div class="row">
        <div class="col mb-4">
            <div class="card h-100 shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Berdasar Inputan Tahun</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <div class="form-group">
                        <label for="pilihTahun">Tahun</label>
                        <select id="pilihTahun" name="pilihTahun" class="form-control" required>
                            @foreach ($tahunBencana as $tahun)
                                <option value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-6 mt-4">

                            {{-- Keseluruhan Bencana Dalam Per Bulan --}}
                            <div class="card">
                                <div class="card-header">
                                    <p class="m-0 font-weight-bold text-primary">Keseluruhan Bencana per Bulan</p>
                                </div>
                                <div class="card-body">
                                    <canvas id="bencanaTahun"></canvas>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                        var ctx = document.getElementById('bencanaTahun').getContext('2d');
                                        var chart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: [],
                                                datasets: [{
                                                    label: 'Jumlah Bencana',
                                                    data: [],
                                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                    borderColor: 'rgba(255, 99, 132, 1)',
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });

                                        // Fungsi untuk memperbarui chart
                                        function updateChart(tahun) {
                                            fetch(`/detailChart/data?tahun=${tahun}`)
                                                .then(response => response.json())
                                                .then(data => {
                                                    chart.data.labels = data.map(d => `Bulan ${d.bulan}`);
                                                    chart.data.datasets.forEach((dataset) => {
                                                        dataset.data = data.map(d => d.jumlah);
                                                    });
                                                    chart.update();
                                                });
                                        }

                                        // Event listener untuk dropdown tahun
                                        document.getElementById('pilihTahun').addEventListener('change', function() {
                                            updateChart(this.value);
                                        });

                                        // Panggil sekali pada inisialisasi
                                        updateChart(document.getElementById('pilihTahun').value);
                                        });
                                    </script>
                                </div>
                            </div>

                        </div>

                        <div class="col-6 mt-4">

                            {{-- Keseluruhan Bencana Dalam Per Bulan --}}
                            <div class="card">
                                <div class="card-header">
                                    <p class="m-0 font-weight-bold text-primary">Keseluruhan Bencana per Bulan</p>
                                </div>
                                <div class="card-body">
                                    <canvas id="bencanaTahun"></canvas>
                                    <script>
                                    </script>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection


<!-- Script -->
@section('script')

@endsection
