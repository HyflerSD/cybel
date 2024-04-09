#!/bin/bash
mysql -uroot -p -e "SET FOREIGN_KEY_CHECKS = 0; DROP DATABASE cybel; CREATE DATABASE cybel; SET FOREIGN_KEY_CHECKS = 1;" cybel

php artisan migrate
