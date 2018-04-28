<?php
/**
 * Created by PhpStorm.
 * User: lonelytomb
 * Date: 4/28/18
 * Time: 2:42 PM
 */

namespace App;


class Sessions
{

	/**
	 * Initialize Session
	 * @return void
	 */
	public static function init()
	{
		session_start(
			[
				'name' => 'deedibles',
				'cookie_httponly' => 1,
				"use_strict_mode" => 1,
			]
		);
		session_regenerate_id();
	}

	/**
	 * Destroy Session
	 * @return void
	 */
	public static function destroy()
	{
		session_unset();
		session_destroy();
	}
}