<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Добавяне на строителен обект</title>
    <script language="javascript">
        function validateString (field, fieldLabel, minLength, maxLength, regex, regexDescription) {
            if (field.value.trim() == "")
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
            
            if (!(regex.test(field.value))) {
                alert (`Моля, използвайте само ${regexDescription}!`);
                field.focus();
                return false;
            }

            return true;
        }

        function validateNumber(field, fieldLabel, minValue, maxValue) {
            if (!field.value)
            {
                alert (`Моля, въведете ${fieldLabel}!`);
                field.focus();
                return false;
            }

            if (parseInt(field.value) === NaN) {
                alert (`Моля, въведете число за ${fieldLabel}! ${parseInt(field.value)}`);
                field.focus();
                return false;
            }

            if (field.value < minValue || field.value > maxValue) {
                alert (`Моля, за ${fieldLabel} въведете число между ${minValue} и ${maxValue}!`);
                field.focus();
                return false;
            }

            return true;
        }

        function validateForm (form) {
            const nameRegex = /^[0-9A-Za-z\u0400-\u04FF-\s]*$/;
            const nameRegexDescription = "букви, цифри, интервал и тире";
            const addressRegex = /^[0-9A-Za-z.,_\u0400-\u04FF-\s]*$/;
            const addressRegexDescription = "букви, цифри, точка, запетая, тире, интервал и долно тире";

            const isFormValid = validateString(form.name, "Име", 3, 50, nameRegex, nameRegexDescription)
                && validateString(form.address, "Адрес", 3, 200, addressRegex, addressRegexDescription)
                && validateNumber(form.floors_count, "Брой етажи", 0, 100)
                && validateNumber(form.apartments_count, "Брой апартаменти", 0, 1000)
                && validateString(form.contractor, "Изпълнител", 3, 100, nameRegex, nameRegexDescription)
                && validateString(form.investor, "Инвеститор", 3, 100, nameRegex, nameRegexDescription)
                && validateString(form.city, "Град", 3, 50, nameRegex, nameRegexDescription)
                && validateString(form.country, "Държава", 3, 50, nameRegex, nameRegexDescription);

            return isFormValid;
        }
    </script>
</head>
<body>
    <h1>Добавяне на строителни обекти</h1>
    <h2>Всички полета са задължителни</h2>
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