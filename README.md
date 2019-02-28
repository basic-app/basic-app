Basic App
=========

Basic App is a free, open-source, self-hosted CMS platform based on the CodeIgniter 4 PHP Framework.

Basic App is designed to provide a quick start for sites made on CodeIgniter 4 and to take over the implementation of the basic functions of a modern web application.

## System Requirements

- PHP 7
- MySQL
- Composer
- Bower

## Backend

Access application backend in your brower by opening `http://example.com/admin`.
```
login: admin
password: admin
```

Installation
============

## Step 1

You can install the application using Composer using the following commands:

    composer create-project --stability=dev --remove-vcs --prefer-dist basic-app/basic-app demoapp

The command installs the application in a directory named `demoapp`. You can choose a different directory name if you want.

## Step 2

Rename the file named `env` to `.env`. Configure base site url, timezone, and database connection settings in the `.env` file.

## Step 3

Run migrations.

    php spark migrate:latest -all
    
## Step 4

Install Bower libraries.

    bower install
    
## Step 5

Set document root of your web server to `/path/to/application/public` and using the URL `http://example.com`.
   
## Step 6

Run `install` application hook.

    php spark install