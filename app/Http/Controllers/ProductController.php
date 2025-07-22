<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // Apply search
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Apply category filter
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Sorting logic
        $sortField = $request->get('sort_by', 'created_at');
        $sortOrder = $request->get('order', 'desc');

        if (in_array($sortField, ['name', 'created_at']) && in_array($sortOrder, ['asc', 'desc'])) {
            $query->orderBy($sortField, $sortOrder);
        }

        $products = $query->paginate(10)->withQueryString();
        $categories = \App\Models\Category::all(); // Load categories for filter dropdown

        return view('productslist', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('addproducts', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0|max:999',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'is_hidden' => 'sometimes|boolean',
        ]);

        $imageUrl = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $publicUrl = $this->uploadToSupabase($file, $filename);

            if ($publicUrl) {
                $imageUrl = $publicUrl;
            }
        }

        Product::create([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price'       => $request->price,
            'quantity'    => $request->quantity,
            'image_path'  => $imageUrl,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('updateproducts', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0|max:999',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // <-- nullable here
            'is_hidden' => 'sometimes|boolean',
        ]);

        $imageUrl = $product->image_path;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $publicUrl = $this->uploadToSupabase($file, $filename);

            if ($publicUrl) {
                $imageUrl = $publicUrl;
            }
        }

        $product->update([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price'       => $request->price,
            'quantity'    => $request->quantity,
            'image_path'  => $imageUrl,
        ]);


        return redirect()->route('products.index')->with('success', 'Product updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    public function uploadToSupabase($image)
    {
        $supabaseUrl = rtrim(env('SUPABASE_URL'), '/'); // e.g. https://your-project.supabase.co
        $bucket = 'uploads';
        $fileName = 'products/' . uniqid() . '_' . $image->getClientOriginalName();

        $uploadUrl = "{$supabaseUrl}/storage/v1/object/{$bucket}/{$fileName}";

        $response = Http::withToken(env('SUPABASE_SERVICE_KEY'))
            ->attach('file', fopen($image->getPathname(), 'r'), $fileName)
            ->post($uploadUrl);

        if (!$response->successful()) {
            throw new \Exception('Upload to Supabase failed: ' . $response->body());
        }

        return "{$supabaseUrl}/storage/v1/object/public/{$bucket}/{$fileName}";
    }
}
