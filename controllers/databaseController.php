<?php
  require "models/databaseModel.php";

  class DatabaseController {
		private $dbModel;

		public function __construct() {
			// Initialize the database model
			$this->dbModel = new DatabaseModel("localhost", "username", "password", "miloDB");
		}

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
	}