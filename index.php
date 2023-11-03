<?php
    // This is the application's bootstrap code (index.php)
    
    require "models/databaseModel.php";

    // Define the database connection parameters
    $dbHost = "localhost";
    $dbUser = "username";
    $dbPassword = "password";
    $dbName = "miloDB";

    // Create an instance of the database model and pass the database connection parameters to the model
    $databaseModel = new DatabaseModel($dbHost, $dbUser, $dbPassword, $dbName);