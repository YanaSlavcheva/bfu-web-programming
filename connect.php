<?php
    $dbConn = mysqli_connect("localhost", "root", "", "bfu");
    // mysqli_select_db($dbConn,"bfu");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } else {
        echo "Succeeded to connect to MySQL";
    }

    mysqli_select_db($dbConn, "bfu");
    mysqli_query($dbConn,"set names utf8");
?>