<?php
function connectMovexdb()
{

    // Create a DSN (data source name) for the db using it´s fileName
    $dsn = "odbc:dBMovex";
    $db = new PDO($dsn);

}

connectMovexdb();
