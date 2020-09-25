<?php

namespace AbstractFactory;

class Client
{
    private $abstractProductA;

    public function __construct(AbstractFactory $factory)
    {
        $this->abstractProductA = $factory->createProductA();
    }

    public function run(): void
    {
        $this->abstractProductA->doStuff();
    }
}