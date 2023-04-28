<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $user = Auth::id();
        $quantity = $request->input('quantity');
        $product = Product::findOrFail($request->input('product_id'));
    
        $item = Cart::where('product_id', $product->id)->first();
        
        $request->validate([

                'quantity' => "required|integer|min:1|max:" . ($product->quantity),

        ]);
    
        if ($item) {
            $item->update(['quantity' => $quantity]);
        } else {
            Cart::create([
                'user_id' => $user,
                'product_id' => $product->id,
                'quantity' => $quantity,
            ]);
        }
        Alert::success('product added ',' Your product has been added successfully');
        
        return redirect()->route('showproducts', $product->id)->with('success', 'Item added to cart.');
    }


        public function delete(Request $request)
    {
            $cartItem = Cart::where('id', $request->id)->first();
            if ($cartItem) {
                $cartItem->delete();
                return redirect()->route('bag')->with('success', 'Item removed from cart.');
            } else {
                return redirect()->route('bag')->with('error', 'Item not found in cart.');
            }
    }
    public function show()
    {
        
        $user = Auth::user();
        if($user){
        $cartItems = Cart::with('product')->where('user_id','=', $user->id)->get();
        $subtotal = 0;
        $deliveryFee = 15;
        $data = array();
        foreach ($cartItems as $item) {
            $subtotal += $item->quantity * $item->product->price;
        }
    
        $total = $subtotal + $deliveryFee;
    
        return view('bag', compact('cartItems', 'subtotal', 'total', 'deliveryFee','data'));}
        else{
            Alert::warning('Confirm Deletion', 'Are you sure you want to delete this product?');
        return redirect()->back()->with('success', 'Order status updated successfully!');

        }
    }
     public function info(Request $request)
    { 
        $total = $request->query('total');
        $cartitem = $request->query('cartItem');
    
        return view('info', ['total' => $total, 'cartItem' => $cartitem]);
    }
}