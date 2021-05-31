<?php
require 'vendor/autoload.php';

use Enqueue\SimpleClient\SimpleClient;

// The consumer side

/** @var \Interop\Queue\Context $context */

// composer require enqueue/amqp-ext # or enqueue/amqp-bunny, enqueue/amqp-lib

$client = new SimpleClient([
    'transport' => [
        //'dsn' => 'file://',
        //'path' => __DIR__ . DIRECTORY_SEPARATOR . 'tmp',
        'dsn' => 'amqp:',
        'user' => 'guest',
        'pass' => 'guest',
    ],
    'client' => [

    ],
    'extensions' => [
        'reply_extension' => true,
    ]
]);
