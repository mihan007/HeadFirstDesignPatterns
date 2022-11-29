<?php

namespace DesignPatterns\strategy;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "Quack\n";
    }
}
