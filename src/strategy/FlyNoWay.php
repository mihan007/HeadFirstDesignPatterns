<?php

namespace DesignPatterns\strategy;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I can not fly\n";
    }
}
