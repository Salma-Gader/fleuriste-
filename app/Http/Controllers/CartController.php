<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $user = Auth::id();
        $quantity = $request->input('quantity');
        $quantity = $request->input('product_id');

        $item = Cart::where('product_id', $request->product_id)->first();

        if ($item) {
            $item->update(['quantity' => $request->input('quantity')]);
        } else {
            Cart::create([
                'user_id' => $user,
                'product_id' => $request->product_id,
                'quantity' => $request->product_id,
            ]);
        }

        return redirect()->route('showproducts',$request->product_id)->with('success', 'Item added to cart.');
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
        $cartItems = Cart::with('product')->where('user_id','=', $user->id)->get();
        $subtotal = 0;
        $deliveryFee = 15;
        $data = array();
        foreach ($cartItems as $item) {
            $subtotal += $item->quantity * $item->product->price;
        }
    
        $total = $subtotal + $deliveryFee;
    
        return view('bag', compact('cartItems', 'subtotal', 'total', 'deliveryFee','data'));
    }
     public function info(Request $request)
    { 
        $total = $request->query('total');
        $cartitem = $request->query('cartItem');
    
        return view('info', ['total' => $total, 'cartItem' => $cartitem]);
    }
}