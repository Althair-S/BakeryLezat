@extends('admin.partials.sidebar')

@section('content')

<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4 d-flex justify-content-between">
                Product Management
                <button class="btn btn-sm btn-primary">Tambah Produk</button>
            </h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">No</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Id Product</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nama Produk</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Harga Produk</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Jumlah Barang</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Gambar Produk</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Action</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table content goes here -->
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">PROD001</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Product A</p>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0 fs-4">$100.00</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">50</h6>
                            </td>
                            <td class="border-bottom-0">
                                <!-- Gambar Produk -->
                                <img src="path_to_image" alt="Product Image" style="max-width: 50px;">
                            </td>
                            <td class="border-bottom-0">
                                <!-- Tombol Action -->
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
