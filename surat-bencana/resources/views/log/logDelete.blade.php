@extends('layouts.layout_admin')


@section('title')
    <title>Log Delete</title>
@endsection


<!-- Content -->
@section('content')


    <!-- Log Delete -->
    {{-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Log Delete</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Tabel</th>
                            <th>Data</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logDeletes as $logDelete)
                        <tr>
                            <td>{{ $logDelete->name }}</td>
                            <td>{{ $logDelete->level }}</td>
                            <td>{{ $logDelete->tabel }}</td>
                            <td>
                                @php
                                    $data = json_decode($logDelete->data, true);
                                @endphp
                                @if(is_array($data))
                                    <ul>
                                        @foreach($data as $key => $value)
                                        <li>{{ $key }}: {{ json_encode($value) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ json_encode($data) }}
                                @endif
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    <!-- Log Delete -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Log Delete</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Tabel</th>
                            <th>Data</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logDeletes as $logDelete)
                        <tr>
                            <td>{{ $logDelete->name }}</td>
                            <td>{{ $logDelete->level }}</td>
                            <td>{{ $logDelete->tabel }}</td>
                            <td>
                                @php
                                    $data = json_decode($logDelete->data, true);
                                @endphp
                                @if(is_array($data))
                                    <ul>
                                        @foreach($data as $key => $value)
                                        <li>{{ $key }}: {{ json_encode($value) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ json_encode($data) }}
                                @endif
                            </td>
                            <td>{{ date('d-m-Y H:i:s', strtotime($logDelete->waktu)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


<!-- Script -->
@section('script')

@endsection
