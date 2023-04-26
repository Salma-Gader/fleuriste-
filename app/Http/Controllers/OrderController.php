<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {       
        $ProductCount=Product::all()->count();
        $CategorytCount=Category::all()->count();
        $OrderCount=Order::all()->count();
        $orders = Order::with('user')->get();
        return view('dashboard.orders.index',compact('orders','ProductCount','CategorytCount','OrderCount'));
    }

    public function create(Request $request)
    {
        $user_id = Auth::id();
        $status = "paid";
        $payment_method = $request->input('payment_method');
        $total_price = $request->input('total_price');
        $phone = $request->input('phone');
        $adresse = $request->input('adresse');


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
            $product = Product::findOrFail($cartItems[$i]['product_id']);
            $product->quantity -= $cartItems[$i]['quantity'];
            $orderDetail->save();
            $product->save();
        }
        Cart::where('user_id', $user_id)->delete();


        return view('landing_page');
    }

        public function editOrderStatus(Request $request, $order_id)
    {
        $order = Order::findOrFail($order_id);
        $status = $request->input('statut');
        $order->status = $status;
        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully!');
    }

    public function show($order_id)
    {
        $order = Order::findOrFail($order_id);
        return response()->json([
            'success' => true,
            'order' => $order,
        ]);
    }

}

