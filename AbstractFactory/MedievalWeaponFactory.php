<?php

namespace AbstractFactory;

/**
 * ConcreteFactory2
 */
class MedievalWeaponFactory extends PeriodWeaponFactory
{
    public function createRangedWeapon(): RangedWeapon
    {
        return new RecurveBow();
    }

    public function createMeleeWeapon(): MeleeWeapon
    {
        return new Sword();
    }
}