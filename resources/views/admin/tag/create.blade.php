@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data</div>
                <div class="card-body">
                <form action="{{ route('tag.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                            <label for="">Nama tag</label>
                            <input class="form-control" type="text" name="nama_tag">
                        </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                    Simpan Data
                    </button>
                </div>
                <div class="form-group">
                    <a href="{{ url('tag') }}" class="btn btn-outline-info">Kembali</a>
                </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
