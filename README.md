Installation
============

## Requirements

The minimum requirement by this project template is that your Web server supports PHP 7.3.

## Step 1

You can install the application using Composer using the following commands:

    composer create-project --stability=dev --remove-vcs --prefer-dist basic-app/basic-app demoapp

The command installs the application in a directory named `demoapp`. You can choose a different directory name if you want.

## Step 2

Download latest [CodeIgniter 4](https://github.com/codeigniter4/codeigniter4) release and extract a `system` directory from it to application `system` directory.

## Step 3

Rename the file named `env` to `.env`. Configure base site url, timezone, and database connection settings in the `.env` file.

## Step 4

Run migrations.

    php spark migrate:latest -all
    
## Step 5

Run `install` application hook.

    php spark install