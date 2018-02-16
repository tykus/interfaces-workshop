<?php
/***
 * Script to boot the app for first run
 */

`composer install`;
`composer update`;
`cp .env.example .env`;
`php artisan key:generate`;
`touch database/database.sqlite`;
`touch test.database/database.sqlite`;
`php artisan migrate --seed`;
