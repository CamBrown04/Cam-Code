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
   
    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1>Want to host your own Lunch and Learn?</h1>
            <p>Tell us about your session idea here, and check our calendar to see when we have availability! </p>
            <form action="" method="POST">
                <input placeholder="First Name" name="fName" required><br>
                <input placeholder="Last Name" name="lName" ><br>
                <input placeholder="E-mail Address" name="eMail" required><br>
                <textarea placeholder="Summarise what your session will be about!" name="feedback" rows="10" cols="30" required></textarea><br>
                <button type="submit" name="submit" value="submit">Send your Idea</button>
                <?php
                   if(isset($_POST['submit'])){
                        $insert_query = "INSERT INTO 
                        suggestions ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        sendersuggestion)
                        VALUES (        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["eMail"]."',
                                        '".$_POST["feedback"]."')";
                        mysqli_query($link,$insert_query);
						
						$message = "Idea Submitted!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                    ?>
            </form>
            
        </div>
        <div class="contact-us-section contact-us-section2">
            <h1>Calendar</h1>
            
			
			 <ul class="navbar-test">
			 
			 <div>
            
			<li><a href="calendar.php">Check our Availability Here!</a></li>
			
			</div>
			
        </ul>
            
        </div>
    </div>
    <footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>