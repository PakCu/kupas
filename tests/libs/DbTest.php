<?php namespace Tests\Libs;

class DbTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 * Test construct Kupas\Db.
	 */
	public function testConstructDb()
	{
		$db = new \Kupas\Db;

		$connection = new \ReflectionProperty($db, 'connection');
		$connection->setAccessible(true);

		$this->assertInstanceOf('\PDO', $connection->getValue($db));
	}
}