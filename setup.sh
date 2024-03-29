#!/bin/bash
php artisan create-users storage/setup/users.csv
php artisan create-students storage/setup/students.csv
## Generate for advisors as well
php artisan seed
php artisan app:create-courses storage/setup/all1.csv
php artisan hydrate-con
php artisan hydrate-preqs storage/setup/preqs.csv

php artisan hh storage/setup/course_history.csv
