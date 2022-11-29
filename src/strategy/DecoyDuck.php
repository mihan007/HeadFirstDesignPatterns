<?php

namespace DesignPatterns\strategy;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }
}
