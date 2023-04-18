<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $user_id = Auth::id();
        $status = 1;
        $payment_method = $request->input('payment_method');
        $total_price = $request->input('total_price');
        $phone = $request->input('phone');
        $adresse = $request->input('adresse');
        // $products = $request->input('product_ids');
        // dd($products);
        // $product_ids = json_decode($products,true);

        $cartItems = Cart::where('user_id', $user_id)
        ->with('product')
        ->get()
        ->toArray();
        $order = new Order;
        $order->status = $status;
        $order->payment_method = $payment_method;
        $order->total_price = $total_price;
        $order->phone = $phone;
        $order->address = $adresse;
        $order->user_id = $user_id;
        $order->save();
//   return $product_ids;
          for($i = 0; $i < count($cartItems); $i++) {
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $cartItems[$i]['product_id'];
            $orderDetail->quantity = $cartItems[$i]['quantity'];
            $orderDetail->save();
        }
        Cart::where('user_id', $user_id)->delete();


    

        return view('landing_page');
    }
}

