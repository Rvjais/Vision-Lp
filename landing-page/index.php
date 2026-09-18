<?php
// Old URL: /landing-page/  -> 301 to canonical slug: /landing-page/eye-treatment-in-delhi/
// Preserves query string (e.g. ?utm_source=google) for ads tracking.
$qs = (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '') ? '?' . $_SERVER['QUERY_STRING'] : '';
header('Location: /landing-page/eye-treatment-in-delhi/' . $qs, true, 301);
exit;
