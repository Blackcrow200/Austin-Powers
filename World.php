<?php

class World {
	private $humans = [];
	public static gravity = 9.81;
	public __construct() {
	 array_push($this->humans, new Denfer());
	}
}