<?php

namespace LaravelCapital;

use Illuminate\Support\Facades\Facade;
use Capital\Money as CapitalMoney;

class Money extends Facade
{
	/**
	 * Return the facade accessor.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return CapitalMoney::class;
	}
}