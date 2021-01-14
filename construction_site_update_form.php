<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Редактиране на строителен обект</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 

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
                && validateNumber(form.floors_count, "Брой етажи", 1, 100)
                && validateNumber(form.apartments_count, "Брой апартаменти", 1, 1000)
                && validateString(form.contractor, "Изпълнител", 3, 100, nameRegex, nameRegexDescription)
                && validateString(form.investor, "Инвеститор", 3, 100, nameRegex, nameRegexDescription)
                && validateString(form.city, "Град", 3, 50, nameRegex, nameRegexDescription)
                && validateString(form.country, "Държава", 3, 50, nameRegex, nameRegexDescription);

            return isFormValid;
        }
    </script>
</head>
<body>
    <main class="container">
        <h1>Редактиране на строителен обект</h1>
        <?php
            include "db_connect.php";
            
            $id = intval($_GET['id']);
            $sql = "SELECT `id`, `name`, `address`, `floors_count`, `apartments_count`, `exterior_plaster`, `interior_plaster`, `contractor`, `investor`, `city`, `country` FROM `construction-sites` WHERE id = $id";
            $construction_site_from_db = mysqli_query($db_connection, $sql);
            $construction_site_old_data = mysqli_fetch_array($construction_site_from_db);
        ?>
        <form action="construction_site_update_save_to_db.php" method="post" onSubmit="return validateForm(this)">
            <div class="mb-3">
                <label class="form-label" for="name">Име</label>
                <input class="form-control" type="text" name="name" value="<?php echo $construction_site_old_data['name']; ?>"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="address">Адрес</label>
                <textarea class="form-control" name="address" cols="25" rows="3">
                    <?php echo $construction_site_old_data['address']; ?>
                </textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="floors_count">Брой етажи</label>
                <input class="form-control" type="number" name="floors_count" value="<?php echo $construction_site_old_data['floors_count']; ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="apartments_count">Брой апартаменти</label>
                <input class="form-control" type="number" name="apartments_count" value="<?php echo $construction_site_old_data['apartments_count']; ?>" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="exterior_plaster">Външна мазилка</label>
                <input class="form-check-input" type="checkbox" name="exterior_plaster" value=1 
                    <?php if ($construction_site_old_data['exterior_plaster'] == 1) echo "checked=\"checked\"" ?>
                />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="interior_plaster">Вътрешна мазилка</label>
                <input class="form-check-input" type="checkbox" name="interior_plaster" value=1 
                    <?php if ($construction_site_old_data['interior_plaster'] == 1) echo "checked=\"checked\"" ?>
                />
            </div>
            <div class="mb-3">
                <label class="form-label" for="contractor">Изпълнител</label>
                <input class="form-control" type="text" name="contractor" value="<?php echo $construction_site_old_data['contractor']; ?>"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="investor">Инвеститор</label>
                <input class="form-control" type="text" name="investor" value="<?php echo $construction_site_old_data['investor']; ?>"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="city">Град</label>
                <input class="form-control" type="text" name="city" value="<?php echo $construction_site_old_data['city']; ?>"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="country">Държава</label>
                <input class="form-control" type="text" name="country" value="<?php echo $construction_site_old_data['country']; ?>"/>
            </div>
            
            <input type="hidden" name="id" value="<?php echo $construction_site_old_data['id']; ?>" />
            <input class="btn btn-outline-primary" type="submit" name="submit" id="submit" value="Запази промените" />
            <input class="btn btn-outline-primary" type="reset" name="reset" id="reset" value="Изчисти промените" />
        </form>
    </main>
</body>