<?php

namespace Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use LaravelCapital\ServiceProvider;

class TestCase extends AbstractPackageTestCase
{
	/**
	 * Get the service provider class.
	 *
	 * @param \Illuminate\Contracts\Foundation\Application $app
	 *
	 * @return string
	 */
	protected function getServiceProviderClass( $app )
	{
		return ServiceProvider::class;
	}

}