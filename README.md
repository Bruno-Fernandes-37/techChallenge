# Argonauts list

this is the technical challenge required by the Wild Code School for admission to advanced dev training.

## Description: 
To help Jason, you will:

    1. Create a simple web application in your preferred language.
    2. Store the data from this application in a database.

The application will have only one page.

We impose very few technical constraints:

    You can use any database system: SQL (MySQL, PostgreSQL, etc.), NoSQL (MongoDB, etc.), or even Firebase (or any other serverless database)
    You can use any language, library, framework, or even a combination of several technologies: this can be the case if you work with a front-end library or framework such as React or Angular, and you also write a back-end application.

Translated with www.DeepL.com/Translator (free version)


## Steps:
1. Clone the repo from Github.
2. Run `composer install`.
3. Create *config/db.php* from *config/db.php.dist* file and add your DB parameters. Don't delete the *.dist* file, it must be kept.

```php
define('APP_DB_HOST', 'your_db_host');
define('APP_DB_NAME', 'your_db_name');
define('APP_DB_USER', 'your_db_user_wich_is_not_root');
define('APP_DB_PASSWORD', 'your_db_password');
```
4. Import *database.sql* in your SQL server, you can do it manually or use the *migration.php* script which will import a *database.sql* file.
5. Run the internal PHP webserver with `php -S localhost:8000 -t public/`. The option `-t` with `public` as parameter means your localhost will target the `/public` folder.
6. Go to `localhost:8000` with your favorite browser.
7. From this starter kit, create your own web application.

### Windows Users:

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`

### How does URL routing work ?

![simple_MVC.png](.tours/simple_MVC.png)

We have now entered our different routes (url) in the file `route.php` as well as the controller and the method to call. Each controller will call the corresponding manager according to our needs. The manager will return the information requested by the controller from the database or not, and the controller will send it back to our Twig view.

### Authors:

* Bruno Fernandes
