<?php

require 'vendor/autoload.php';

use \Ryanhs\Dependency\Dependency;

class Test extends PHPUnit_Framework_TestCase{
	
	
	public function test_clear(){
		$d = new Dependency;
		
		$d->a = 'a';
		$d->b = 'b1';
		$d->c = 321;
		$d->d = new Dependency;
		$d->e = 1.2;
		$d->f = true;
		
		$this->assertEquals('a', $d->a);
		$this->assertEquals('b1', $d->b);
		$this->assertEquals(321, $d->c);
		$this->assertInstanceOf('\Ryanhs\Dependency\Dependency', $d->d);
		$this->assertInternalType('float', $d->e);
		$this->assertTrue($d->f);
		$this->assertFalse(!$d->f);
	}
	
}
