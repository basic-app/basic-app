Basic App
=========

Basic App is a free, open-source, self-hosted CMS platform based on the CodeIgniter 4 PHP Framework.

Basic App is designed to provide a quick start for sites made on CodeIgniter 4 and to take over the implementation of the basic functions of a modern web application.

## Overview

  - CRUD 
  - Themes
  - Internationalization
  - Backend area (auth, main menu, options menu, tables, forms)

## Modules

  - [Site](https://github.com/basic-app/module-site) (pages, blocks, menus)
  - [Blog](https://github.com/basic-app/module-blog) (demo module)
  
## Themes

  - [Bootstrap 4](https://github.com/basic-app/theme-bootstrap4) (by [getbootstrap.com](https://getbootstrap.com))
  - [Cool Admin](https://github.com/basic-app/theme-cool-admin) (by [colorlib.com](https://colorlib.com))
  - [Clean Blog](https://github.com/basic-app/theme-clean-blog) (by [startbootstrap.com](https://startbootstrap.com))
  
## Client-side libraries

  - [TinyMCE](https://github.com/basic-app/js-tinymce) (by [www.tiny.cloud](https://www.tiny.cloud/))
  - [CodeMirror](https://github.com/basic-app/js-codemirror) (by [codemirror.net](https://codemirror.net/))
 
## Installation

### Step 1

Create a new application using Composer:

```
composer create-project --stability=dev --keep-vcs --prefer-dist basic-app/basic-app demoapp
```

The command installs the application in a directory named `demoapp`. You can choose a different directory name if you want.

### Step 2

Configure application settings (base url, timezone, database) in the `/.env` file.

### Step 3

Execute commands via shell:

```
php spark migrate -all
php spark ba:update
php spark ba:seed
php spark publish
```

### Step 4

Run local development server

```
php spark serve
```

Or set document root to `/public` directory.

## Backend

Access backend by opening `http://localhost:8080/admin` in a browser.
```
login: admin
password: admin
```

## Change Admin Password

1. Execute command:

```
php spark hash-admin-password YOUR_PASSWORD
```
2. Store result hash string to .evn file in admin.passwordHash section

## Server Requirements

- Database (MySQL or MariaDB)
- Composer
- Webserver (Apache or Nginx)

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
