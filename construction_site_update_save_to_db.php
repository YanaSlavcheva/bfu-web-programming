<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Редактиране на строителен обект</title>
</head>
<body>
    <?php
        include "db_connect.php";

        $id = intval($_POST['id']);
        $name = addslashes($_POST['name']);
        $address = addslashes($_POST['address']);
        $floors_count = $_POST['floors_count'];
        $apartments_count = $_POST['apartments_count'];
        if (intval(isset($_POST['exterior_plaster']))) $exterior_plaster = 1;
            else $exterior_plaster = 0;
        if (intval(isset($_POST['interior_plaster']))) $interior_plaster = 1;
            else $interior_plaster = 0;
        $contractor = addslashes($_POST['contractor']);
        $investor = addslashes($_POST['investor']);
        $city = addslashes($_POST['city']);
        $country = addslashes($_POST['country']);

        $sql = "UPDATE `construction-sites` SET `name`=\"$name\",`address`=\"$address\",`floors_count`=$floors_count,`apartments_count`=$apartments_count,`exterior_plaster`=$exterior_plaster,`interior_plaster`=$interior_plaster,`contractor`=\"$contractor\",`investor`=\"$investor\",`city`=\"$city\",`country`=\"$country\" WHERE id = $id";

        if (mysqli_query($db_connection, $sql)){
            echo "<script>alert('Данните за строителния обект са успешно обновени.')</script>";
        } else {
            echo "<script>alert('Възникна грешка при обновяването на данните.')</script>";
        }
    ?>

    <script language="javascript">
        // TODO: extract in file
        window.opener.location.reload();
        window.close();
    </script>
</body>