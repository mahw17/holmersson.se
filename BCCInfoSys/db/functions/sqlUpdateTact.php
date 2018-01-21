<?php

function checkIfTactReady()
{
    $STN1 = read_STN_data("1");
    $STN2 = read_STN_data("2");
    $STN3 = read_STN_data("3");
    $STN4 = read_STN_data("4");
    $STN5 = read_STN_data("5");
    $STN6 = read_STN_data("6");

    if ($STN1[0]["STN1"] == "green" and $STN2[0]["STN2"] == "green" and $STN3[0]["STN3"] == "green" and $STN4[0]["STN4"] == "green" and $STN5[0]["STN5"] == "green" and $STN6[0]["STN6"] == "green") {
        update_Tact();
    }
}

function update_Tact()
{
    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "UPDATE MFNOStatus SET CURR_STN='FINISHED' WHERE CURR_STN=6";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $sql = "UPDATE MFNOStatus SET CURR_STN=6 WHERE CURR_STN=5";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $sql = "UPDATE MFNOStatus SET CURR_STN=5 WHERE CURR_STN=4";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $sql = "UPDATE MFNOStatus SET CURR_STN=4 WHERE CURR_STN=3";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $sql = "UPDATE MFNOStatus SET CURR_STN=3 WHERE CURR_STN=2";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $sql = "UPDATE MFNOStatus SET CURR_STN=2 WHERE CURR_STN=1";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $sql = "UPDATE MFNOStatus SET CURR_STN=1 WHERE CURR_STN=0";
    $stmt = $db->prepare($sql);
    $stmt->execute();


    //Get the next in line from ProdPlan table (STN0)

    //Get mfno of the machine that has come up on the line now STN1
    $sql = "SELECT MFNO FROM MFNOStatus WHERE CURR_STN=1";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchALL(PDO::FETCH_ASSOC);
    $mfno = $res[0]["MFNO"];

    //Get mfdate of the machine that has come up on the line now STN1
    $sql = "SELECT MFDATE FROM ProdPlan WHERE MFNO=$mfno";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchALL(PDO::FETCH_ASSOC);
    $mfdate = $res[0]["MFDATE"];

    //Get mfno of the machine that will be next on the line STN0
    $sql = "SELECT MFNO FROM ProdPlan WHERE MFDATE > '$mfdate' ORDER BY MFDATE ASC;";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchALL(PDO::FETCH_ASSOC);
    $mfno_new = $res[0]["MFNO"];

    //Add STN0 mfno in MFNOStatus table
    $params = [$mfno_new, '0'];
    $sql = "INSERT INTO MFNOStatus (MFNO, CURR_STN) VALUES(?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    // header("Refresh: 0; url='BCCadmin.php'");
}
