@extends('layouts.layout_admin')


@section('title')
    <title>Filter Berita Acara</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Filtering Berita Acara -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Filter Berita Acara</h6>
                </div>
            </div>
        </div>

        <div class="card-body">

            <!-- Form untuk edit bantuan -->
            <form method="GET" action="{{ route('beritaAcara-filter') }}" class="m-5">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($kecamatan as $pilihKecamatan)
                                    <option value="{{ $pilihKecamatan->id }}">{{ $pilihKecamatan->nama_kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="id_kelurahan">Kelurahan</label>
                            <select id="id_kelurahan" name="id_kelurahan" class="form-control" required>
                                <option value="">Pilih Kelurahan</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal_awal">Tanggal Awal</label>
                            <input type="date" id="tanggal_awal" name="tanggal_awal" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal_akhir">Tanggal Akhir</label>
                            <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer mt-4">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-info">Filter</button>
                </div>
            </form>


            {{-- Script Dynamic Dropdown --}}
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function(){
                        $('#kecamatan').change(function(){
                            var kecamatanID = $(this).val();
                            if(kecamatanID){
                                $.ajax({
                                    type:"GET",
                                    url:"{{ url('/getKelurahan') }}",
                                    data: {kecamatanID: kecamatanID},
                                    dataType: 'JSON',
                                    success:function(res){
                                        if(res){
                                            $("#id_kelurahan").empty();
                                            $("#id_kelurahan").append('<option>---Pilih Kelurahan---</option>');
                                            $.each(res,function(id,nama_kelurahan){
                                                $("#id_kelurahan").append('<option value="'+id+'">'+nama_kelurahan+'</option>');
                                            });
                                        }else{
                                        $("#id_kelurahan").empty();
                                        }
                                    }
                                });
                            }else{
                                $("#id_kelurahan").empty();
                            }
                        });


                });
            </script>

        </div>
    </div>


@endsection


<!-- Script -->
@section('script')

@endsection
