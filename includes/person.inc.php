<?php

// NOTE : It is possible to put multiple classes in one document, It's not the best way to do things but just for excercise we are doing this

class Person {
	private $first = "King";
	private $last = "Joy";
	private $age = 28;

	public function owner() {
		$a = $this->first;
		return $a;

	}

}

class Pet {
	public function owner() {
		$a = " Hi There!";
		return $a;

	}
}