<?php

namespace AbstractFactory;

/**
 * ConcreteFactory1
 */
class StoneAgeWeaponFactory extends PeriodWeaponFactory
{
    public function createRangedWeapon(): RangedWeapon
    {
        return new ShortBow();
    }

    public function createMeleeWeapon(): MeleeWeapon
    {
        return new FlintAxe();
    }
}