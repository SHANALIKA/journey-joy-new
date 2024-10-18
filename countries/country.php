<?php
require 'country.php';
if(isset ($_POST["submit"])){
    $id =$_POST["id"];
    $country =$_POST["country"];
 
}
$query ="INSERT INTO journey_joy VALUES('','$id', '$country'"
country($conn, $query);
echo

?>
