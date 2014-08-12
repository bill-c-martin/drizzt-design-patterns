<?php
	abstract class Humanoid {
		protected $move_strategy;
		protected $attack_strategy;

		public function attack() {}
		public function move() {}

		function __construct(moveStrategy $move_strategy, attackStrategy $attack_strategy) {
			$this->move_strategy   = $move_strategy;
			$this->attack_strategy = $attack_strategy;
		}
	}