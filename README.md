Basic App CMS
=============

Basic App is a free, open-source, self-hosted content management system based on the CodeIgniter 4 PHP Framework.

Basic App is designed to provide a quick start for sites made on CodeIgniter 4 and to take over the implementation of the basic functions of a modern web application.
 
## Installation

### Step 1

Create a new application using Composer:

```
composer create-project --stability=dev basic-app/basic-app
```

The command installs the application in a directory named `demoapp`. You can choose a different directory name if you want.

### Step 2

Configure application settings (base url, timezone, database) in the `/.env` file.

### Step 3

Execute commands via shell:

```
php spark migrate -all
php spark db:seed "BasicApp\Admin\Database\Seeds\DemoSeeder"
php spark db:seed "BasicApp\SiteLanding\Database\Seeds\DemoSeeder"
php spark publish
```

### Step 4

Run local development server

```
php spark serve
```

Or set document root to `/public` directory in case of using another server.

## Backend

Access backend by opening `http://localhost:8080/index.php/admin` in a browser.
```
login: admin
password: admin
```


## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## Credits

- [PHP 8.2+](https://www.php.net/)
- [CodeIgniter 4](https://codeigniter.com/)
- [AdminLTE 4](https://adminlte.io/)
- [TinyMCE 7](https://www.tiny.cloud/)
- [Bootstrap 5](https://getbootstrap.com/)
- [jQuery 3](https://jquery.com/)
- [Lightbox2](https://lokeshdhakar.com/projects/lightbox2/)
- [Fontawesome 7](https://fontawesome.com/)

