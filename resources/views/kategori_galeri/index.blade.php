@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liat Kategori Galeri</div>

                <div class="card-body">
                <a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>

                <table Border="1">
    <tr>
    <td>ID</td>
    <td>Nama</td>
    <td>Users</td>
    <td>Create</td>
    <td>Aksi</td>
  </tr>
  @foreach($listKategoriGaleri as $item)
  <tr>
    <td>{!! $item->id !!}</td>
    <td>{!! $item->nama !!}</td>
    <td>{!! $item->users_id !!}</td>
    <td>{!! $item->created_at ->format('d/M/Y H:i:s')!!}</td>
    <td>
    <a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">Lihat</a>
    </td>
  </tr>
  @endforeach
    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection