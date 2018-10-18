<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CustomValidator;

class ValidatorServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app['validator']->resolver(function($translator, $data, $rules, $messages) {
			return new CustomValidator($translator, $data, $rules, $messages);
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// $this->app->bind(
		// 	'App\Services\Registrar'
		// );
	}


}
