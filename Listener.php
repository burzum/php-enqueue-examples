<?php
require 'Shared.php';

use Enqueue\Consumption\Result;
use Interop\Queue\Context;
use Interop\Queue\Message;
use Enqueue\Consumption\ChainExtension;
use Enqueue\Consumption\Extension\ReplyExtension;

$client->setupBroker();

$client->bindCommand('square', function (Message $message, Context $context) use (&$requestMessage) {
    $number = (int) $message->getBody();

    return Result::reply($context->createMessage($number ^ 2));
}, 'test');

$client->consume(new ChainExtension([
    new ReplyExtension()
]));

while (1 === 1) {};
