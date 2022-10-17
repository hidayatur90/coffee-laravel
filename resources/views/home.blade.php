@extends('layout')
@section('content')
<title>Home</title>
<div class="container mt-4">
    <div class="header text-center">
        <h3>Stock Coffee</h3>
        <p>20 Oktober 2022</p>
    </div>
    <div class="add-new">
        <a class="btn btn-primary mb-2" href="addCoffee">Tambah</a>
    </div>
    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Update At</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coffees as $coffee)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $coffee->name }}</td>
                <td>{{ $coffee->updated_at }}</td>
                <td>{{ $coffee->unit_stock }}</td>
                <td>{{ $coffee->unit_price }}</td>
                <td>
                    <a class="btn btn-warning" href="editCoffee">Edit</a>
                    <a class="btn btn-danger" href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection