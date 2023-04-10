<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/landing_page.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300&display=swap" rel="stylesheet">
</head>
    <body>   
    <header>
        <a href="#">
            <h1 class="logo">logo</h1>
        </a>
        <ul class="navbar">
            <li><a href="#">HOME</a></li>
            <li><a href="#">PAGES</a></li>
            <li><a href="{{route('shop')}}">SHOP</a></li>
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
    <!--home section-->
    <section class="home">
        <div class="home-text">
            <h1 class="title">FIND THE PERFECT GIFT FOR EVERY OCCASION <br>AT FLEURISTE</h1>
            <a href="{{route('shop')}}" class="btn">Pick a Bouquet</a>
        </div>
    </section>
    <!--about section-->
    <section>
        <div class="about">
        <div class="about-content">
        <h1 class="about-title">ABOUT OUR GIFTS</h1>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum volutpat enim, eget placerat nisi finibus vel. Nulla facilisi. Nulla aliquet porttitor nulla, vel consectetur lorem dignissim et. Vivamus tristique turpis eget lacus vehicula, non hendrerit quam hendrerit. Phasellus interdum neque vitae elit imperdiet, eget tristique elit aliquet. Morbi porttitor, enim ac finibus blandit, nunc elit lacinia lorem, nec maximus urna nisi at turpis. Fusce sodales vel est quis euismod.</p>
        </div>
        <img src="/img/about2.jpg" alt="About Us">
       </div> 
    </section>
    <!--contact section-->
    <section class="contact">
        <div class="contact-box">
            <h4>MY ACCOUNT</h4>
            <li><a href="#">My account</a></li>
            <li><a href="#">Checkout</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">WishList</a></li>
        </div>
        <div class="contact-box">
            <h4>MY LINKS</h4>
            <li><a href="#">Store location</a></li>
            <li><a href="#">Orders Traking</a></li>
            <li><a href="#">Size Guide</a></li>
            <li><a href="#">My account</a></li>
            <li><a href="#">FAQs</a></li>
        </div>
        <div class="contact-box">
            <h4>INFORMATION</h4>
            <li><a href="#">Privary Page</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Delivery Informations</a></li>
            <li><a href="#">Term & Conditions</a></li>
        </div>
        <div class="contact-box">
            <h4>Fleuriste</h4>
            <h5>Contact with us</h5>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook' style='color:#ffffff'  ></i></a>
                <a href="#"><i class='bx bxl-instagram-alt' style='color:#ffffff' ></i></a>
                <a href="#"><i class='bx bxl-twitter' style='color:#ffffff' ></i></a>
            </div>

        </div>
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