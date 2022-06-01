<?php


require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost:8888/paypal');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        // ClienteID
        'Abit_8KewtKFWe1x6S28Xlqznn13AdT9IMp_hSrEGafmXIT16WHrmFY12JN9w6SWWquA4v1hqAm4t3ma',
        //Secret
        'ECppW8TQ5ubxgQ7F_15kvCAOfYcMKJi12SRijEw5gXv8xXlO5e52iqOaHSvO_hSvMV_OyTh0srJy0jML'
    )
);

//var_dump($apiContext);