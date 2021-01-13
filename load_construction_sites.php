<?php
    include "connect.php";

    $sql_get_all_construction_sites = "SELECT `id`, `name`, `address`, `floors_count`, `apartments_count`, `exterior_plaster`, `interior_plaster`, `contractor`, `investor`, `city`, `country` FROM `construction-sites` WHERE 1 ";

    if (!isset($_GET['order'])) {
        $sql_get_all_construction_sites .= "order by name";
    } else {
        switch ($_GET['order']) {
            case 'name': $sql_get_all_construction_sites .= 'order by name';
                break;
            case 'contractor': $sql_get_all_construction_sites .= 'order by contractor';
                break;
            case 'investor': $sql_get_all_construction_sites .= 'order by investor';
                break;
        }
    }

    // echo $sql_get_all_construction_sites;
    
    // echo gettype($dbConn);
    // echo gettype($sql_get_all_construction_sites);

    $all_construction_sites = mysqli_query($dbConn, $sql_get_all_construction_sites);
    // echo gettype($all_construction_sites);
    // var_dump($all_construction_sites);
    if (!$all_construction_sites) {
        echo "<h2>Няма въведени строителни обекти</h2>";
        return;
    }
    else {
        echo "<p>Тук ще е таблицата</p>";
        $all_construction_sites_count = mysqli_num_rows($all_construction_sites);
        echo ($all_construction_sites_count);
    }
?>