<?php

function read_STN_data($stnNumber)
{

    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "SELECT * FROM MFNOStatus WHERE CURR_STN = $stnNumber";
    $stmt = $db->prepare($sql);

    // execute
    $stmt->execute();
    $resStn = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $resStn;
}

function read_prodPlan($mfno)
{

    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "SELECT * FROM ProdPlan WHERE MFNO = $mfno";
    $stmt = $db->prepare($sql);

    // execute
    $stmt->execute();
    $ProdPlan = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $ProdPlan;
}

function read_tactTime()
{

    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "SELECT TactTime FROM Info WHERE InfoType = 'Tact'";
    $stmt = $db->prepare($sql);

    // execute
    $stmt->execute();
    $resTact = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $resTact[0]["TactTime"];
}

function read_currentTact()
{

    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "SELECT TactTime FROM Info WHERE InfoType = 'CurrentTact'";
    $stmt = $db->prepare($sql);

    // execute
    $stmt->execute();
    $resTact = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $resTact[0]["TactTime"];
}
