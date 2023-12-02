@extends('admin.partials.sidebar')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders</h1>
    </div>

    <!-- Order Table -->
    <div class="card">
        <div class="card-header">
            <h2>List Orders</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Barang Pesanan</th>
                        <th>Jumlah Barang</th>
                        <th>Total Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table content goes here -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Product A</td>
                        <td>2</td>
                        <td>$200.00</td>
                        <td>
                            <button class="btn btn-sm btn-primary"><i class="fas fa-print"></i> Print Invoice</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</main>


@endsection
