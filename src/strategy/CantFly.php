<?php

namespace DesignPatterns\strategy;

class CantFly implements FlyBehavior
{
    public function fly()
    {
        echo "I can not fly\n";
    }
}
