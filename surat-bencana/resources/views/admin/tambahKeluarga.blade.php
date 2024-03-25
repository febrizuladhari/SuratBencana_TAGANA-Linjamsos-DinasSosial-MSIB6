@extends('layouts.layout_admin')


@section('title')
    <title>Tambah Keluarga</title>
@endsection


<!-- Content -->
@section('content')

<!-- Tambah Bantuan -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Keluarga</h6>
            </div>
        </div>
    </div>

    <div class="card-body">

        <!-- Form untuk edit bantuan -->
        <form id="createKeluargaForm" method="POST" action="{{ route('tambahKeluarga-store') }}" class="m-5">
            @csrf

            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <select type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                    <option value="">Pilih Kecamatan</option>
                    @foreach ($kecamatan as $pilihKecamatan)
                        <option value="{{ $pilihKecamatan->id }}">{{ $pilihKecamatan->nama_kecamatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_kelurahan">Kelurahan</label>
                <select id="id_kelurahan" name="id_kelurahan" class="form-control" required>
                    <option value="">Pilih Kelurahan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="no_kk">Nomor Kartu Keluarga</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="modal-footer mt-4">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-info">Tambah</button>
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
                                        // $("#id_keluarga").empty();
                                        $("#id_kelurahan").append('<option>---Pilih Kelurahan---</option>');
                                        // $("#id_keluarga").append('<option>---Pilih Keluarga---</option>');
                                        $.each(res,function(id,nama_kelurahan){
                                            $("#id_kelurahan").append('<option value="'+id+'">'+nama_kelurahan+'</option>');
                                        });
                                    }else{
                                    $("#id_kelurahan").empty();
                                    // $("#id_keluarga").empty();
                                    }
                                }
                            });
                        }else{
                            $("#id_kelurahan").empty();
                            // $("#id_keluarga").empty();
                        }
                    });

                    $('#id_kelurahan').change(function(){
                        var kelurahanID = $(this).val();
                        if(kelurahanID){
                            $.ajax({
                                type:"GET",
                                url:"{{ url('/getKeluarga') }}",
                                data: {kelurahanID: kelurahanID},
                                dataType: 'JSON',
                                success:function(res){
                                    if(res){
                                        $("#id_keluarga").empty();
                                        $("#id_keluarga").append('<option>---Pilih Keluarga---</option>');
                                        $.each(res,function(index, keluarga){
                                            $("#id_keluarga").append('<option value="'+keluarga.id+'">'+keluarga.no_kk+ ' - '+keluarga.alamat+ '</option>');
                                        });
                                    }else{
                                    $("#id_keluarga").empty();
                                    }
                                }
                            });
                        }else{
                            $("#id_keluarga").empty();
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
