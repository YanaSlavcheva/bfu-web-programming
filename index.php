<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <title>Строителни обекти</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="styles/styles.css">

        <script language="javascript" type="application/javascript">
            function openPopupWindow(url) {
                window.open(url, 'mywin', 'width=600, height=800');
            }

            function showConstructionSitesByInvestor(investor) {
                var xhhtp;
                if (investor == "") {
                    document.getElementById("construction-sites-by-investor").innerHTML = "";
                    return;
                }

                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("construction-sites-by-investor").innerHTML = xhttp.responseText;
                    } 
                };

                xhttp.open("GET", "construction_sites_get_by_investor.php?investor=" + investor, true);
                xhttp.send();
            }

            function showConstructionSitesByCity(city) {
                var xhhtp;
                if (city == "") {
                    document.getElementById("construction-sites-by-city").innerHTML = "";
                    return;
                }

                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("construction-sites-by-city").innerHTML = xhttp.responseText;
                    } 
                };

                xhttp.open("GET", "construction_sites_get_by_city.php?city=" + city, true);
                xhttp.send();
            }
        </script>
    </head>
    <body class="background">
        <main class="container mb-3 mt-3 pb-3 pt-3">           
            <?php include "construction_sites_get_all.php"; ?>
            <header class="text-center">
                <h1>Строителни обекти</h1>
            </header>
            <section class="col-md-12 text-center">
                <article>
                    <a class="btn btn-outline-primary" href="javascript:openPopupWindow('construction_site_add_form.php')">Добави строителен обект</a>
                </article>
            </section>
            <section class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Номер</th>
                            <th scope="col">Име</th>
                            <th scope="col">Адрес</th>
                            <th scope="col">Брой етажи</th>
                            <th scope="col">Брой апартаменти</th>
                            <th scope="col">Външна мазилка</th>
                            <th scope="col">Вътрешна мазилка</th>
                            <th scope="col">Изпълнител</th>
                            <th scope="col">Инвеститор</th>
                            <th scope="col">Град</th>
                            <th scope="col">Държава</th>
                            <th scope="col">Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $num_construction_sites = mysqli_num_rows($all_construction_sites);
                            if (!$num_construction_sites) {
                                echo "<p class=\"alert alert-warning\">Не са намерени строителни обекти. Моля, добавете от бутона по-горе.</p>";
                            } else {
                                $i = 1;
                                while ($row = mysqli_fetch_array($all_construction_sites))
                                {
                                    echo "<tr>";
                                    echo "<th scope=\"row\">".$row["id"]."</th>";
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
                                    echo "<td><a class=\"btn btn-outline-primary\" href=\"javascript:openPopupWindow('construction_site_delete.php?id=".$row['id']."')\">Изтрий</a><a class=\"btn btn-outline-primary\" href=\"javascript:openPopupWindow('construction_site_update_form.php?id=".$row['id']."')\">Редактирай</a></td>";
                                    echo "</tr>";
                                    $i++;
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </section>
            <section class="col-md-12 mt-3">
                <header class="text-center">
                    <h2>Филтри</h2>
                    <p>Моля, изберете филтър, за да видите агрегирани резултати.</p>
                </header>
                <article class="col-md-12 mt-3">
                    <h3 class="text-center">Търсене по инвеститор</h3>
                    <form action="" method="get">
                        <div class="col-md-12">
                            <label class="form-label">Моля, изберете инвеститор</label>
                            <select class="form-control" size="8" name="investor" id="investor" size="5" onchange="showConstructionSitesByInvestor(this.value)">
                                <?php
                                    include "db_connect.php";

                                    $sql = "SELECT DISTINCT investor from `construction-sites`";
                                    $investorsList = mysqli_query($db_connection, $sql);
                                    while ($row = mysqli_fetch_array($investorsList)) {
                                        echo "<option value=\"".$row['investor']."\">".$row['investor']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12" id="construction-sites-by-investor"></div>
                    </form>
                </article>
                <article class="col-md-12 mt-3">
                    <h3 class="text-center">Търсене по град</h3>
                    <form action="" method="get">
                        <div class="col-md-12">
                            <label class="form-label">Моля, изберете град</label>
                            <select class="form-control" size="8" name="city" id="city" size="5" onchange="showConstructionSitesByCity(this.value)">
                                <?php
                                    include "db_connect.php";

                                    $sql = "SELECT DISTINCT city from `construction-sites`";
                                    $citiesList = mysqli_query($db_connection, $sql);
                                    while ($row = mysqli_fetch_array($citiesList)) {
                                        echo "<option value=\"".$row['city']."\">".$row['city']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12" id="construction-sites-by-city"></div>
                    </form>
                </article>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>