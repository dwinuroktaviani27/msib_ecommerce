@extends('layouts.app')

@section('content')
<div class="container card">
    <h2>Tambahkan Data Produk </h2>

    @if ($errors->any())
    <div class="alert danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }} </li>
            @endforeach
        </ul>
    </div>
        
    @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}} </p>
    </div>
        <br/>
    @endif

    <form action="{{url('produk')}} " method="post" enctype="multipart/form-data">
    
    {{ csrf_field() }}

    <div class="row justify-content-center">
        <div class="form-outline mb-3 col-md-6">
            <input type="text" name="nama_produk" class="form-control form-control-lg" placeholder="Nama Produk">
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="form-outline mb-3 col-md-6">
                    <select name="id_kategori" id="id_kategori" class="form-control form-control-lg input-sm" >
        @foreach ($data_kategori as $kategori)
            <option value="{{$kategori->kategori_id}} ">{{$kategori->kategori_id}} </option>
        @endforeach

            </select>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-outline mb-4 col-md-6">
            <input type="text" name="harga"class="form-control form-control-lg" placeholder="Harga">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-outline mb-4 col-md-6">
            <textarea name="deskripsi"  cols="30" rows="10" class="form-control form-control-lg" placeholder="Deskripsi">
            </textarea>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-outline mb-4 col-md-6">
            <input type="file" name="gambar" class="form-control form-control-lg">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-1 ">
            <button type="submit" class="btn btn-success">
                Simpan
            </button>
        </div>
        <div class="form-group col-md-5">
            <a class="btn btn-primary" href="{{ URL::previous() }} ">Cancel</a>
        </div>
    </div>
    </form>
</div>
    
@endsection