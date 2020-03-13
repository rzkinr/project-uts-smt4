@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tittle">
            Edit Customer
        </div>
    </div>
    <form  method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="Merk Sepatu">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" require>
            </div>
            <div class="form-group">
                <label>Last Name</label>
               <input type="text" name="last_name" class="form-control"  placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Foto Customer</label>
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <input name="profil" type="file" class="custom-file-input" >
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" require>
            </div>
            <div class="form-group">
                <label for="E-mail">E-mail</label>
                <input type="text" class="form-control" placeholder="E-mail" name="email"  require>
            </div>
            <div class="form-group">
                <label for="Merk Sepatu">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="usern"  require>
            </div>
            <div class="form-group">
                <label for="Merk Sepatu">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="passn"  require>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
