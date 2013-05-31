<?php

use Way\Tests\Assert;
use Way\Tests\Should;

class ExampleTest extends PHPUnit_Framework_Testcase
{
	public function testContinuousTesting()
	{
		$name = "Joe";

		Should::equal('Joe', $name);
	}
}
