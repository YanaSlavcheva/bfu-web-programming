<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8" />
    <title>Изтриване на строителен обект</title>
</head>
<body>
    <script language="javascript">
        if (!confirm("Сигурни ли сте, че искате да изтриете този строителен обект и всички негови данни?")) {
            window.close();
        }
    </script>
    <?php
        include "db_connect.php";
        $construction_site_id = intval($_GET['id']);
        $sql = "DELETE FROM `construction-sites` WHERE id = $construction_site_id";

        if (mysqli_query($db_connection, $sql)) {
            echo "<script>alert('Строителния обект беше изтрит успешно.')</script>";
        } else {
            echo "<script>alert('Възникна грешка при изтриването на строителния обект.')</script>";
        }
    ?>
    <script language="javascript">
        window.opener.location.reload();
        window.close();
    </script>
</body>