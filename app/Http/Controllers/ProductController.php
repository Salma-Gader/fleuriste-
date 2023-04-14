<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $products = Product::with('category')->get();
        return view('dashboard.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request);
        $photo = $request->file('image');
        $file_name = rand() . '.' . $photo->getClientOriginalName();
        $photo->move(public_path('products'), $file_name);
        $data = $request->only(['name','price','description','category_id','quantity']);
        $data['image'] = $file_name;
        $product = Product::create($data);

        return redirect()->route('dashboard')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('cart', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('dashboard.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(StoreProductRequest $request, Product $product)
    // {
    //     $data = $request->only(['name','price','description','category_id']);
        
    //     if ($request->hasFile('image')) {
    //         $photo = $request->file('image');
    //         $file_name = rand() . '.' . $photo->getClientOriginalName();
    //         $photo->move(public_path('products'), $file_name);
    //         $data['image'] = $file_name;
    //     }
        
    //     $product->update($data);

    //     return redirect()->route('dashboard')->with('success','Product has been updated successfully');
    // }
    public function update(StoreProductRequest $request, Product $product)
{
    $data = $request->only(['name','price','description','category_id']);
    
    if ($request->hasFile('image')) {
        $photo = $request->file('image');
        $file_name = rand() . '.' . $photo->getClientOriginalName();
        $photo->move(public_path('products'), $file_name);
        $data['image'] = $file_name;
        // If a new image was provided, update the 'image' attribute
    }
    
    // Keep the old image if no new image was provided
    else {
        $data['image'] = $product->image;
    }
    
    $product->update($data);

    return redirect()->route('dashboard')->with('success','Product has been updated successfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard')->with('success','Product has been deleted successfully');
    }
    
    public function showByCategory($id)
    {
        // Find the category by ID
        $category = Category::findOrFail($id);

        // Get the products that belong to the category
        $productcategory = $category->products;

        // Return a view with the products
        return view('products', compact('productcategory'));
    }

}