@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Detail Customer</h3>
    </div>
    <div class="card-body">
        <div class="mt-30 tab-panel active">
        <table class="table table-striped table-hover text-left">
            <tr>
                <th>First Name</th>
                <td>{{$data->first_name}}</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>{{$data->last_name}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$data->address}}</td>
            </tr>
            <tr>
                <th>Foto Customer</th>
                <td><img src="{{ Storage::url($data->foto_sepatu)}}" width="100dp" ></td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{$data->username}}</td>
            </tr>
            <tr>
                <th>Created at</th>
                <td>{{$data->created_at}}</td>
            </tr>
            <tr>
                <th>Updated at</th>
                <td>{{$data->updated_at}}</td>
            </tr>
        </table>
        </div>
    </div>
</div>
@endsection