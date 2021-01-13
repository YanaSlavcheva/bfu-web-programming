<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Редактиране на строителен обект</title>
</head>
<body>
    <h1>Редактиране на строителен обект</h1>
    <?php
        include "db_connect.php";
        $id = intval($_GET['id']);
        $sql = "SELECT `id`, `name`, `address`, `floors_count`, `apartments_count`, `exterior_plaster`, `interior_plaster`, `contractor`, `investor`, `city`, `country` FROM `construction-sites` WHERE id = $id";
        $construction_site_from_db = mysqli_query($db_connection, $sql);
        $construction_site_old_data = mysqli_fetch_array($construction_site_from_db);
    ?>
    <form action="update_post.php" method="post">
        <table>
            <tr>
                <td>Име</td>
                <td>
                    <input type="text" name="name" value="<?php echo $construction_site_old_data['name']; ?>"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>