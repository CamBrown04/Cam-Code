<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>ATC Lunch & Learn</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "atc_db");
    $sql = "SELECT * FROM sessionTable";
    ?>
    <header></header>
    <div id="home-section-1" class="movie-show-container">
        <h1>Past Sessions</h1>
        <h3>Missed a session? Catch up by watching recordings below!</h3>
		
		</body>

   
<html lang="en">
<head>
    
    <link rel="stylesheet" href="style.css">
   
</head>
<body>



    <div class="container">
        <div class="videos">
            <video class="active" src="videos/video1.mp4" ></video>
            <video src="videos/working demo.mp4" muted></video>
            <video src="videos/xml demo.mp4" muted></video>
            <video src="videos/video4.mp4" muted></video>
        </div>
        <div class="main-video">
            <video src="videos/video1.mp4" muted controls autoplay></video>
        </div>
    </div>

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>

        $(document).ready(function(){

            $('.videos video').click(function(){

                $(this).addClass('active').siblings().removeClass('active');

                var src = $(this).attr('src');
                $('.main-video video').attr('src',src);
            });
        });

    </script>

</body>
</html>
    
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>