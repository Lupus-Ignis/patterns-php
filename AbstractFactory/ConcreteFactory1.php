<?php

namespace AbstractFactory;

class ConcreteFactory1 extends AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA();
    }

    public function createProductB()
    {
        // TODO: Implement createProductB() method.
    }
}