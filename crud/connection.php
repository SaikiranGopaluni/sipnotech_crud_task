<?php

    $connection = mysqli_connect("localhost","root","","crud");

    if(mysqli_connect_errno()){
        die("Cannot connect to db".mysqli_connect_errno());
    }

    define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."crud/uploads/");

    define("FETCH_SRC","http://127.0.0.1/crud/uploads/")

?>