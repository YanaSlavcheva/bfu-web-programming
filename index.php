<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <title>Строителни обекти</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script language="javascript" type="application/javascript">
            function openPopupWindow(url) {
                window.open(url, 'mywin', 'width=400, height=500');
            }
        </script>
    </head>
    <body>
        <?php
            include "construction_sites_get_all.php";
        ?>
        <header>
        </header>
        <main>
            <section>
            <article class="col-md-8">
                <h1>Строителни обекти</h1>
            </article>
            <article class="col-md-4">
                <a href="javascript:openPopupWindow('construction_site_add_form.php')">+</a>
            </article>
            </section>
            <section>
                <table class="table">
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($all_construction_sites))
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
                                echo "<td><a href=\"javascript:openPopupWindow('construction_site_delete.php?id=".$row['id']."')\">Изтрий</a></td>";
                                echo "<td><a href=\"javascript:openPopupWindow('construction_site_update_form.php?id=".$row['id']."')\">Редактирай</a></td>";
                                echo "</tr>";
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>