@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Manager Page</a>
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
            <h1 class="mb-4">Isi Konten</h1>
    </div>
</div>
@endsection
