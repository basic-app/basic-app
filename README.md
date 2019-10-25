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

  - Site (pages, blocks, menus)
  - Blog (demo module)
  
## Themes

  - Bootstrap 4 (by (https://getbootstrap.com)[getbootstrap.com])
  - Cool Admin (by (https://colorlib.com)[colorlib.com])
  - Clean Blog (by (https://startbootstrap.com)[startbootstrap.com])
  
## Client-side libraries

  - TinyMCE (by (https://www.tiny.cloud/)[www.tiny.cloud])
  - CodeMirror (by (https://codemirror.net/)[codemirror.net])
 
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
```

### Step 4

Set document root to `/public` directory.

## Backend

Access backend by opening `http://example.com/admin` in a browser.
```
login: admin
password: admin
```

You can change the administrator password in the `/App/Config/Admin.php` file.

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
