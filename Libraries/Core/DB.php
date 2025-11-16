<?php
class DB {
	private static $DBConnection;
	public static function connectDB() {
		if (self::$DBConnection === null) {
			$connectionString = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
			self::$DBConnection = new PDO($connectionString,DB_USER,DB_PASSWORD);
			self::$DBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$DBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			}
		return self::$DBConnection;
		}
	}
?>
