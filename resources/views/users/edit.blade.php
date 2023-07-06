@extends('layouts.app')

@section('content')

<h2>Edit Data Pengguna</h2>

<form action="{{ url('users/' . $row->user_id) }}" method="post">
    
    <input type="hidden" name="_method" value="PATCH">
    @csrf


    <div class="mb-3">
        <label for="">ID</label>
        <input type="text" name="user_id" id="" class="form-control" value="{{ $row->user_id}}>
    </div>

    <div class="mb-3">
        <label for="">E-MAIL</label>
        <input type="text" name="user_email" id="" class="form-control" value="{{ $row->user_email}}>
    </div>

    <div class="mb-3">
        <label for="">PASSWORD</label>
        <input type="text" name="user_password" id="" class="form-control" value="{{ $row->user_password}}>
    </div>

    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="user_nama" id="" class="form-control"value="{{ $row->user_nama}}>
    </div>

    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
        
    </div>


</form>

@endsection