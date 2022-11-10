<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "", "atc_db");

    $sql = "DELETE FROM sessionTable WHERE bookingID = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>