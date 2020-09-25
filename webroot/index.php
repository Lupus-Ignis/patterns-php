<?php

use AbstractFactory\Client;
use AbstractFactory\ConcreteFactory1;

include ('../AbstractFactory/AbstractFactory.php');
include ('../AbstractFactory/AbstractProductA.php');
include ('../AbstractFactory/Client.php');
include ('../AbstractFactory/ConcreteFactory1.php');
include ('../AbstractFactory/ConcreteProductA.php');



$factory = new ConcreteFactory1();

$client = new Client($factory);

$client->run();