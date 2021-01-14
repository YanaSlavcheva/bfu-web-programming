<?php
    include "db_connect.php";

    $city = $_GET['city'];
    $constructionSitesByCity = mysqli_query($db_connection, "SELECT * from `construction-sites` where city = \"$city\"");
    $constructionsSitesByCityCount = mysqli_num_rows($constructionSitesByCity);

    if (!$constructionsSitesByCityCount) {
        echo "<p class=\"text-center mt-3\">Няма намерени строителни обекти в този град</p>";
    } else {
        echo "<h4 class=\"text-center mt-3\">Списък на строителните обекти в град $city</h4>";
        echo "<table class=\"table table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">Номер</th>
                <th scope=\"col\">Име</th>
                <th scope=\"col\">Адрес</th>
                <th scope=\"col\">Брой етажи</th>
                <th scope=\"col\">Брой апартаменти</th>
                <th scope=\"col\">Външна мазилка</th>
                <th scope=\"col\">Вътрешна мазилка</th>
                <th scope=\"col\">Изпълнител</th>
                <th scope=\"col\">Инвеститор</th>
                <th scope=\"col\">Град</th>
                <th scope=\"col\">Държава</th>
            </tr>
        </thead>
        <tbody>";
            $i = 1;
            while ($row = mysqli_fetch_array($constructionSitesByCity))
            {
                $exterior_plaster_value = intval($row["exterior_plaster"]) == 1 ? "Да" : "Не";
                $interior_plaster_value = intval($row["interior_plaster"]) == 1 ? "Да" : "Не";

                echo "<tr>";
                echo "<th scope=\"row\">".$row["id"]."</th>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["floors_count"]."</td>";
                echo "<td>".$row["apartments_count"]."</td>";
                echo "<td>$exterior_plaster_value</td>";
                echo "<td>$interior_plaster_value</td>";
                echo "<td>".$row["contractor"]."</td>";
                echo "<td>".$row["investor"]."</td>";
                echo "<td>".$row["city"]."</td>";
                echo "<td>".$row["country"]."</td>";
                echo "</tr>";
                $i++;
            }
        echo "</tbody></table>";
    }
?>