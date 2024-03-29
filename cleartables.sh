#!/bin/bash
mysql -uroot -pjoynerz9b -e "SET FOREIGN_KEY_CHECKS = 0; DROP DATABASE cybel; CREATE DATABASE cybel; SET FOREIGN_KEY_CHECKS = 1;" cybel

php artisan migrate
