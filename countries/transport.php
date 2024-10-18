<?php
require 'book.php';
if(isset ($_POST["search"])){
    $name =$_POST["departure_date"];
    $email =$_POST["return_date"];
    $date =$_POST["passengers"];
    $time =$_POST["transport_type"];
}
$query ="INSERT INTO journey_joy VALUES('','$departure_date', '$return_date', '$passengers', '$transport_type'
transport_booking($conn, $query);
echo

?>