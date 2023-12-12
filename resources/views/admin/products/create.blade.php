@extends('admin.partials.sidebar')

@section('content')

<div class="card-body">
    <form method="POST" action="{{ route('admin.products.store') }}">
        @csrf
        <div class="mb-3">
            <label for="product_id" class="form-label">ID Produk</label>
            <input type="text" class="form-control" id="product_id" name="product_id" required>
        </div>
        <div class="mb-3">
            <label for="product_name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Harga Produk</label>
            <input type="text" class="form-control" id="product_price" name="product_price" required>
        </div>
        <div class="mb-3">
            <label for="product_quantity" class="form-label">Jumlah Barang</label>
            <input type="text" class="form-control" id="product_quantity" name="product_quantity" required>
        </div>
        <div class="mb-3">
            <label for="product_image" class="form-label">Gambar Produk</label>
            <input type="file" class="form-control" id="product_image" name="product_image">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </form>


@endsection

