@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Product Page</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <!-- Tambahkan item-menu atau link-menu sesuai kebutuhan Anda -->
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <!-- Tambahkan lebih banyak item-menu jika diperlukan -->
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Tombol Logout -->
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Konten Utama -->
        <main class="col-md-12 mt-5">
            <h1 class="mb-4">Product List</h1>

            <!-- Kolom Pencarian -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for products..."
                    aria-describedby="search-button">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button>
                </div>
            </div>

            <!-- Daftar Produk -->
            <div class="row">
                <!-- Product Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">$100.00</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak kolom produk jika diperlukan -->
            </div>
        </main>
    </div>
</div>
@endsection
