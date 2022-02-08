<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost:8080/wordpress/wordpress',
    'ck_30da431c17631fa63da1e8768a2bc4537a799e27',
    'cs_16dd81b8d51e0d4aadc65192479ed74754258d8c',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>