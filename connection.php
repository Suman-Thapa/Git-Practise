<?php
   $con = mysqli_connect("localhost","suman","suman123","HotelBooking");
   if(!$con){
    die("Cannot connect");
   } 
   echo "Database Connected Sucessfully";


?>