<?php
require 'Shared.php';

$client->setupBroker();

echo $client->sendCommand('square', 5, true)->receive(5000)->getBody();
