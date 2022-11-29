<?php

namespace DesignPatterns\strategy;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "I am flying with wings\n";
    }
}
