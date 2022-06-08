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
            <!-- <form class="d-flex" type="GET" method="get" action= "{{url('/search')}}">
                <input class="form-control me-2"style="background-color: #3e3a41;
                color:white; border:none;" 
                type="search" placeholder="Search" aria-label="Search" name="query"><i class="fas fa-search"></i>
              </form> -->
            
           <li class="nav-item"> <a  class="nav-a" href="{{route('logout')}}">Logout</a></li>
           </ul>
    </nav>

</header>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
// function logout(){
//  window.location.href = "localhost/pakflix/public/";
// }
    </script>