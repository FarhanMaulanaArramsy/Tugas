@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h5">Gudang / <a href="#">ADD</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="img-wrapper">
                        <img src="{{ asset('pic/'.$gudang->pic) }}">
                    </div>
                    <form method="POST" action="{{ url('gudang/update/'.$gudang->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea style="height: 100px;" class="form-control" id="alamat" placeholder="Alamat" required name="alamat">{{ $gudang->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Kapasitas</label>
                            <input type="number" name="kapasitas" placeholder="Kapasitas" class="form-control" value="{{ $gudang->kapasitas }}">
                        </div>
                        <div class="form-group">
                            <label>Gudang</label>
                            <input type="file" name="pic" class="form-control" value="{{ $gudang->pic }}">
                        </div>
                        <div class="action-form">
                            <button type="submit" class="btn btn-primary borderrad">Update</button>
                        </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection