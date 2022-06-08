<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
     crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/sliders.css') }}">

</head>

<body>


    <h1 class="featured">Featured</h1>
    <hr>


    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">

            
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper drama"><img src="/images/drama.jpg" class="d-block w-100" alt="...">
                     </div>
                    <div class="card-body">
                        <h5 class="card-title">Dramas</h5>
                        
                        <a href="{{'dramapage'}}" class="btn btn-primary">View Dramas</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="/images/audiobook.jpg" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Audio Novels</h5>
                        <a href="{{'audionovels'}}" class="btn btn-primary">View Novels</a>
                    </div>
                </div>
            </div>


            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="/images/movie.png" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Movies</h5>
                        <a href="{{'moviespage'}}" class="btn btn-primary">View Movies</a>
                    </div>
                </div>
            </div>
          
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper drama"><img src="/images/drama.jpg" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Dramas</h5> 
                        <a href="{{'dramapage'}}" class="btn btn-primary">View Dramas</a>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</body>
<script>
    var multipleCardCarousel = document.querySelector(
        "#carouselExampleControls"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false,
        });
        var carouselWidth = $(".carousel-inner")[0].scrollWidth;
        var cardWidth = $(".carousel-item").width();
        var scrollPosition = 0;
        $("#carouselExampleControls .carousel-control-next").on("click", function() {
            if (scrollPosition < carouselWidth - cardWidth * 4) {
                scrollPosition += cardWidth;
                $("#carouselExampleControls .carousel-inner").animate({
                        scrollLeft: scrollPosition
                    },
                    600
                );
            }
        });
        $("#carouselExampleControls .carousel-control-prev").on("click", function() {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                $("#carouselExampleControls .carousel-inner").animate({
                        scrollLeft: scrollPosition
                    },
                    600
                );
            }
        });
    } else {
        $(multipleCardCarousel).addClass("slide");
    }
</script>

</html>