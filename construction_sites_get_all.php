<?php
    include "db_connect.php";

    $sql_get_all_construction_sites = "SELECT `id`, `name`, `address`, `floors_count`, `apartments_count`, `exterior_plaster`, `interior_plaster`, `contractor`, `investor`, `city`, `country` FROM `construction-sites` WHERE 1 ";
    $all_construction_sites = mysqli_query($db_connection, $sql_get_all_construction_sites);
    if (!$all_construction_sites) {
        echo "<h2>Няма въведени строителни обекти</h2>";
        return;
    }
?>