<?php
  require "models/databaseModel.php";

  class DatabaseController {
		private $dbModel;

		public function __construct() {
			// Read the database connection parameters from the config.php file
			$config = require "config.php";

			$dbHost = $config["dbHost"];
			$dbUser = $config["dbUser"];
			$dbPassword = $config["dbPassword"];
			$dbName = $config["dbName"];

			// Initialize the database model
			//$this->dbModel = new DatabaseModel("localhost", "username", "password", "miloDB");
			$this->dbModel = new DatabaseModel($dbHost, $dbUser, $dbPassword, $dbName);
		}

		// TODO: This is a test function, remove eventually
		public function test() {
			echo "This is a test function";
		}

		/*
		public function getAllTableData($tableName) {
			try {
				// Define the SQL statement to select all rows from the specified table
				$sql = "SELECT * FROM $tableName";

				// Execute the SQL statement
				$statement = $this->dbModel->executeQuery($sql);

				// Fetch all rows as an associative array
				$data = $statement->fetchAll(PDO::FETCH_ASSOC);

				// Return the data
				return $data;
			} catch (PDOException $e) {
				// Handle database errors here
				echo "Error: " . $e->getMessage();
				return false;	// or, handle the error as needed
			}
		}
		*/

		/*
		public function createTable() {
			try {
				// Define the SQL statement to create a table
				$sql = "CREATE TABLE IF NOT EXISTS test_table (
					id INT AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(255) NOT NULL,
					email VARCHAR(255) NOT NULL
				)";

				// Execute the SQL statement
				$this->dbModel->executeQuery($sql);

				// Output a success message or redirect to another page
				echo "Table created successfully";
			} catch (PDOException $e) {
				// Handle database errors here
				echo "Error: " . $e->getMessage();
			}
		}
		*/
	}