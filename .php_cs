<?php

$config = require __DIR__.'/vendor/contentful/core/scripts/php-cs-fixer.php';

return $config(
    'laravel',
    true,
    ['scripts', 'src', 'tests']
);
