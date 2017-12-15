<?php

namespace Tests\Unit;

use Capital\Money;
use Tests\TestCase;


class MoneyServiceProviderTest extends TestCase
{
	public function testServiceProvider()
	{
		$this->assertIsInjectable( Money::class );
	}
}