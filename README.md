# bfu-web-programming
Scroll down for English
------------------

GitHub репозитори, отразяващо прогреса при създаване на проекта:
https://github.com/YanaSlavcheva/bfu-web-programming

Проектът съдържа Web страници с изпълним на сървъра (PHP код), както и  код, изпълним на браузъра (JavaScript код). Даннитесе съхраняват в база на сървъра.

Описание (проект по задание номер 19):
Проектът съдържа HTML формуляр, в който да се въвеждат данните, характеризиращи строителен обект. Извършва се проверка при клиента за коректност на въведените данни. При невалидни данни на екран излизат детайлни съобщения за грешка, които насочват потребителя. Въведените от формуляра данни се записват в база от данни, като на екрана се визуализират всички съществуващи в базата данни строителни обекти. Сайтът реализира и функции по изтриване и корекция на въведените данни за строителни обекти. Разработени са два филтъра за по-бързо намиране на строителен обект - филтър по инвеститор и филтър по град.

Следните данни за строителен обект биват събрани:
  - `id`- уникален идентификатор
  - `name` - име
  - `address` - адрес
  - `floors_count` - брой етажи
  - `apartments_count` - брой апартаменти
  - `exterior_plaster` - наличие на външна мазилка
  - `interior_plaster` - наличие на вътрешна мазилка
  - `contractor` - изпълнител
  - `investor` - инвеститор
  - `city` - град
  - `country` - държава
    
Как се стартира проекта:
- Инсталираме XAMPP (или друг сървър)
- Копираме файловете на проекта в xampp/htdocs/bfu-web-programming
- Стартираме XAMPP
- Отваряме phpmyadmin (обикновено на localhost/phpmyadmin/)
- Създаваме база данни в MySQL с име "bfu"
- Копираме заявката от файла construction-site.sql в таба SQL и я изпълняваме върху базата "bfu" - вече разполагаме с популирана с предварителни данни MySQL база за проекта
- Отиваме на localhost/bfu-web-programming и може да работим с проекта

Използвани технологии и библиотеки:
- PHP - сървърен код
- JavaScript- клиентски код
- MySQL - база данни
- Bootstrap, CSS - стилизиране
- HTML - уеб страници и формуляри

------------------
English
------------------

Repository where the process of creating the project is visible:
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
- Install XAMPP
- Download all files from the repo in xampp/htdocs folder (repo subfolder)
- Start XAMPP
- Open phpmyadmin (usually on localhost/phpmyadmin/)
- Create database with name "bfu"
- Copy the contect of construction-site.sql under SQL tab and execute it in database "bfu" - now you have the MySQL db
- Go to localhost/bfu-web-programming and you will have the project working

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
