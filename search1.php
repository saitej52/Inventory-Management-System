<?php
    $conn = mysqli_connect("localhost","root","","inventory");
    $sea = $_POST["search"];
    $exec = "select * from products where pid like %pid% or pname like %".$sea."% or pman like %".$sea."% or price like %".$sea."% or rack like %".$sea."%;";
            ?>