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
<header>
    <a href="#">
        <h1 class="logo">logo</h1>
    </a>
    <ul class="navbar">
        <li><a href="{{route('landing_page')}}">HOME</a></li>
        <li><a href="#">PAGES</a></li>
        <li><a href="#">SHOP</a></li>
        <li><a href="#">PORTFOLIO</a></li>
        <li><a href="#">NEWES</a></li>
        <li><a href="#">CONTACT</a></li>
    </ul>
    <div class="h-icons">
        <a href="#"><i class='bx bxs-shopping-bag' style='color:#ffffff'></i></a>
        <a href="#"><i class='bx bxs-phone' style='color:#ffffff'></i></i></a>
        <a href="#"><i class='bx bxs-heart' style='color:#ffffff'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>
<!--banner section-->
<div class="banner-title">
    <h1 >C A T E G O R I ES</h1>
</div>

<section class="banner">
    <a href="{{route('products')}}">
    <div class="banner-img">
        <img src="/img/birthay.jpg" alt="">
        <p class="category">Birthay</p>
    </div>
    </a>
    <a href="{{route('products')}}">
    <div class="banner-img">
        <img src="/img/innaversary.jpg" alt="">
        <p class="category">Anniversary</p>
    </div>
    </a>
    <a href="{{route('products')}}">
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
    </a>
</section>

<div class="end-text">
    <p>© late 2023 Salma Gader All Rights Reserved.</p>
 </div>
    <!--js link-->
    <script src="/js/landing_page.js"></script>
</body>
</html>