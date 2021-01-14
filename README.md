# bfu-web-programming
Repository where the processof creating the project is visible:
https://github.com/YanaSlavcheva/bfu-web-programming

This is a project mainly in PHP programming language.

Requirements:
Create simple form, get data from it and save it in MySQL. The form gathers data for various construction sites' state.
Fields in the form:
    `id`
    `name`
    `address`
    `floors_count`
    `apartments_count`
    `exterior_plaster`
    `interior_plaster`
    `contractor`
    `investor`
    `city`
    `country`
    
  How to start the project:
  1/ Install XAMPP
  2/ Download all files from the repo in xampp/htdocs folder (repo subfolder)
  3/ Start XAMPP
  4/ Open phpmyadmin (usually on localhost/phpmyadmin/)
  5/ Copy the contect of construction-site.sql under SQL tab and execute it - now you have the MySQL db
  6/ Go to localhost/bfu-web-programming and you will have the project working

  Description:
  - The project lists construction sites that are present in the database.
  - Basic CRUD operations are available: addingof new construction sites, editing existing construction sites, deleting construction sites.
  - Front-end validation is available for all forms and their fields. Proper error messages are displayed if the entered data is invalid.
  - Two separate filters are available. The user can list all construction sites with chosen investor or in a chosen city.

  Used technologies and libraries:
  - PHP - server code
  - JavaScript- client code
  - MySQL - database
  - Bootstrap, CSS - styling
  - HTML
  
  Let me know if you have any questions ;)
  Enjoy!
