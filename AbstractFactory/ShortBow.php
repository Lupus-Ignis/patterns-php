<?php

namespace AbstractFactory;

/**
 * ConcreteProductA1
 */
class ShortBow extends RangedWeapon
{
    public function fire()
    {
        echo "The shortbow fires a flint-tipped arrow";
    }
}