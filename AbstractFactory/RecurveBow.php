<?php

namespace AbstractFactory;

/**
 * ConcreteProductA2
 */
class RecurveBow extends RangedWeapon
{
    public function fire()
    {
        echo "The recurve bow fires a steel-tipped arrow";
    }
}