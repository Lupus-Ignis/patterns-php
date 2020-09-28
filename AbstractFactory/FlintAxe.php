<?php

namespace AbstractFactory;

/**
 * ConcreteProductB1
 */
class FlintAxe extends MeleeWeapon
{
    public function hit()
    {
        echo "The flint axe hacks";
    }
}