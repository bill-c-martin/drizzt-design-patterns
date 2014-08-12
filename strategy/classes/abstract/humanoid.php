<?php
	abstract class Humanoid {
		protected $move_strategy;
		protected $see_strategy;
		protected $attack_strategy;

		public function look() {}
		public function attack() {}
		public function move() {}

		function __construct(moveStrategy $move_strategy, seeStrategy $see_strategy, attackStrategy $attack_strategy) {
			$this->move_strategy   = $move_strategy;
			$this->see_strategy    = $see_strategy;
			$this->attack_strategy = $attack_strategy;
		}
	}