# Argonauts list

this is the technical challenge required by the Wild Code School for admission to advanced dev training.

## Description: 
Pour aider Jason, vous allez :

    1. Créer une application web simple dans votre langage de prédilection.
    2. Stocker les données de cette application dans une base de données.

L'application ne comportera qu'une seule page.

Nous imposons très peu de contraintes au niveau technique :

    Vous pouvez utiliser n'importe quel système de base de données : SQL (MySQL, PostgreSQL, etc.), NoSQL (MongoDB, etc.), voire Firebase (ou toute autre base de données "serverless")
    Vous pouvez utiliser n'importe quel langage, bibliothèque, framework, voire combinaison de plusieurs technologies : cela peut être le cas si vous travaillez avec une bibliothèque ou un framework front-end tel que React ou Angular, et que vous écrivez par ailleurs une application back-end.


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
