<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Http\Requests\StoreProductRequest;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $ProductCount=Product::all()->count();
        $CategorytCount=Category::all()->count();
        $OrderCount=Order::all()->count();
        $products = Product::with('category')->get();
        return view('dashboard.products.index',compact('products','ProductCount','CategorytCount','OrderCount'));
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

    public function update(StoreProductRequest $request, Product $product)
{
    $data = $request->only(['name','price','description','category_id']);
    
    if ($request->hasFile('image')) {
        $photo = $request->file('image');
        $file_name = rand() . '.' . $photo->getClientOriginalName();
        $photo->move(public_path('products'), $file_name);
        $data['image'] = $file_name;

    }
    
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
        Alert::warning('Confirm Deletion', 'Are you sure you want to delete this product?')
            ->showConfirmButton('Yes, delete it!')
            ->showCancelButton('No, cancel')
            ->reverseButtons();
    
        if (request('confirm_action') == 'yes') {
            $product->delete();
            return redirect()->route('dashboard')->with('success','Product has been deleted successfully');
        } else {
            return redirect()->route('dashboard')->with('info','Deletion has been cancelled');
        }
    }
    
    public function showByCategory($id)
    {

        $category = Category::findOrFail($id);

        $productcategory = $category->products;

    return view('products', compact('productcategory'));
    }

  

}