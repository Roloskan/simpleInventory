<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class PageController extends Controller
{
    function home()
    {
        $totalProducts = Product::select('id')->where ('status', 1)->count('id');
        $totalPrice = Product::select('price')->where ('status', 1)->sum('price');
        $totalStock = Product::select('quantity')->where ('status', 1)->sum('quantity');
        $totalUsers = User::select('id')->count('id');
        return view('home', compact('totalProducts', 'totalPrice', 'totalStock', 'totalUsers'));
    }

    function login()
    {
        return view('login');
    }

    function product()
    {
        $products_data = Product::paginate(6);
        return view('product', compact('products_data'));
    }

    function productslug($slug)
    {
        $products_data = Product::where('slug', $slug)->first();
        return view('productd', ['products_data' => $products_data]);
    }
}
