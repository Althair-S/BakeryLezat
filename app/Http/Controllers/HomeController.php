<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('user.home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function adminPage($page): View
    {
        $allowedPages = ['adminHome', 'orders', 'customers', 'products'];
        if (!in_array($page,$allowedPages)){
            abort(404);
        }
        return view("admin.$page");
    }

    public function showProducts(): View
    {

        $products = Product::all();

        return view('admin.products', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }


    public function store(Request $request)
    {
        // Logika untuk menyimpan produk ke database
        // ...

        return redirect()->route('admin.products')->with('success', 'Product added successfully.');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome(): View
    {
        return view('manager.managerHome');
    }
}
