<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dramas</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/navuser_home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/anthology.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ispr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/horror.css') }}">

 
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light back">
        <a class="navbarbrand" href="#">
            <img src="{{'images/logi.png'}}" alt="">
        </a>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-a" href="{{'userhomenew'}}" aria-current="page"><i class="fas fa-home"></i>Home</a>
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
            <form class="d-flex" type="GET" method="get" action= "{{url('/search_drama')}}">
                <input class="form-control me-2"style="background-color: #3e3a41;
                color:white; border:none;" 
                type="search" placeholder="Search" aria-label="Search" name="query_drama"><i class="fas fa-search"></i>
              </form>
            
           <li class="nav-item"> <a  class="nav-a" href="{{route('logout')}}">Logout</a></li>
           </ul>
    </nav>

</header>
    <h4 class="page-heading">Watch your favourite Pakistani dramas on the go</h4>
    <hr>

    <section id="isprdramas">

        <div class="category-ispr">
            <h3>Novel Based Dramas</h3>
        </div>
        <div id="dramaspage" class="carousel5" data-bs-ride="carousel5">
            <div class="carousel-inner5">
                @foreach($ispr as $ispr)


                <div class="carousel-item5">
                    <div class="card-drama">
                        <div class="img-wrapper drama"><iframe class="d-block w-100" width="800" height="200" src="<?php echo $ispr->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe></div>
                        <div class="card-body1">
                            <h5 class="card-title">
                                <i class="fas fa-play-circle">
                                </i>{{$ispr->title}}
                            </h5>
                            <a href="{{ url('dramavideo', $ispr->dramaid) }}" class="btn play">Play <i class="fa fa-play" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev5" type="button" data-bs-target="#dramaspage" data-bs-slide="prev">
                <span class="carousel-control-prev-icon5" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next5" type="button" data-bs-target="#dramaspage" data-bs-slide="next">
                    <span class="carousel-control-next-icon5" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
            </button>

        </div>

    </section>

    <hr>
    <section id="horror-dramas">
        <div class="category">
            <h3>Horror Dramas</h3>
        </div>
        <div id="horror" class="carousel6" data-bs-ride="carousel6">
            <div class="carousel-inner6">
                @foreach($horror as $horror)


                <div class="carousel-item6">
                    <div class="card-horror">
                        <div class="img-wrapper drama"><iframe class="d-block w-100" width="800" height="200" src="<?php echo $horror->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> </div>
                        <div class="card-body1">
                            <h5 class="card-title">
                                <i class="fas fa-play-circle">
                    
                                </i> {{$horror->title}}
                            </h5>

                            <a href="{{ url('dramavideo', $horror->dramaid) }}" class="btn play">
                                Play <i class="fa fa-play" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev6" type="button" data-bs-target="#horror" data-bs-slide="prev">
                <span class="carousel-control-prev-icon6" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next6" type="button" data-bs-target="#horror" data-bs-slide="next">
                <span class="carousel-control-next-icon6" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </section>

    <hr>
    <section id="anthology">

        <div class="category-anthology">
            <h3>Fiction Dramas</h3>
        </div>
        <div id="anthology" class="owl-carousels" data-bs-ride="carousel8">
            <div class="carousel-inner8">

                @foreach($anthology as $anthology)


                <div class="carousel-item8">
                    <div class="cardant">
                        <div class="img-wrapper drama"><iframe class="d-block w-100" width="800" height="200" src="<?php echo $anthology->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> </div>
                        <div class="card-body1">
                            <h5 class="card-title">
                                <i class="fas fa-play-circle">
                    
                                </i> {{$anthology->title}}
                            </h5>

                            <a href="{{ url('dramavideo', $anthology->dramaid) }}" class="btn play">Play <i class="fa fa-play" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach
                <div class="carousel-item8">
                    <div class="cardant">
                        <div class="img-wrapper drama"><iframe class="d-block w-100" width="800" height="200" src="<?php echo $anthology->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> </div>
                        <div class="card-body1">
                            <h5 class="card-title">
                                <i class="fas fa-play-circle">
                    
                                </i> {{$anthology->title}}
                            </h5>

                            <a href="{{ url('dramavideo', $anthology->dramaid) }}" class="btn play">Play <i class="fa fa-play" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev8" type="button" data-bs-target="#anthology" data-bs-slide="prev">
                <span class="carousel-control-prev-icon8" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next8" type="button" data-bs-target="#anthology" data-bs-slide="next">
                <span class="carousel-control-next-icon8" aria-hidden="true"></span>
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
            "#dramaspage"
        );
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel5 = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth_dr = $(".carousel-inner5")[0].scrollWidth;
            var cardWidth_dr = $(".carousel-item5").width();
            var scrollPosition_dr = 0;
            $("#dramaspage .carousel-control-next5").on("click", function() {
                if (scrollPosition_dr < carouselWidth_dr - cardWidth_dr * 4) {
                    scrollPosition_dr += cardWidth_dr;
                    $("#dramaspage .carousel-inner5").animate({
                            scrollLeft: scrollPosition_dr
                        },
                        600
                    );
                }
            });
            $("#dramaspage .carousel-control-prev5").on("click", function() {
                if (scrollPosition_dr > 0) {
                    scrollPosition_dr -= cardWidth_dr;
                    $("#dramaspage .carousel-inner5").animate({
                            scrollLeft: scrollPosition_dr
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
            "#horror"
        );
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel6 = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth6 = $(".carousel-inner6")[0].scrollWidth;
            var cardWidth6 = $(".carousel-item6").width();
            var scrollPosition6 = 0;
            $("#horror .carousel-control-next6").on("click", function() {
                if (scrollPosition6 < carouselWidth6 - cardWidth6 * 4) {
                    scrollPosition6 += cardWidth6;
                    $("#horror .carousel-inner6").animate({
                            scrollLeft: scrollPosition6
                        },
                        600
                    );
                }
            });
            $("#horror .carousel-control-prev6").on("click", function() {
                if (scrollPosition6 > 0) {
                    scrollPosition6 -= cardWidth6;
                    $("#horror .carousel-inner6").animate({
                            scrollLeft: scrollPosition6
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
            "#anthology"
        );
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel8 = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth8 = $(".carousel-inner8")[0].scrollWidth;
            var cardWidth8 = $(".carousel-item8").width();
            var scrollPosition8 = 0;
            $("#anthology .carousel-control-next8").on("click", function() {
                if (scrollPosition8 < carouselWidth8 - cardWidth8 * 4) {
                    scrollPosition8 += cardWidth8;
                    $("#nthology .carousel-inner8").animate({
                            scrollLeft: scrollPosition8
                        },
                        600
                    );
                }
            });
            $("#nthology .carousel-control-prev8").on("click", function() {
                if (scrollPosition8 > 0) {
                    scrollPosition8 -= cardWidth8;
                    $("#nthology .carousel-inner8").animate({
                            scrollLeft: scrollPosition8
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

</html>