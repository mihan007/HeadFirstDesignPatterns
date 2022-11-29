<?php

namespace DesignPatterns\strategy;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo "I am flying with rocket\n";
    }
}
