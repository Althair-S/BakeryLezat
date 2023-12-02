@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <!-- Tambahkan item-menu atau link-menu sesuai kebutuhan Anda -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Reports
                        </a>
                    </li>
                    <!-- Tambahkan lebih banyak item-menu jika diperlukan -->
                </ul>
            </div>
        </nav>

        <!-- Konten Utama -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Manager Dashboard</h1>
            </div>

            <!-- Tabel Produk -->
            <div class="card">
                <div class="card-header">
                    <h2>Product List</h2>
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
                            <!-- Isi tabel dengan data produk -->
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
                            <!-- Tambahkan lebih banyak baris jika diperlukan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
