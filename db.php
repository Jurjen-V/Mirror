<?php

class db_mysqli extends mysqli {

	public function query($query_string, $result = "") {
		$result=parent::query($query_string);
		// Foutcontrole
		if (!$result) {
			if (DB_ERRORINFO) {
				echo 'Query error: ' . $this->error;
				echo "<pre>{$query_string}</pre>";
			} else {
				echo '<h1>500: Interne serverfout</h1>';
			}
			die();
		}
		return($result);
	}
}

class db {

	public $mysqli;
	private static $objDB = NULL;

	public static function get() {
		if (empty(self::$objDB)) self::$objDB = new self();
		return(self::$objDB);
	}

	private function __construct() {

		$this->mysqli = new db_mysqli('localhost', 'root', '', 'halloffame');
		if ($this->mysqli->connect_errno) {
			 die('Database-verbinding mislukt: ' . $this->mysqli->connect_error);
		}
		// UTF-8 connectie met database
		$this->mysqli->set_charset('utf8');

	}
}

?>