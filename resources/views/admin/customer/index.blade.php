@extends('admin.layouts.master')
@push('css')
<style>
    button.dt-button{
        background-color:#000
    }
</style>
@endpush
@section('content')
<table id="myTable" class="table table-striped compact">
    <thead>
        <tr>
            <th scope="col">Fisrt Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Username</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @forelse($customer as $data)
		<tr>
			<td>{{ $data -> first_name}}</td>
			<td>{{ $data -> last_name}}</td>
            <td>{{ $data -> address}}</td>
            <td>{{ $data -> username}}</td>
			<td>
				<a href="{{ route('customer.show', ['id' => $data->id]) }}" type="button" class="btn btn-success btn-sm">Detail</a>
				<a href="{{ route('customer.edit', ['id' => $data->id]) }}" type="button" class="btn btn-warning btn-sm">Edit</a>
				<a onclick="return confirm('apakah anda yakin?')" href="{{ route('customer.destroy', ['id' => $data->id]) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
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