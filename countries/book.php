<?php
require 'book.php';
if(isset ($_POST["submit"])){
    $name =$_POST["name"];
    $email =$_POST["email"];
    $date =$_POST["date"];
    $time =$_POST["time"];
    $guest =$_POST["guest"];
}
$query ="INSERT INTO journey_joy VALUES('','$name', '$email', '$date', '$time"
resturant_bookings($conn, $query);
echo

?>
