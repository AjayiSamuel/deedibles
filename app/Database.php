<?php
/**
 * Created by PhpStorm.
 * User: lonelytomb
 * Date: 4/28/18
 * Time: 2:11 PM
 */

namespace App;
class Database extends Config
{
	private static $instance;
	private $db;

	public function __construct()
	{
		global $db;
		$db = mysqli_connect('localhost', parent::$db_params['DB_USERNAME'], parent::$db_params['DB_PASSWORD'], parent::$db_params['DB_NAME']);

		if (!$db) {
			die('Connection failed: ' . mysqli_connect_error());
		}
	}

	/**
	 * Creates instance of database connection
	 */
	public static function _db()
	{
		global $db;
		if (null === self::$instance) {
			self::$instance = new self();

		}
		self::$instance = $db;
		return self::$instance;
	}
}
