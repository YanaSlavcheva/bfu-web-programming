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