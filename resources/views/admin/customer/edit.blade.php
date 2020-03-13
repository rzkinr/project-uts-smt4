@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tittle">
            Edit Customer
        </div>
    </div>
    <form  method="POST" action="{{ route('customer.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="Merk Sepatu">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$data->first_name}}" require>
            </div>
            <div class="form-group">
                <label>Last Name</label>
               <input type="text" name="last_name" class="form-control" value="{{$data->last_name}}" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Foto Customer</label>
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <input name="profil" type="file" class="custom-file-input" value="{{$data->profil}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$data->address}}" require>
            </div>
            <div class="form-group">
                <label for="E-mail">E-mail</label>
                <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{$data->email}}" require>
            </div>
            <div class="form-group">
                <label for="Merk Sepatu">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" value="{{$data->username}}" require>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
