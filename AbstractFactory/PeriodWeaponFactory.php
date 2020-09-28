<?php

namespace AbstractFactory;

/**
 * AbstractFactory
 */
abstract class PeriodWeaponFactory
{
    abstract public function createRangedWeapon(): RangedWeapon;

    abstract public function createMeleeWeapon(): MeleeWeapon;
}