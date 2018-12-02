@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h5">Gudang / <a href="siswa">home</a></p>
    </div>
    
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kapasitas</th>
                        <th scope="col">Gudang</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gudang as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->alamat }}</td>
                        <td>{{ $res->kapasitas }}</td>
                        <td><img src="{{ asset('pic/'.$res->pic) }}" class="img-table"></td>
                        <td class="action-table">
                            <a href="{{ url('gudang/edit/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('gudang/delete/'.$res->id) }}" onclick="return confirm('Are You Sure ??')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
