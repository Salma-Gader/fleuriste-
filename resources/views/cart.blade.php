<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <link rel="stylesheet" href="/css/cart.css">
    
<title>Document</title>
</head>
<body>
    @include('navbar')

    <!--cart-->
    <div class="container">
        <div class="row">
        <div class="col-md-5 image">
            <img src="/products/{{$product->image}}" alt="">
        </div>
        <div class="col-md-7">
                  
            <h2>{{$product->name}}</h2>
            <p class="price">USD ${{$product->price}}</p>
            <p><b>Availability:</b>In Stock</p>
            <p><b>Description:</b>{{$product->description}}</p>
            <form method="POST" action="{{ route('cart.add') }}">
            <label for="">Quantity</label>
                @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input  name="quantity" id="input" type="number">
            <button type="submit" class="btn btn-default cart">Add to cart</button>
            </form>
        </div>
        </div>
    </div>

  <!--script-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  
</body>
</html>