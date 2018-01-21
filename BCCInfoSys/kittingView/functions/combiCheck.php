<?php
// include("../../db/functions/allFunctions.php");

function checkIfCombi($mfno)
{

    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "SELECT ITDS FROM ProdPlan WHERE MFNO = '$mfno'";
    $stmt = $db->prepare($sql);

    // execute
    $stmt->execute();
    $resITDS = $stmt->fetchALL(PDO::FETCH_ASSOC);

    if (strpos($resITDS[0]["ITDS"], '00C VI') !== false) {
        return "";
    } else {
        return "blank";
    }
}
