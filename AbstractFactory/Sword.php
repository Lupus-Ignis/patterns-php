<?php

namespace AbstractFactory;

/**
 * ConcreteProductB2
 */
class Sword extends MeleeWeapon
{
    public function hit()
    {
        echo "The sword slashes";
    }
}