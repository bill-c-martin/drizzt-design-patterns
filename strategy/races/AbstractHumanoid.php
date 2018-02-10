<?php
abstract class AbstractHumanoid {
    protected $move_strategy;
    protected $attack_strategy;

    public function attack() {}
    public function move() {}

    function __construct(moveStrategyInterface $move_strategy, attackStrategyInterface $attack_strategy) {
        $this->move_strategy   = $move_strategy;
        $this->attack_strategy = $attack_strategy;
    }
}
