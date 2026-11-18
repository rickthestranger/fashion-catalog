<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

//use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    $categoryId = request('category');    
    $products = Product::query();
    $products->when($categoryId, function ($query, $categoryId) {
    $query->where('category_id', $categoryId);
    });

    $search = request('search');

    $products->when($search, function ($query, $search) {
    $query->where('name', 'ILIKE', "%{$search}%");
    });

    $products = $products->get();
    $categories = Category::orderBy('name')->get();

    return view('products', compact('products' , 'categories' , 'categoryId', 'search'));
    }
    public function home()
    {

    $products = Product::where('is_featured', true)->get();
    return view('home', compact('products'));

    }
    public function show($id)
    {
    $product = Product::findOrFail($id);

    return view('product', compact('product'));
    }
}
