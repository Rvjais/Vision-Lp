<?php
// Local development only:  php -S localhost:3000 router.php
// Mimics the .htaccess rewrite so /<slug>-in-delhi/ serves pages/<slug>-in-delhi/index.php.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (preg_match('#^/([a-z0-9-]+-in-delhi)/?$#', $path, $m) && is_file(__DIR__ . "/pages/{$m[1]}/index.php")) {
    require __DIR__ . "/pages/{$m[1]}/index.php";
    return true;
}
return false;
