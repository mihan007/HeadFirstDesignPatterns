<?php

namespace DesignPatterns\strategy;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "I can not quack\n";
    }
}
