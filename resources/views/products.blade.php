<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/landing_page.css">
    <link rel="stylesheet" href="/css/products.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @include('navbar')
<section class="products">
    <div>
        <h2>choose Your Gifts</h2>
    </div>
    <div class="new-content">
        @foreach ($productcategory as $product)
        <div class="row">
            <img src="/products/{{$product->image}}" alt="" style="height: 25rem;  !important;">
            <h4>{{$product->name}}</h4>
            <h5>${{$product->price}}</h5>
            <div class="bbtn">
                {{-- <a href="#" class="add-to-cart" data-product-id="{{ $product->id }}">Add to cart</a> --}}
                <a href="{{route('showproducts',$product->id)}}" class="add-to-cart" >View product</a>
            </div>
        </div>
        @endforeach
        {{-- <div class="row">
            <img src="img/cadeau.jpg" alt="">
            <h4>CHOCOLAT GIFT </h4>
            <h5>$18.00</h5>
            <div class="bbtn">
                <a href="#"> Add to cart</a>
            </div>
        </div>
        <div class="row">
            <img src="img/cadeau.jpg" alt="">
            <h4>CHOCOLAT GIFT </h4>
            <h5>$18.00</h5>
            <div class="bbtn">
                <a href="#"> Add to cart</a>
            </div>
        </div>
        <div class="row">
            <img src="img/cadeau.jpg" alt="">
            <h4>CHOCOLAT GIFT </h4>
            <h5>$18.00</h5>
            <div class="bbtn">
                <a href="#"> Add to cart</a>
            </div>
        </div> --}}
    </div>
</section> 
     <!--scroll-->
     <a href="#" class="scroll-top"><i class='bx bx-chevrons-up' style='color:#ffffff'></i></a>
     <div class="end-text">
        <p>© late 2023 Salma Gader All Rights Reserved.</p>
     </div>
<!--js link-->
{{-- <script>
    $(function() {
        $('a.add-to-cart').on('click', function(event) {
            event.preventDefault();
    
            var productId = $(this).data('product-id');
            var url = "{{ route('cart.add') }}";
    
            $.post(url, {
                product_id: productId,
                quantity: 1,
                _token: "{{ csrf_token() }}"
            }, 
        });
    });
    </script> --}}

<script src="/js/landing_page.js"></script>
</body>
</html>