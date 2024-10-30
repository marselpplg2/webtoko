<?php

    $conn = mysqli_connect("localhost","root","","marsel");
    if(!$conn){
        die(mysqli_connect_error($conn));
    }

?>