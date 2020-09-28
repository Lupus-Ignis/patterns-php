<?php

use AbstractFactory\MedievalWeaponFactory;
use AbstractFactory\StoneAgeWeaponFactory;
use AbstractFactory\PeriodWeapons;

spl_autoload_register(
    function ($class)
    {
        $parts = explode('\\', $class);
        require end($parts) . '.php';
    }
);

$stoneAgeFactory = new StoneAgeWeaponFactory();
$stoneAgeClient = new PeriodWeapons($stoneAgeFactory);
echo "Stone age weapons:<br>";
$stoneAgeClient->run();
echo "<br>";
$medievalFactory = new MedievalWeaponFactory();
$medievalClient = new PeriodWeapons($medievalFactory);
echo "Medieval weapons:<br>";
$medievalClient->run();