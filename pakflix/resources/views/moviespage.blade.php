<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>movies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" target="_blank">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dramavideo_screen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navuser_home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/playlist.css') }}">

    <style>
        .featured-novels {
            margin-left: 34px;
            font-family: 'Bree Serif', serif;
            text-align: center;
            font-size: 1.5rem;
            color: white;
        }
        
        ul li img {
            margin-left: 22px;
            width: 290px;
            height: 175px;
        }
        
        ul {
            display: flex;
            flex-wrap: wrap;
        }
        
        .radius {
            border-radius: 12px;
        }
        a{
            text-decoration:none;
        }
    </style>

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
            <form class="d-flex" type="GET" method="get" action= "{{url('/search_movie')}}">
                <input class="form-control me-2"style="background-color: #3e3a41;
                color:white; border:none;" 
                type="search" placeholder="Search" aria-label="Search" name="query_movie"><i class="fas fa-search"></i>
              </form>
            
           <li class="nav-item"> <a  class="nav-a" href="{{route('logout')}}">Logout</a></li>
           </ul>
    </nav>

</header>    <h1 class="featured-novels">Watch Your Favourite Pakistani Movies</h1>
    <hr>

    <div class="list-block cards-list">
        <ul>
            @foreach($movies as $movie)
            <li class="card radius">


                <div class="card-content">
                    <div class="card-content-inner">
                        <iframe class="d-block w-150" width="330" height="200" src="<?php echo $movie->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-footer card-title text-align">

                    {{$movie->title}}
                    <a href="{{ url('movievideo', $movie->movieid) }}" class="fas fa-play-circle">
                    </a>
                </div>

            </li>
            @endforeach

            <!--     <div class="card-content">
                    <div class="card-content-inner">
                       <iframe class="d-block w-150"width="430" height="200" src="<?php echo $movie->url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-footer card-title"><i class="fas fa-play-circle">
                    
                </i> SuperStar| Mahira khan Bilal Ashraf |</div> -->

            <br>
        </ul>
    </div>


    <footer class="footer">Copyright &copy; 2022 pakflix.com

        <div>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook"></i>
        </div>
    </footer>


    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script> -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-quad',
        });

        document.querySelectorAll('img')
            .forEach((img) =>
                img.addEventListener('load', () =>
                    AOS.refresh()));
    </script>
    <script>
        var myApp = new Framework7();
    </script>
</body>

</html>