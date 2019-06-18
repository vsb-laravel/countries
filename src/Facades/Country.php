<?php namespace Vsb\Facades;

use Vsb\Model\Country;
use Illuminate\Support\Facades\Facade;

/**
 * Class ReCaptcha
 * @package Biscolab\ReCaptcha\Facades
 */
class Country extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {

		return 'vsb.country';
	}
}
