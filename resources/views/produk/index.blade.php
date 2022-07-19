@extends('layouts.app')

@section('content')

<div class="container">
    
<h2>Halaman Produk</h2>

@if (\Session::has('success'))
<div class="alert alert-success">
    <p>{{\Session::get('success') }} </p>
</div>
    
@endif

<div class="row">
    <div class="col"> 
        <a class="btn btn-primary" href="{{route('produk.create')}} " >Tambah Data</a>
    </div>
    
    <div class="col-8">
            <a class="btn btn-primary" href="{{route('kategori.index')}} " >Kategori Produk</a>
    </div>
    <div class="col-sm">
        {{$data_produk->links()}}
    </div>
</div>
<br/>

<table class="table striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Dekripsi</th>
            <th>Gambar</th>
            <th colspan="2" >Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data_produk as $produk)
            <tr>
                <td>{{$produk['id_produk']}} </td>
                <td>{{$produk['nama_produk']}} </td>
                <td>{{$produk->Kategori->nama_kategori}} </td>
                <td>{{$produk['harga']}} </td>
                <td>{{$produk['deskripsi']}} </td>
                <td>{{$produk['gambar']}} </td>
                <td>
                    <form method="POST" action="{{ route('produk.edit') }}">
                        <a  class="btn btn-warning">Edit</a>    
                    </form>
            </td>
                <td>
                    <form action="{{route('produk.destroy',$produk['produk_id'])}} " method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>    
@endsection