@extends('layouts.app')

@section('content')

<h2>Data Pengguna</h2>

<a href="{{ url('users/create') }}">Tambah User</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>E-MAIL</th>
        <th>PASSWORD</th>
        <th>NAMA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ( $rows as $row )
    <tr>
        <td>{{ $row->user_id}} </td>
        <td>{{ $row->user_email}} </td>
        <td>{{ $row->user_password}} </td>
        <td>{{ $row->user_nama}} </td>
        
        <td><a href="{{ url('users/edit/' . $row->user_id) }}"class="btn btn-warning" >EDIT</a> </td>
        <td>
            <form action="{{ url('users/'. $row->user_id)}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" >
                
            </form>
        </td>
    </tr>
    @endforeach
    
</table>

@endsection