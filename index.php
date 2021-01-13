<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <title>Construction Sites</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include "load_construction_sites.php";
        ?>
        <header>
        </header>
        <main>
            <section>
            <article class="col-md-8">
                <h1>Строителни обекти</h1>
            </article>
            <article class="col-md-4">
                <a href="">+</a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Изабел</td>
                            <td>ул.Коларска 1</td>
                            <td>7</td>
                            <td>21</td>
                            <td>Да</td>
                            <td>Не</td>
                            <td>Строителите на бъдещето</td>
                            <td>Софийска община</td>
                            <td>София</td>
                            <td>България</td>
                        </tr>
                            <th scope="row">2</th>
                            <td>Виолета</td>
                            <td>ул.Столарска 12</td>
                            <td>5</td>
                            <td>15</td>
                            <td>Да</td>
                            <td>Да</td>
                            <td>Строителите на бъдещето</td>
                            <td>Община Русе</td>
                            <td>Русе</td>
                            <td>България</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>