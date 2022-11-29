<?php

namespace DesignPatterns\strategy;

class RubberDuck extends Duck
{
    /**
     * @param  FlyBehavior  $fb
     * @param  QuackBehavior  $qb
     */
    public function __construct(FlyBehavior $fb, QuackBehavior $qb)
    {
        $this->flyBehavior = $fb;
        $this->quackBehavior = $qb;
    }
}
