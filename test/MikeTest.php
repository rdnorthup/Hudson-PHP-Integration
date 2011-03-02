<?php

class MikeTest extends PHPUnit_Framework_TestCase {

	public function setUp() {}
	public function tearDown() {}
	public function testMikeIsValid() {
		// test to ensure that Mike is true
		$mike = true;
		$this->assertTrue($mike !== false);
	}
}

?>
