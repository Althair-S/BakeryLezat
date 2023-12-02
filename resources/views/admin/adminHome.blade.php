@extends('admin.partials.sidebar')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Dashboard</h1>
    </div>

    <!-- Product Table -->
    <div class="card">
        <div class="card-header">
            <h2>Product Management</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Stock Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table content goes here -->
                    <tr>
                        <td>1</td>
                        <td>Product A</td>
                        <td>$100.00</td>
                        <td>50</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection
