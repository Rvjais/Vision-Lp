<?php
// Site-wide URL settings, included by every page.
//
// The site is served from the domain root, and every page is a real folder:
//   /                           -> index.php
//   /cataract-surgery-in-delhi/ -> cataract-surgery-in-delhi/index.php
//   /eye-treatment-in-delhi/    -> eye-treatment-in-delhi/index.php
//   /lasik-surgery-in-delhi/    -> lasik-surgery-in-delhi/index.php
//   /thankyou/                  -> thankyou/index.php
//   /privacy-policy/            -> privacy-policy/index.php
// Folders need no rewrite rules, so these URLs work on any web server right after a git pull.
// Internal links and assets use root-relative paths ("/assets/..."), so they also work on localhost.

// Live domain, used for canonical URLs. Change it here if the site moves.
const SITE_URL = 'https://enquire.visioneyecentre.com';

// Sends a 301 from an old URL to its new path, keeping the query string (UTMs, gclid).
function redirect_permanently($path)
{
    $query = $_SERVER['QUERY_STRING'] ?? '';
    header('Location: ' . $path . ($query === '' ? '' : '?' . $query), true, 301);
    exit;
}
