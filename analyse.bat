@echo off
php vendor\bin\phpstan clear-result-cache && php vendor\bin\phpstan analyse --error-format=raw