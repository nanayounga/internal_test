<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	protected $domain = 'http://dung.internal_manager.info';
		
	/**
	 * Creates the application.
	 *
	 * @return \Illuminate\Foundation\Application
	 */
	public function createApplication()
	{
		$app = require __DIR__.'/../bootstrap/app.php';

		$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

		return $app;
	}

}
