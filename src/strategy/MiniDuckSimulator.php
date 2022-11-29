<?php

namespace DesignPatterns\strategy;

class MiniDuckSimulator
{
    public function run()
    {
        $mallard = new MallardDuck();
        $rubberDuckie = new RubberDuck(new CantFly(), new Squeak());
        $decoy = new DecoyDuck();
        $model = new ModelDuck();

        $mallard->performQuack();
        $rubberDuckie->performQuack();
        $decoy->performQuack();

        $model->performFly();
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();
    }
}
