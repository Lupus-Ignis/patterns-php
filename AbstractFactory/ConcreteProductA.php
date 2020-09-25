<?php

namespace AbstractFactory;

class ConcreteProductA extends AbstractProductA
{
    public function doStuff()
    {
        echo "I'm concrete product A";
    }
}