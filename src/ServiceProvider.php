<?php

namespace LaravelCapital;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Capital\Money;

class ServiceProvider extends LaravelServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton( Money::class, function ( $app ) {
			return new Money();
		} );
	}

	public function provides()
	{
		return [ Money::class ];
	}

}