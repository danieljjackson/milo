<?php
    // This is the application's bootstrap code (index.php)
    
    //require "models/databaseModel.php";

    // Define the database connection parameters
    //$dbHost = "localhost";
    //$dbUser = "username";
    //$dbPassword = "password";
    //$dbName = "miloDB";

    // Create an instance of the database model and pass the database connection parameters to the model
    //$databaseModel = new DatabaseModel($dbHost, $dbUser, $dbPassword, $dbName);

    // Include the DatabaseController
    // The controller will pass data to the DatabaseModel to connect to the database
    require "controllers/DatabaseController.php";

    // Create an instance of the DatabaseController
    $databaseController = new DatabaseController();

    // Call the test method in the DatabaseController
    $databaseController->test();