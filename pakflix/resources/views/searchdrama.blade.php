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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" /> -->
    <link rel="stylesheet" href="//.css" />
    <link href='https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('css/navuser_home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/playlist.css') }}">
    
    <style>
        h3, .h3 {
    font-size: 24px;
    color: white;
    text-align: center;
}
</style>

</head>

<body>

   
    <h3>Your Search result</h3>
    <hr>

    <div class="list-block cards-list">
        <ul>

            <?php for ($x = 0; $x <= $count-1; $x++) { ?>

            <li class="card radius">

              

                <div class="card-content">
                    <div class="card-content-inner">
                       <iframe class="d-block w-150 mx-3" width="311" height="200" 
                       src="{{$search_result[$x]['url']}}" title="YouTube video player" 
                       frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                       encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-body1">
                        <h5 class="card-title">'{{$search_result[$x]['title']}}'</h5>
                        
                        <a href="{{ url('dramavideo', $search_result[$x]['dramaid']) }}" class="btn play">Play <i class="fa fa-play" style="font-size:14px"></i></a>
                    </div>
                    
                </i></div>
                
        

            </li>
           <?php } ?>
            
            
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