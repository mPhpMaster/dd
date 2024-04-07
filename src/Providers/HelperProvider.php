<?php
/** @noinspection PhpIllegalPsrClassPathInspection */

/*
 * Copyright © 2024. mPhpMaster(https://github.com/mPhpMaster) All rights reserved.
 */

namespace MPhpMaster\dd\Providers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Schema\Builder;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

/**
 * Class HelperProvider
 *
 * @package MPhpMaster\dd\Providers
 */
class HelperProvider extends ServiceProvider
{
	public function register()
	{
		$this->registerMacros();
	}

	/**
	 *
	 */
	public function registerMacros()
	{

	}

	/**
	 * Bootstrap services.
	 *
	 * @param Router $router
	 *
	 * @return void
	 */
	public function boot(Router $router)
	{
		// Builder::defaultStringLength(191);
		// Schema::defaultStringLength(191);
	}

	/**
	 * @return array
	 */
	public function provides()
	{
		return [];
	}
}
