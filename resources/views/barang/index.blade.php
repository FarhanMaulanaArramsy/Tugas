@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h5">Barang / <a href="siswa">home</a></p>
    </div>
    
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->nama }}</td>
                        <td>{{ $res->berat }}</td>
                        <td>{{ $res->gudang->alamat }}</td>
                        <td class="action-table">
                            <a href="{{ url('barang/edit/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('barang/delete/'.$res->id) }}" onclick="return confirm('Are You Sure ??')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
