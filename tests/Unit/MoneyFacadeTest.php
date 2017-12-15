<?php


namespace Tests\Unit;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use LaravelCapital\Money;
use Tests\TestCase;

class MoneyFacadeTest extends TestCase
{
	use FacadeTrait;

	protected function getFacadeAccessor()
	{
		return 'Capital\Money';
	}

	protected function getFacadeClass()
	{
		return Money::class;
	}

	protected function getFacadeRoot()
	{
		return \Capital\Money::class;
	}

}