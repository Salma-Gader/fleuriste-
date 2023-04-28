<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/info.css">
    <link rel="stylesheet" href="/css/landing_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('navbar')
    <div class="main-dev">
        <div class="box">
            <h1>LIVRAISON INFO</h1>
            <form action="{{route('orders.create')}}" method="post">
                @csrf
                <div class="inputBox">
                <input type="text" name="adresse" required >
                <label for="">adresse</label>
              </div>
                <div class="inputBox">
                <input type="phone" name="phone" required >
                <label for="">Phone</label>
              </div>
              <input type="text" type="hidden" value="{{$total}}" name="total_price" hidden>
              {{-- @foreach ($cartItem as $item) --}}
              {{-- <input  type="hidden" value="{{json_encode($cartItem)}}" name="product_ids[]" > --}}



              {{-- @endforeach --}}
              <button class="pay-btn" type="submit" value="cash on delivery" name="payment_method"><i class="fa-solid fa-truck-fast" ></i>Cash On Delivery</button>
              <button class="pay-btn"><i class="fa-solid fa-credit-card"></i>Pay By Card</button>
              {{-- <input ttype="submit" class="pay-btn" value="cash on delivery" name="payment_method"> --}}
              {{-- <button type="submit">add</button> --}}

            </form>

        </div>
    </div>
    @include('sweetalert::alert')

    <!--js link-->
<script src="/js/landing_page.js"></script>
</body>
</html>