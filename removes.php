<?php
    $conn = mysqli_connect("localhost","root","","inventory");
    $pid = $_POST["pid"];
    $exec = mysqli_query($conn,"delete from cart where pid = '".$pid."';");
    header('location:remove.php');
?>