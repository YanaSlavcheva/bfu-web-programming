<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Добавяне на строителен обект</title>
    <script language="javascript">
        function validateForm (form) {
            console.log("inside validate function");
            // TODO: add client side validation here
            if (form.name.value=="")
            { alert ("Моля,въведете име!")
                form.name.focus()
                return false
            }
            if (form.address.value=="")
            { alert ("Моля,въведете фамилия!")
                form.address.focus()
                return false
            }

            return true
        }
    </script>
</head>
<body>
    <h1>Строителни обекти</h1>
    <h2>Добавяне</h2>
    <form action="construction_site_add_save_to_db.php" method="post" onSubmit="return validateForm(this)">
        <table>
            <tr>
                <td>Име</td>
                <td>
                    <input type="text" name="name" />
                </td>
            </tr>
            <tr>
                <td>Адрес</td>
                <td>
                    <textarea name="address" cols="25" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td>Брой етажи</td>
                <td>
                    <input type="number" name="floors_count" />
                </td>
            </tr>
            <tr>
            <td>Брой апартаменти</td>
                <td>
                    <input type="number" name="apartments_count" />
                </td>
            </tr>
            <tr>
                <td>Външна мазилка</td>
                <td>
                    <input type="checkbox" name="exterior_plaster" value=1 />
                </td>
            </tr>
            <tr>
                <td>Външна мазилка</td>
                <td>
                    <input type="checkbox" name="interior_plaster" value=1 />
                </td>
            </tr>
            <tr>
                <td>Изпълнител</td>
                <td>
                    <input type="text" name="contractor" />
                </td>
            </tr>
            <tr>
                <td>Инвеститор</td>
                <td>
                    <input type="text" name="investor" />
                </td>
            </tr>
            <tr>
                <td>Град</td>
                <td>
                    <input type="text" name="city" />
                </td>
            </tr>
            <tr>
                <td>Държава</td>
                <td>
                    <input type="text" name="country" />
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="submit" value="Запази промените" />
        <input type="reset" name="reset" id="reset" value="Изчисти промените" />
    </form>
</body>