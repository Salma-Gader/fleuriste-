<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcategories()
    { 
        $ProductCount=Product::all()->count();
        $CategorytCount=Category::all()->count();
        $OrderCount=Order::all()->count();
        $categories=Category::all();
        return view('dashboard.categories.index',compact('categories','ProductCount','CategorytCount','OrderCount'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=Category::all();
        return view('dashboard.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $photo = $request->file('image');
        $file_name = rand() . '.' . $photo->getClientOriginalName();
        $photo->move(public_path('categories'), $file_name);
        $data = $request->only(['name','image']);
        $data['image'] = $file_name;
        $category = Category::create($data);
        // Store the selected facilities for the chambre
        

               

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.categories.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.categories.edit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $photo = $request->file('image');
        $file_name = rand() . '.' . $photo->getClientOriginalName();
        $photo->move(public_path('categories'), $file_name);
        $data = $request->only(['name']);
        $data['image'] = $file_name;
    
        $category->update($data);

        return redirect()->route('getcategories')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('getcategories')->with('success','Category has been deleted successfully');
    }

    public function storeCategory(StoreCategoryRequest $request)
    {
        $photo = $request->file('image');
        $file_name = rand() . '.' . $photo->getClientOriginalName();
        $photo->move(public_path('categories'), $file_name);
        $data = $request->only(['name','image']);
        $data['image'] = $file_name;
        $category = Category::create($data);

        return redirect()->route('getcategories')->with('success', 'Category created successfully!');

    }
}
