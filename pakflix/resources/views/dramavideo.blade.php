<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Video</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" target="_blank">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navuser_home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dramavideo_screen.css') }}">
<style>
    .playlist{
            position: absolute;
    color: white;
    border-color: #a9b8cd;
    width: 139px;
    padding-bottom: 4px;
    font-size: 18px;
    border-radius: 6px;
    right: 15%;
    bottom: -107px;
    text-decoration: none;
    cursor: pointer;
    font-size: 14px;
    padding-top: 3px;
    font-family: 'Josefin Sans', sans-serif;
    background-color: rgb(131, 84, 161);
    text-align: center;
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
                    <a class="nav-a" aria-current="page"><i class="fas fa-home"></i>Home</a>
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

                <li class="nav-item"> <a class="nav-a" href="{{route('logout')}}">Logout</a></li>
            </ul>
        </nav>

    </header>
    <div style="text-align: center">

        <div class="iframe-container" style="text-align: center;">


            <iframe src="{{$url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <h1 class="featured-novels">{{$title}}</h1>

        <!--  <button class="add" onclick="{{ url('Addtoplaylist_drama', $id) }}">Add to playlist <i class="fas fa-plus"></i></button>    -->
    </div>
    <div><a href="{{ url('Addtoplaylist_drama', $id) }}" class="playlist active">Add to playlist
    <i class="fas fa-plus"></i>
    </a></div>
    @if($message = Session::get('success'))

<div class="alert alert-success text-center">{{$message}}</div>
    @endif
</div>


    <hr>
    <?php for ($x = 0; $x <= $count-1; $x++) { ?>

    <li class="card radius">



        <div class="card-content">
            <div class="card-content-inner">
                <iframe class="d-block w-150" width="310" height="200" src="{{$sugarray[$x]['url']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
           encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="card-footer card-title"><i>
        
    </i>{{$sugarray[$x]['title']}}

            <a href="{{ url('dramavideo', $sugarray[$x]['dramaid']) }}" class="btn playvideo">Play <i class="fa fa-play" style="font-size:14px"></i></a>
        </div>

    </li>
    <?php } ?>
    <footer class="footer">Copyright &copy; 2022 pakflix.com

        <div>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook"></i>
        </div>
    </footer>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</body>

</html>