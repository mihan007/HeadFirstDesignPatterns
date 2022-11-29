<?php

namespace DesignPatterns\strategy;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squak\n";
    }
}
