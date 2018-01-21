<?php
// include("../../db/functions/allFunctions.php");

function checkIfUrea($mfno)
{

    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "SELECT FUDS FROM ProdPlan WHERE MFNO = '$mfno'";
    $stmt = $db->prepare($sql);

    // execute
    $stmt->execute();
    $resFUDS = $stmt->fetchALL(PDO::FETCH_ASSOC);

    if (strpos($resFUDS[0]["FUDS"], 'T4') !== false) {
        return "";
    } else {
        return "blank";
    }
}
