<?php
require 'book.php';
if(isset ($_POST["check_availability"])){
    $name =$_POST["check-in_date"];
    $email =$_POST["chack-out_date"];
    $guest =$_POST["guests"];
}
$query ="INSERT INTO journey_joy VALUES('','$check-in_date', '$hack-out_date', '$guests'
hotel_booking($conn, $query);
echo

?>