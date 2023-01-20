<?php
require_once __DIR__ . "/vendor/autoload.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
$payload = [
    'name' => "ahastarin",
    'role' => 'backend dev'
];

/**
 * IMPORTANT:
 * You must specify supported algorithms for your application. See
 * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
 * for a list of spec-compliant algorithms.
 */
$jwt = JWT::encode($payload, $key, 'HS256');
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

print_r($decoded);
