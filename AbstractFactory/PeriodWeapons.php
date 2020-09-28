<?php

namespace AbstractFactory;

/**
 * Client
 */
class PeriodWeapons
{
    private RangedWeapon $ranged_weapon;
    private MeleeWeapon $meleeWeapon;

    public function __construct(PeriodWeaponFactory $factory)
    {
        $this->ranged_weapon = $factory->createRangedWeapon();
        $this->meleeWeapon = $factory->createMeleeWeapon();
    }

    public function run(): void
    {
        $this->ranged_weapon->fire();
        echo "<br>";
        $this->meleeWeapon->hit();
        echo "<br>";
    }
}