<?php namespace AykutAras\ComposerSample\Test;

use AykutAras\ComposerSample\Sampler;

class SamplerTest extends \PHPUnit_Framework_TestCase
{
	public function test_should_welcome_jack() 
	{
		$sampler = new Sampler();
		$welcome = $sampler->Welcome();
		$this->assertEquals($welcome, "Welcome home Jack");
	}
}
