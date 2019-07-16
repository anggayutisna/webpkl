@extends('layouts.backend')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Utama tag</div>
                <br>
                <center> <a href="{{ route('tag.create') }}"
                class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                      <tr>
                          <th>No</th>
                          <th>Nama tag</th>
                          <th>Slug</th>
                          <th colspan="3">Aksi</th>
                      </tr>
                      @php $no =1; @endphp
                      @foreach ($tag as $data)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_tag }}</td>
                            <td>{{ $data->slug}}</td>
                            <td><a href="{{ route('tag.edit',$data->id) }}" class="btn btn-sm btn-warning">Edit Data</a></td>
                            <td><form action="{{ route('tag.destroy',$data->id) }}" method="post">
                                    @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit">Hapus Data
                                </button>
                            </form>
                            </td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
