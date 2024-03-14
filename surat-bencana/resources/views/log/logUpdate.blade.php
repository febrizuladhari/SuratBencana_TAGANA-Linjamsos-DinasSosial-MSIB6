@extends('layouts.layout_admin')


@section('title')
    <title>Log Update</title>
@endsection


<!-- Content -->
@section('content')


    <!-- Log Update -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Log Update</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Tabel</th>
                            <th>Data Lama</th>
                            <th>Data Baru</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($logUpdates as $logUpdate)
                        <tr>
                            <td>{{ $logUpdate->name }}</td>
                            <td>{{ $logUpdate->level }}</td>
                            <td>{{ $logUpdate->tabel }}</td>
                            <td>
                                @php
                                    $oldData = json_decode($logUpdate->old_data, true);
                                @endphp
                                @if(is_array($oldData))
                                    <ul>
                                        @foreach($oldData as $key => $value)
                                        <li>{{ $key }}: {{ json_encode($value) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ json_encode($oldData) }}
                                @endif
                            </td>
                            <td>
                                @php
                                    $newData = json_decode($logUpdate->new_data, true);
                                @endphp
                                @if(is_array($newData))
                                    <ul>
                                        @foreach($newData as $key => $value)
                                        <li>{{ $key }}: {{ json_encode($value) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ json_encode($newData) }}
                                @endif
                            </td>
                            <td>{{ date('d-m-Y H:i:s', strtotime($logUpdate->waktu)) }}</td>
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
