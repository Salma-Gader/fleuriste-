<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bag.css">
    <link rel="stylesheet" href="/css/landing_page.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('navbar')
    <div class="wrapper">
        <h1>Shopping Cart</h1>
        <div class="project">
            <div class="shop">
                <form action="">
                @foreach ($cartItems as $cartItem)
                <div class="box">
                    <img src="/products/{{ $cartItem->product->image }}" alt="" >
                    <div class="content">
                        <h3>{{ $cartItem->product->name }}</h3>
                        <h4>Price:${{ $cartItem->product->price }}</h4>
                        <p class="unit">Quantity:<input type="number" value="{{ $cartItem->quantity }}"></p>
                        <form action="{{route('cart.delete',$cartItem->id)}}" method="Post">
                            @csrf
                            @method('DELETE')
                        <p class="btn-area">
                            <button class="" href="/cart/{id}" style="background: none; border:none;"><i class="fa fa-trash" style="color:white;"></i><span class="btn2">Remove</span></button>
                        </p>
                            </form>
                            @php
                                $arr = ["id"=>$cartItem->product->id, "quantity"=>$cartItem->quantity];
                                    
                                array_push($data, $arr);
                            @endphp
                    </div>
                </div>
                @endforeach
                {{-- <div class="box">
                    <img src="/img/cadeau.jpg" alt="">
                    <div class="content">
                        <h3>man power</h3>
                        <h4>Price:$40</h4>
                        <p class="unit">Quantity:<input type="number" value="1"></p>
                        <p class="btn-area">
                            <i class="fa fa-trash"></i>
                            <span class="btn2">Remove</span>
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/cadeau.jpg" alt=""> 
                    <div class="content">
                        <h3>women gifts</h3>
                        <h4>Price:$40</h4>
                        <p class="unit">Quantity:<input type="number" value="3"></p>
                        <p class="btn-area">
                            <i class="fa fa-trash"></i>
                            <span class="btn2">Remove</span>
                        </p>
                </div>  
                    

                </div> --}}
            </div>
                <div class="right-bar">
                    <p><span>Subtotal</span>${{ $subtotal }}<span></span></p>
                    <hr>
                    <p><span>Shipping</span><span>${{ $deliveryFee }}</span></p>
                    <hr>
                    <p><span>Total</span><span></span>${{ $total }}</p>
                    <a href="{{route('info', ['total' => $total, 'cartItem' =>$data])}}" id="btn1"><i class="fa-solid fa-cart-shopping"></i>checkout</a>
                </div>
            </form>

            </div>
        </div>
        <!--js link-->
        <script src="/js/landing_page.js"></script>
</body>
</html>