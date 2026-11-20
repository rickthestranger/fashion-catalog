<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->orderBy('name')
            ->get();

        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'size' => 'required|string|max:50',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $validated['is_featured'] = $request->boolean('is_featured');
        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('products', 'public');
        }

        unset($validated['image']);

        Product::create($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produto cadastrado com sucesso!');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $categories = Category::orderBy('name')->get();

        return view('admin.products.edit', compact('product', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'size' => 'required|string|max:50',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $validated['is_featured'] = $request->boolean('is_featured');
        if ($request->hasFile('image')) {
            if ($product->image_path && str_starts_with($product->image_path, 'products/')) {
                Storage::disk('public')->delete($product->image_path);
            }

            $validated['image_path'] = $request->file('image')->store('products', 'public');
        }

        unset($validated['image']);
        $product->update($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image_path && str_starts_with($product->image_path, 'products/')) {
            Storage::disk('public')->delete($product->image_path);
        }
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}
