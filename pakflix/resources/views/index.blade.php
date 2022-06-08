<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>home</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_home.css') }}">
    <!--  <link rel="stylesheet" href="{{ asset('css/nav.css') }}"> -->
    <style>
        .line-text {
            margin-top: 0;
            position: absolute;
            margin-bottom: 1rem;
            font-family: 'Josefin Sans', sans-serif;
            margin-left: -115px;
            left: 43%;
            font-size: 18px;
            top: 35%;
            color: white;
            margin-left: -115;
        }
    </style>
</head>

<body>


    <!-- navigation bar -->
    @include('navhome') @include('login')


    <!-- login area -->
    <div class="logs">
        <a onclick="togglePopup2()"><span class="hover-effect">Login</span></a>
        <a href="{{'signup'}}"><span class="hover-effect">Sign up</span></a>
    </div>
    <!-- main container -->
    <div class="container" data-aos="fade-in"></div>
    <h1 class="textcenter font-semibold" data-aos="zoom-in">Welcome to Pakflix</h1>
    <p class="line-text" data-aos="zoom-in">The ultimate guide for Pakistan's blockbuster movies and TV series</p>

    @if($message = Session::get('error'))

    <p class="error" data-aos="zoom-in-up">{{$message}}</p>

    @endif

    <div class="btncontainer" data-aos="fade-up" data-aos-duration="1100">
        <a class="btn" href="#services"><span>Learn more</span></a>
        <a class="btn" href="{{'signup'}}"><span>Get started</span> </a>

    </div>

    <!-- our team section containing cards -->


    <section id="services" data-aos="fade-up">
        @include('services')
    </section>

    <section data-aos="fade-up" id="contact">
        @include('contact')
    </section>
    <section id="ourteam" data-aos="fade-up">
        @include('team')
    </section>
    <footer class="footer">Copyright &copy; 2022 pakflix.com

        <div>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook"></i>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        function togglePopup2() {
            document.getElementById(
                    "popup-2").classList
                .toggle("active");
        }
    </script>


</body>

</html>