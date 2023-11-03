<?php
	class DatabaseModel {
		private $dbConnection;

		// Constructor function
		public function __construct($dbHost, $dbUser, $dbPassword, $dbName) {
			// Establish a database connection
			$this->dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
			$this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// Print to the page if connection is successful
			echo "Database Connection: OK";
		}
	}