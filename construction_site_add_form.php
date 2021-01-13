<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Добавяне на строителен обект</title>
    <script language="javascript">
        function validateString (field, fieldLabel, minLength, maxLength) {
            if (field.value == "")
            {
                alert (`Моля, въведете ${fieldLabel}!`);
                field.focus();
                return false;
            }
            
            if (field.value.length < minLength || field.value.length > maxLength) {
                alert (`Дължината на полето ${fieldLabel} трябва да бъде между ${minLength} и ${maxLength} символа!`);
                field.focus();
                return false;
            }
            
            if (!(/^[0-9A-Za-z_\u0400-\u04FF]*$/.test(field.value))) {
                alert ('Моля, използвайте само букви, цифри и долно тире!');
                field.focus();
                return false;
            }

            return true;
        }

        function validateNumber(field, fieldLabel, minValue, maxValue) {
            console.log(field.value);
            if (field.value == "")
            {
                alert (`Моля, въведете ${fieldLabel}!`);
                field.focus();
                return false;
            }

            if (typeof field.value !== 'number') {
                alert (`Моля, въведете число за ${fieldLabel}!`);
                field.focus();
                return false;
            }

            if (field.value < minValue || field.value > maxLength) {
                alert (`Моля, за ${fieldLabel} въведете число между ${minValue} и ${maxValue}!`);
                field.focus();
                return false;
            }

            return true;
        }

        function validateForm (form) {
            // TODO: add client side validation here
            // name - existing, length between, characters
            // address- same
            // number of floors - is number, range
            // number of apartments - same
            // изпълнител - existing, length, chars
            // investor - same
            // city - same
            // country - same

            const isFormValid =
            // validateString(form.name, "Име", 3, 50)
                // && validateString(form.address, "Адрес", 3, 200)
                // && 
                validateNumber(form.floors_count, "Брой етажи", 0, 100)
                // && validateNumber(form.apartments_count, 0, 1000)
                // && validateNumber(form.exterior_plaster, -1, 2)
                // && validateNumber(form.interior_plaster, -1, 2)
                // && validateString(form.contractor, "Изпълнител", 3, 100)
                // && validateString(form.investor, "Инвеститор", 3, 100)
                // && validateString(form.city, "Град", 3, 50)
                // && validateString(form.country, "Държава", 3, 50);

            return false;
            return isFormValid;
            // if (form.name.value=="")
            // {
            //     alert ("Моля,въведете име!")
            //     form.name.focus();
            //     return false;
            // }
            
            // if (form.name.value.length > 50 || form.name.length < 3) {
            //     alert ("Дължината на името трябва да бъде между 3 и 50 символа!")
            //     form.name.focus();
            //     return false;
            // }
            
            // if (!(/^\w+$/.test(form.name.value))) {
            //     alert ("Моля, използвайте само букви, цифри и долно тире!")
            //     form.name.focus();
            //     return false;
            // }

            // if (form.address.value=="")
            // { alert ("Моля, въведете адрес!")
            //     form.address.focus()
            //     return false
            // }

            // return false;
        }
    </script>
</head>
<body>
    <h1>Добавяне на строителни обекти</h1>
    <h2>Всички полета са задължителни</h2>
    <!-- TODO: add as action construction_site_add_save_to_db.php -->
    <form action="" method="post" onSubmit="return validateForm(this)">
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