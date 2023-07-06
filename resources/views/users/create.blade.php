@extends('layouts.app')

@section('content')

<h2>Tambah Data Pengguna</h2>

<form action="{{ url('users') }}" method="post">
    @csrf


    <div class="mb-3">
        <label for="">ID</label>
        <input type="text" name="user_id" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">E-MAIL</label>
        <input type="text" name="user_email" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">PASSWORD</label>
        <input type="text" name="user_password" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="user_nama" id="" class="form-control">
    </div>

    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
        
    </div>


</form>

@endsection