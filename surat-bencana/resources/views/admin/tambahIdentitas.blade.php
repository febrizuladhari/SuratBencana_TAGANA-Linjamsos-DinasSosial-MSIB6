@extends('layouts.layout_admin')


@section('title')
    <title>Tambah Identitas</title>
@endsection


<!-- Content -->
@section('content')

<!-- Tambah Identitas -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Identitas</h6>
            </div>
        </div>
    </div>

    <div class="card-body">
        <!-- Form untuk tambah Identitas -->
        <form method="POST" action="{{ route('identitas-store') }}" class="m-5">
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
                <label for="no_kk">Keluarga</label>
                <select id="no_kk" name="no_kk" class="form-control" required>
                    <option value="">Pilih Keluarga</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jns_kelamin">Jenis Kelamin</label>
                <select id="jns_kelamin" name="jns_kelamin" class="form-control" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="">Pilih Status</option>
                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                    <option value="Anggota Lain">Anggota Lain</option>
                </select>
            </div>
            <div class="form-group">
                <label id="kehamilan_label" style="display: none;">Status Kehamilan</label>
                <select id="kehamilan" name="kehamilan" class="form-control" style="display: none;">
                    <!-- Opsi akan diisi secara dinamis menggunakan JavaScript -->
                </select>
            </div>
            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
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
                                        $("#no_kk").empty();
                                        $("#no_kk").append('<option>---Pilih Keluarga---</option>');
                                        $.each(res,function(index, keluarga){
                                            $("#no_kk").append('<option value="'+keluarga.id+'">'+keluarga.no_kk+ ' - '+keluarga.alamat+ '</option>');
                                        });
                                    }else{
                                    $("#no_kk").empty();
                                    }
                                }
                            });
                        }else{
                            $("#no_kk").empty();
                        }
                    });

                    $('#status').change(function(){
                        var selectedStatus = $(this).val();

                        if (selectedStatus === 'Istri') {
                            $('#kehamilan_label').show();
                            $('#kehamilan').show();

                            $.ajax({
                                url: "{{ url('/getKehamilan/') }}/" + selectedStatus,
                                type: 'GET',
                                success: function(response){
                                    var options = '';

                                    $.each(response, function(key, value){
                                        options += '<option value="' + key + '">' + value + '</option>';
                                    });

                                    $('#kehamilan').html(options);
                                },
                                error: function(xhr, status, error){
                                    console.error(error);
                                }
                            });
                        } else {
                            $('#kehamilan_label').hide();
                            $('#kehamilan').hide();
                        }
                    });

                    // $('#id_keluarga').change(function(){
                    //     var keluargaID = $(this).val();
                    //     if(keluargaID){
                    //         $.ajax({
                    //             type:"GET",
                    //             url:"{{ url('/getBencana') }}",
                    //             data: {keluargaID: keluargaID},
                    //             dataType: 'JSON',
                    //             success:function(res){
                    //                 if(res){
                    //                     $("#id_bencana").empty();
                    //                     $("#id_bencana").append('<option>---Pilih Bencana---</option>');
                    //                     $.each(res,function(id,jns_bencana){
                    //                         $("#id_bencana").append('<option value="'+id+'">'+jns_bencana+'</option>');
                    //                     });
                    //                 }else{
                    //                 $("#id_bencana").empty();
                    //                 }
                    //             }
                    //         });
                    //     }else{
                    //         $("#id_bencana").empty();
                    //     }
                    // });

            });
        </script>


    </div>
</div>

@endsection


<!-- Script -->
@section('script')

@endsection
