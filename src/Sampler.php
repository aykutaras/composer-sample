<?php namespace AykutAras\ComposerSample;

class Sampler
{
	protected $name;

	public function __construct($name = "Jack") 
	{
		$this->name = $name;
	}

	public function Welcome() 
	{
		return "Welcome home $this->name";
	}
}
