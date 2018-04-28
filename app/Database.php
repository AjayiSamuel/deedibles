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
		if (null === self::$instance) {
			self::$instance = new self();

		}
		return self::$instance->db;
	}
}
