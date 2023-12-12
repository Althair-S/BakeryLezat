<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data produk ke database
        // Contoh:
        // Product::create([
        //     'product_name' => $request->input('product_name'),
        //     'product_price' => $request->input('product_price'),
        //     // Tambahan atribut lainnya
        // ]);

        return redirect()->route('admin.products')->with('success', 'Product added successfully.');
    }

    // Metode lainnya sesuai kebutuhan
}
