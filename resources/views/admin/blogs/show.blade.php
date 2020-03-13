@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Detail Product</h3>
    </div>
    <div class="card-body">
        <div class="mt-30 tab-panel active">
        <table class="table table-striped table-hover text-left">
            <tr>
                <th>Merk Sepatu</th>
                <td>{{$data->merk_sepatu}}</td>
            </tr>
            <tr>
                <th>Jenis Sepatu</th>
                <td>{{$data->jenis_sepatu}}</td>
            </tr>
            <tr>
                <th>Nomor Sepatu</th>
                <td>{{$data->no_sepatu}}</td>
            </tr>
            <tr>
                <th>Foto Sepatu</th>
                <td><img src="{{ Storage::url($data->foto_sepatu)}}" width="100dp" ></td>
            </tr>
            <tr>
                <th>Stok Sepatu</th>
                <td>{{$data->stok_sepatu}}</td>
            </tr>
            <tr>
                <th>Status Sepatu</th>
                <td>{{$data->status}}</td>
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