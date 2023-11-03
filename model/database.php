<?php
    class DatabaseModel {
        $private $dbConnection;

        public function __construct($dbHost, $dbUser, $dbPassword, $dbName) {
            // Establish a database connection
            $this->dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }