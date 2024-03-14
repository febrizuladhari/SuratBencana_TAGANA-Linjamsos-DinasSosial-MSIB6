@extends('layouts.layout_admin')


@section('title')
    <title>Log Login Logout</title>
@endsection


<!-- Content -->
@section('content')


    <!-- Log Login Logout -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Log Login Logout</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aktivitas</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logLoginLogouts as $logLoginLogout)
                        <tr>
                            <td>{{ $logLoginLogout->name }}</td>
                            <td>{{ $logLoginLogout->username }}</td>
                            <td>{{ $logLoginLogout->level }}</td>
                            @if($logLoginLogout->aktivitas == "Login")
                                <td>
                                    <button style="width: 80px;" type="button" class="btn btn-primary">{{ $logLoginLogout->aktivitas }}</button>
                                </td>
                            @else
                                <td>
                                    <button style="width: 80px;" type="button" class="btn btn-danger">{{ $logLoginLogout->aktivitas }}</button>
                                </td>
                            @endif
                            <td>{{ $logLoginLogout->waktu }}</td>
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
