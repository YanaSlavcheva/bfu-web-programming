<?php
    $db_connection = mysqli_connect("localhost", "root", "", "bfu");

    // Check connection
    // TODO: improve for production
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } else {
        echo "Succeeded to connect to MySQL";
    }

    mysqli_select_db($db_connection, "bfu");
    mysqli_query($db_connection,"set names utf8");
?>