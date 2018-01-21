<?php

/**
 * connect to database
 *
 * @return ($db) returns database-object
 */

function connectToDatabase()
{

    $fileName = __DIR__ . "/../../db/BCCdb.sqlite";

    // Check if input fileName is existing
    if (file_exists($fileName)) {
        $dsn = "sqlite:$fileName";
    } else {
        echo "The file $fileName does not exist";
        exit();
    }

    $dsn = "sqlite:$fileName"; //2. Skapa en DSN, Data Source Name, för databasen.

    //Open the database file and catch the exception it it fails. If ok it returns $db
    try {
        $db = new PDO($dsn); // 3. Skapa ett nytt databasobjekt och peka det mot filen.
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
}

/**
 * Search within database HIGHEST_BUILDINGS-sqlite
 *
 * @param [$search] search string from user
 *
 * @return $res results in array
 */

function searchInDB($search)
{
    $fileName = __DIR__ . "/../../db/BCCdb.sqlite"; //1. Definera sökvägen till filen (databasen).
    $db = connectToDatabase($fileName);

    //Prepare the SQL statement
    $sql = "SELECT * FROM MFNO_STATUS WHERE  MFNO LIKE '$search' AND CURR_STN != 'FINISHED' ORDER BY MFDATE"; //4.Förbered, prepare, en SQL-sats.
    $stmt = $db->prepare($sql); //4.Förbered, prepare, en SQL-sats. cont...
    // echo "<p>Preparing the SQL-statement:<br><pre>" . htmlentities(print_r($sql, true)) . "</pre>";

        $stmt->execute(); //5. Utför, execute, SQL-satsen
    // echo "<p>Executing using parameters:<br><pre>" . htmlentities(print_r($params, true)) . "</pre>";

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC); //6. Hämta resultatet från SQL-frågan, fetch, svaret kommer i en array.

    return $res;
}

/**
 * print array in table
 *
 */
function printResultsetToHTMLTable($res)
{
    $rows = null;

    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>{$row['MFDATE']}</td>";
        $rows .= "<td>{$row['MFNO']}</td>";
        $rows .= "<td>{$row['ITDS']}</td>";
        $rows .= "<td>{$row['FUDS']}</td>";
        $rows .= "<td>{$row['CURR_STN']}</td>";
        $rows .= "<td><a href='admin.php?page=update&edit={$row['MFNO']}'>Edit</a> | <a href='admin.php?page=delete&delete={$row['MFNO']}'>Del</a></td>";
        $rows .= "</tr>\n";
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Tillverkningsstart</th>
                <th>TO-nummer</th>
                <th>Typ</th>
                <th>Benämning</th>
                <th>Aktuell station</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $rows;?>
        </tbody>
    </table>
    <?php
}
//
//
// if (isset($_POST["create"])) {
//     // Store posted form in parameter !!!Should add check if values seems OK!
//     // $MFNO = $_POST["mfno"];
//     // $MFDATE = $_POST["mfdate"];
//     // $MFSTATUS = $_POST["mfstatus"];
//
//     $params = [$MFNO, $MFDATE, $MFSTATUS];
//
//     // Connect to BCC db
//     $db = connectBCC();
//
//     // Prepare the SQL statement
//     $sql = "INSERT INTO SEQtable VALUES(?, ?, ?)";
//     $stmt = $db->prepare($sql);
//
//     // Excecute the SQL statement within a try-catch
//     try {
//         $stmt->execute($params);
//     } catch (PDOException $e) {
//         echo "<p>Failed to insert a new row, dumping details for debug.</p>";
//         echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
//         echo "<p>The error code: " . $stmt->errorCode();
//         echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
//         throw $e;
//     }
//
//     // Print out the successful results
//     // echo "<p>Inserted the row:<br></p><pre>" . print_r($params, true) . "</pre>";
//     header("Refresh: 0; url='..\insertForm.php'");
// }
