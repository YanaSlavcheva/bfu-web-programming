<?php
    include "db_connect.php";

    $investor = $_GET['investor'];
    $constructionSitesByInvestor = mysqli_query($db_connection, "SELECT * from `construction-sites` where investor = \"$investor\"");
    $constructionsSitesByInvestorCount = mysqli_num_rows($constructionSitesByInvestor);

    if (!$constructionsSitesByInvestorCount) {
        echo "<p>Няма намерени строителни обекти с този инвеститор</p>";
    } else {
        echo "<h5>Списък на строителните обекти с инвеститор $investor</h5>";
        echo "<table class=\"table\">
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
            while ($row = mysqli_fetch_array($constructionSitesByInvestor))
            {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["floors_count"]."</td>";
                echo "<td>".$row["apartments_count"]."</td>";
                echo "<td>".$row["exterior_plaster"]."</td>";
                echo "<td>".$row["interior_plaster"]."</td>";
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