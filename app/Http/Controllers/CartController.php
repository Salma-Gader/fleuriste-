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
}