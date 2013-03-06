<?php namespace Kupas;

class Db {
	
	/**
	 * Connection instance.
	 *
	 * @var mysqli
	 */
	protected $connection = null;

	/**
	 * Construct a new database instance.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		$this->connection = new \PDO(
			'mysql:host='.DB_DOMAIN.';dbname='.DB_NAME, 
			DB_USER, 
			DB_PASSWORD
		);
	}
}