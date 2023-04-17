<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/landing_page.css">
        <link rel="stylesheet" href="/css/shop.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
@include('navbar')
<!--banner section-->
<div class="banner-title">
    <h2>C A T E G O R I E S </h2>
</div>

<section class="banner">
    @foreach($categories as $categories)
    <a href="{{route('showByCategory',$categories->id)}}">
    <div class="banner-img">
        <img src="/categories/{{$categories->image}}" alt=""style="height: 20rem; width: 30rem !important;">
        <p class="category">{{$categories->name}}</p>
    </div>
    </a>
    @endforeach
    {{-- <a href="{{route('products')}}">
    <div class="banner-img">
        <img src="/img/innaversary.jpg" alt="">
        <p class="category">Anniversary</p>
    </div>
    </a> --}}
    {{-- <a href="{{route('products')}}">
    <div class="banner-img">
        <img src="/img/babyshower2.jpg" alt="">
        <p class="category">Babyshower</p>
    </div>
    </a>
    <a href="{{route('products')}}">
    <div class="banner-img">
        <img src="/img/valentaye3.jpg" alt="">
        <p class="category">Valentaye's Day</p>
    </div>
    </a>
    <a href="{{route('products')}}">
    <div class="banner-img">
        <img src="/img/spicial.jpg" alt="">
        <p class="category">Spicial</p>
    </div>
   </a>
    <a href="{{route('products')}}">
    <div class="banner-img">
        <img src="/img/widing.jpg" alt="">
        <p class="category">Wedding</p>
    </div>
    </a> --}}
</section>

     <!--scroll-->
     <a href="#" class="scroll-top"><i class='bx bx-chevrons-up' style='color:#ffffff'></i></a>
     <div class="end-text">
        <p>© late 2023 Salma Gader All Rights Reserved.</p>
     </div>
    <!--js link-->
    <script src="/js/landing_page.js"></script>
</body>
</html>