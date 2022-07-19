@extends('layouts.app')

@section('content')
    
<div class="container card">
    <h2>Tambah Kategori</h2>
    @if ($errors->any())

    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach    
    </ul>    
    </div>    
    @endif

    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>
            {{\Session::get('success')}}
        </p>
    </div>

    <br/>    
    @endif

    <form action="{{url('kategori')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">

        <div class="row justify-content-center">
            <div class="form-outline mb-3 col-md-6">
                <input type="text" name="nama_kategori" class="form-control form-control-lg" placeholder="Nama Kategori">
            </div>
        </div>

    
    <div class="row justify-content-center">
        <div class="form-group col-md-1">
            <button class="btn btn-success" type="submit">
                Tambah
            </button>
        </div>
        <div class="form-group col-sm-5">
            <a href="{{URL::previous()}} " class="btn btn-primary">
            Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection