<?php

// NOTE : It is possible to put multiple classes in one document, It's not the best way to do things but just for excercise we are doing this

class Person {
	protected $first = "King";
	private $last = "Joy";
	private $age = 28;
}

class Pet extends Person {
	public function owner() {
		$a = $this->first;
		return $a;

	}
}