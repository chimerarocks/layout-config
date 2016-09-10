<?php

namespace ChimeraRocks\LayoutConfig\Providers;

use ChimeraRocks\LayoutConfig\Models\AppConfig;
use ChimeraRocks\LayoutConfig\Models\Layout;
use Illuminate\Support\ServiceProvider;

class LayoutConfigServiceProvider extends ServiceProvider
{
	public function boot()
	{
		/*
		 $this->publishes([
			__DIR__ . '/../../../config/auth.php' => base_path('config/auth.php')
			],'config');
		*/
	
		$this->publishes([
			__DIR__ . '/../../../resources/migrations/' => base_path('database/migrations')
			],'migrations');

		$this->loadViewsFrom(__DIR__ . '/../../../resources/views/layoutconfig', 'layoutconfig');

		require __DIR__ . '/../Routes.php';

		Layout::creating(function($layout) {
			$layout->dirname = md5(time());
		});
	}

	/**
     * Register the service provider.
     *
     * @return void
     */
	public function register()
	{
		$this->app->bind(AppConfig::class, function() {
			return AppConfig::find(1);
		});
	}
}