<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>ATC Lunch & Learn</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
<?php 
        $link = mysqli_connect("localhost", "root", "", "atc_db");
?>
    <header></header>
   
   <div id="home-section-2" class="services-section">
        <h1>FAQ</h1>
        <h3>See some frequently asked questions with answers below!</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                   
                </div>
                <h2>How do I host a session?</h2>
                <p>Click onto our "host" page and register to host your session!</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                   
                </div>
                <h2>How do I book a session?</h2>
                <p>There's no limit to how many sessions you can attend!</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    
                </div>
                <h2>How do I cancel a session?</h2>
                <p>You can request a cancellation by contacting the Team Email</p>
            </div>
            <div class="service-item"></div>
            <div class="service-item"></div>
        </div>
    
    </div>
    <footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>