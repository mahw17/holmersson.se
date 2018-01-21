<?php
function connectBCCdb()
{

    // Create a DSN (data source name) for the db using it´s fileName

    $fileName = __DIR__ . "/../BCCdb.sqlite";

    // Check if input fileName is existing
    if (file_exists($fileName)) {
        $dsn = "sqlite:$fileName";
    } else {
        echo "The file $fileName does not exist";
        exit();
    }

    // Open the database file and catch the exception if its fails

    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;

    }

    return $db;
}
