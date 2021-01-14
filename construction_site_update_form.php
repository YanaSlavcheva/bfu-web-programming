<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Редактиране на строителен обект</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
</head>
<body>
    <main class="container-fluid">
        <h1>Редактиране на строителен обект</h1>
        <?php
            include "db_connect.php";
            
            $id = intval($_GET['id']);
            $sql = "SELECT `id`, `name`, `address`, `floors_count`, `apartments_count`, `exterior_plaster`, `interior_plaster`, `contractor`, `investor`, `city`, `country` FROM `construction-sites` WHERE id = $id";
            $construction_site_from_db = mysqli_query($db_connection, $sql);
            $construction_site_old_data = mysqli_fetch_array($construction_site_from_db);
        ?>
        <form action="construction_site_update_save_to_db.php" method="post">
            <table>
                <tr>
                    <td>Име</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $construction_site_old_data['name']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>
                        <textarea name="address" cols="25" rows="3">
                            <?php echo $construction_site_old_data['address']; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>Брой етажи</td>
                    <td>
                        <input type="number" name="floors_count" value="<?php echo $construction_site_old_data['floors_count']; ?>" />
                    </td>
                </tr>
                <tr>
                <td>Брой апартаменти</td>
                    <td>
                        <input type="number" name="apartments_count" value="<?php echo $construction_site_old_data['apartments_count']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Външна мазилка</td>
                    <td>
                        <input type="checkbox" name="exterior_plaster" value=1 
                            <?php if ($construction_site_old_data['exterior_plaster'] == 1) echo "checked=\"checked\"" ?>
                        />
                    </td>
                </tr>
                <tr>
                    <td>Външна мазилка</td>
                    <td>
                        <input type="checkbox" name="interior_plaster" value=1 
                            <?php if ($construction_site_old_data['interior_plaster'] == 1) echo "checked=\"checked\"" ?>
                        />
                    </td>
                </tr>
                <tr>
                    <td>Изпълнител</td>
                    <td>
                        <input type="text" name="contractor" value="<?php echo $construction_site_old_data['contractor']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Инвеститор</td>
                    <td>
                        <input type="text" name="investor" value="<?php echo $construction_site_old_data['investor']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Град</td>
                    <td>
                        <input type="text" name="city" value="<?php echo $construction_site_old_data['city']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Държава</td>
                    <td>
                        <input type="text" name="country" value="<?php echo $construction_site_old_data['country']; ?>"/>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="id" value="<?php echo $construction_site_old_data['id']; ?>" />
            <input type="submit" name="submit" id="submit" value="Запази промените" />
            <input type="reset" name="reset" id="reset" value="Изчисти промените" />
        </form>
    </main>
</body>