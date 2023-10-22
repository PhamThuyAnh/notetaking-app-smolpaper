<?php

class Database
{
	private string $db_host = "localhost";
	private string $db_name = "smol-paper-database";
	private string $db_user = "root";
	private string $db_pass = "";

	protected function connect(): PDO
	{
		$dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;
		$attribute_opt = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => FALSE
		];
		$pdo = NULL;
		try {
			$pdo = new PDO($dsn, $this->db_user, $this->db_pass, $attribute_opt);
		} catch (PDOException) {
			errorMessage("Database Connection Error!");
		}
		return $pdo;
	}
}