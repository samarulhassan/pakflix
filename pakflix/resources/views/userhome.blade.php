<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pakflix-home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dramas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/movies.css') }}">
    <link rel="stylesheet" href="{{ asset('css/novels.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/navuser_home.css') }}">
    

</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light back">
        <a class="navbarbrand" href="#">
            <img src="{{'images/logi.png'}}" alt="">
        </a>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-a" href="/" aria-current="page"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-a" href="{{'moviespage'}}"><i class="fas fa-film"></i> Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-a" href="{{'dramapage'}}"><i class="fas fa-photo-video"></i>Dramas</a>
            </li>
            <li class="nav-item">
                <a href="{{'audionovels'}}" class="nav-a"><i class="fas fa-file-audio"></i> Novels</a>
            </li>

            <li class="nav-item">
                <a href="{{'playlist'}}" class="nav-a"><i class="fas fa-list-alt"></i>My Playlist</a>
            </li>
            <li class="nav-item">
                <a href="{{'history'}}" class="nav-a"><i class="fas fa-history"></i> History</a>
            </li>
            
            
           <li class="nav-item"> <a  class="nav-a" href="{{route('logout')}}">Logout</a></li>
           </ul>
    </nav>

</header>


    <section id="slider">
        @include('sliders')
    </section>
    <hr>
    <section id="dramas">

        <h1 class="featured-dramas">Top Dramas For you</h1>
        <div id="dramas" class="owl-carousels" data-bs-ride="carousel2">
            <div class="carousel-inner2">

                @foreach($dramas as $drama)


                <div class="carousel-item2">
                    <div class="carddrama">
                        <div class="img-wrapper drama">
                            <iframe class="d-block w-100" width="770" height="200" src="<?php echo $drama->url;
                 ?>" title="YouTube video player" frameborder="0" allow="accelerometer; 
                 autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="card-body1">
                            <h5 class="card-title">{{$drama->title}}</h5>

                            <a href="{{ url('dramavideo', $drama->dramaid) }}" class="play">Play
                                 <i class="fa fa-play" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <button class="carousel-control-prev2" type="button" data-bs-target="#dramas" data-bs-slide="prev">
            <span class="carousel-control-prev-icon2" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next2" type="button" data-bs-target="#dramas" data-bs-slide="next">
            <span class="carousel-control-next-icon2" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        </div>

    </section>
    <hr>
    <section id="novel">

        <h1 class="featured-novels">Top Novels For you</h1>
        <div id="novels" class="carousel3" data-bs-ride="carousel3">
            <div class="carousel-inner3">

                @foreach($novels as $novel)


                <div class="carousel-item3">
                    <div class="cardnovel">
                        <div class="img-wrapper-2">
                            <iframe class="d-block w-100" width="770" height="200" src="<?php echo $novel->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                           encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="card-body1">
                            <h5 class="card-title">{{$novel->title}}</h5>

                            <a href="{{ url('novelvideo',$novel->novelid) }}" class="play">Play <i class="fa fa-play" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev3" type="button" data-bs-target="#novels" data-bs-slide="prev">
                <span class="carousel-control-prev-icon3" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next3" type="button" data-bs-target="#novels" data-bs-slide="next">
                    <span class="carousel-control-next-icon3" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
            </button>

        </div>

    </section>

    <hr>
    <section>

        <h1 class="featured-movies">Top Movies For you</h1>
        <div id="movies" class="owl-carousels" data-bs-ride="carousel4">

            <div class="carousel-inner4">

                @foreach($movies as $movie)
                <div class="carousel-item4">
                    <div class="cardmovie">
                        <div class="img-wrapper-2">

                            <iframe class="d-block w-100" width="770" height="200" src="<?php echo $movie->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                              encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body1">
                            <h5 class="card-title">{{$movie->title}}</h5>

                            <a href="{{ url('movievideo', $movie->movieid) }}" class="play">Play
                                <i class="fa fa-play" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <button class="carousel-control-prev4" type="button" data-bs-target="#movies" data-bs-slide="prev">
                <span class="carousel-control-prev-icon4" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span></button>
            <button class="carousel-control-next4" type="button" data-bs-target="#movies" data-bs-slide="next">
                    <span class="carousel-control-next-icon4" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>



    </section>

    <footer class="footer">Copyright &copy; 2022 pakflix.com

        <div>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook"></i>
        </div>
    </footer>
    <script>
        var multipleCardCarousel = document.querySelector(
            "#dramas"
        );
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel2 = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth1 = $(".carousel-inner2")[0].scrollWidth;
            var cardWidth1 = $(".carousel-item2").width();
            var scrollPosition1 = 0;
            $("#dramas .carousel-control-next2").on("click", function() {
                if (scrollPosition1 < carouselWidth1 - cardWidth1 * 4) {
                    scrollPosition1 += cardWidth1;
                    $("#dramas .carousel-inner2").animate({
                            scrollLeft: scrollPosition1
                        },
                        600
                    );
                }
            });
            $("#dramas .carousel-control-prev2").on("click", function() {
                if (scrollPosition1 > 0) {
                    scrollPosition1 -= cardWidth1;
                    $("#dramas .carousel-inner2").animate({
                            scrollLeft: scrollPosition1
                        },
                        600
                    );
                }
            });
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
    </script>

    <script>
        var multipleCardCarousel = document.querySelector(
            "#novels"
        );
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel3 = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth3 = $(".carousel-inner3")[0].scrollWidth;
            var cardWidth3 = $(".carousel-item3").width();
            var scrollPosition3 = 0;
            $("#novels .carousel-control-next3").on("click", function() {
                if (scrollPosition3 < carouselWidth3 - cardWidth3 * 4) {
                    scrollPosition3 += cardWidth3;
                    $("#novels .carousel-inner3").animate({
                            scrollLeft: scrollPosition3
                        },
                        600
                    );
                }
            });
            $("#novels .carousel-control-prev3").on("click", function() {
                if (scrollPosition3 > 0) {
                    scrollPosition3 -= cardWidth3;
                    $("#novels .carousel-inner3").animate({
                            scrollLeft: scrollPosition3
                        },
                        600
                    );
                }
            });
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
    </script>

    <script>
        var multipleCardCarousel = document.querySelector(
            "#movies"
        );
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel2 = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth4 = $(".carousel-inner4")[0].scrollWidth;
            var cardWidth4 = $(".carousel-item4").width();
            var scrollPosition4 = 0;
            $("#movies .carousel-control-next4").on("click", function() {
                if (scrollPosition4 < carouselWidth4 - cardWidth4 * 4) {
                    scrollPosition4 += cardWidth4;
                    $("#movies .carousel-inner4").animate({
                            scrollLeft: scrollPosition4
                        },
                        600
                    );
                }
            });
            $("#movies .carousel-control-prev4").on("click", function() {
                if (scrollPosition4 > 0) {
                    scrollPosition4 -= cardWidth4;
                    $("#movies .carousel-inner4").animate({
                            scrollLeft: scrollPosition4
                        },
                        600
                    );
                }
            });
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
    </script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script>
    $(document).ready(function() {

                $(".owl-carousel").owlCarousel({

                            autoPlay: 4000,
                            items: 4,
                            itemsDesktop: [1199, 3],
                            itemsDesktopSmall: [979, 3],
                            center: true,
                            nav: true,
                            loop: true,
                            responsive: {
                                600: {
                                    items: 4
                                }
                            }
</script>


</html>