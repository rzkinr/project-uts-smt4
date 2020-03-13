@extends('admin.layouts.master')

@section('content')
<table id="myTable" class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Merk Sepatu</th>
            <th scope="col">Jenis Sepatu</th>
            <th scope="col">Nomor Sepatu</th>
            <th scope="col">Stok Sepatu</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @forelse($products as $data)
		<tr>
			<td>{{ $data -> merk_sepatu}}</td>
			<td>{{ $data -> jenis_sepatu}}</td>
            <td>{{ $data -> no_sepatu}}</td>
            <td>{{ $data -> stok_sepatu}}</td>
            <td>{{ $data -> status}}</td>
			<td>
				<a href="{{ route('products.show', ['id' => $data->id]) }}" type="button" class="btn btn-success btn-sm">Detail</a>
				<a href="{{ route('products.edit', ['id' => $data->id]) }}" type="button" class="btn btn-warning btn-sm">Edit</a>
				<a onclick="return confirm('apakah anda yakin?')" href="{{ route('products.destroy', ['id' => $data->id]) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
			</td>
		</tr>
		@empty
		<tr>
			<td colspan="4">Data yang belum tersedia</td>
		</tr>
		@endforelse
    </tbody>
</table>
@endsection