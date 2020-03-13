@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tittle">
            Add Sepatu
        </div>
    </div>
    <form  method="POST" action="{{ route('products.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="Merk Sepatu">Merk Sepatu</label>
                <input type="text" name="merk_sepatu" class="form-control" placeholder="Merk Sepatu" value="{{$data->merk_sepatu}}" require>
            </div>
            <div class="form-group">
                <label>Jenis Sepatu</label>
               <input type="text" name="jenis_sepatu" class="form-control" value="{{$data->jenis_sepatu}}" placeholder="Pilih Jenis Sepatu">
            </div>
            <div class="form-group">
                <label for="No Sepatu">Nomor Sepatu</label>
                <input type="number" name="no_sepatu" class="form-control" placeholder="Nomor Sepatu" value="{{$data->no_sepatu}}" require>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Foto Sepatu</label>
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <input name="foto_sepatu" type="file" class="custom-file-input" value="{{$data->foto_sepatu}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="No Sepatu">Stok Sepatu</label>
                <input type="number" name="stok_sepatu" class="form-control" placeholder="Stok Sepatu" value="{{$data->stok_sepatu}}" require>
            </div>
            <div class="form-group">
                <label for="Merk Sepatu">Status</label>
                <input type="text" class="form-control" placeholder="Status" name="status" value="{{$data->status}}" require>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
