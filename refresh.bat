@echo off
php spark migrate:refresh --all && php spark db:seed "DemoSeeder" && php spark publish