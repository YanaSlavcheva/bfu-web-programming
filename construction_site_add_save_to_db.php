<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Добавяне на нов строителен обект</title>
</head>
<body>
    <?php
        include "db_connect.php";

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

        // TODO: add server side validation
        $sql = "INSERT INTO `construction-sites`(`id`, `name`, `address`, `floors_count`, `apartments_count`, `exterior_plaster`, `interior_plaster`, `contractor`, `investor`, `city`, `country`) VALUES (NULL,\"$name\",\"$address\",$floors_count,$apartments_count,$exterior_plaster,$interior_plaster,\"$contractor\",\"$investor\",\"$city\",\"$country\")";

        if (mysqli_query($db_connection, $sql)){
            echo "<script>alert('Данните за строителния обект са успешно добавени.')</script>";
        } else {
            var_dump($sql);
            echo "<script>alert('Възникна грешка при добавянето на строителния обект.')</script>";
        }
    ?>

    <script language="javascript">
        window.opener.location.reload();
        window.close();
    </script>
</body>