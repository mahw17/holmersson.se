<?php
/**
*
*/

function csv_to_array($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename)) {
        return false;
    }

    $header = null;
    $data = array();

    if (($handle = fopen($filename, 'r')) !== false) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
            if (!$header) {
                $header = $row;
            } else {
                $data[] = array_combine($header, $row);
            }
        }

        fclose($handle);
        return $data;
    }
}

// include "connectBCCdb.php";

function get_MFNOdb_data()
{

    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "SELECT * FROM MFNO_STATUS";
    $stmt = $db->prepare($sql);

    // execute
    $stmt->execute();
    $resMFNO = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $resMFNO;
}

function updateBCCprodplan()
{

    $fileName = __DIR__ . "/../db/BCC_prodPlan.CSV";

    $data1 = csv_to_array($fileName);

    // echo print_r($data1, true);
    $data2 = get_MFNOdb_data();
    $db = connectBCCdb();

    foreach ($data1 as $key1 => $S1) {
        // echo print_r($data1);
        $checker = true;

        foreach ($data2 as $key2 => $S2) {

            if ($data1[$key1]['MFNO'] == $data2[$key2]['MFNO']) {
                $test1 = $data1[$key1]['MFDATE'];
                $test2 = $data1[$key1]['MFNO'];

                $sql = "UPDATE MFNO_STATUS SET MFDATE='$test1' WHERE MFNO='$test2'";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $checker = false;
                break;
            }
        }

        if ($checker) {
            $params = [$data1[$key1]['MFNO'], $data1[$key1]['ITDS'], $data1[$key1]['FUDS'], $data1[$key1]['MFDATE']];
            $sql = "INSERT INTO MFNO_STATUS (MFNO, ITDS, FUDS, MFDATE) VALUES(?, ?, ?, ?)";
            $stmt = $db->prepare($sql);
            $stmt->execute($params);
        }
    }
}
