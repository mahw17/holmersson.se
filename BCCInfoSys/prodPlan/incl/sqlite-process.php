<?php
include("dbfunctions.php");

$MFNO = isset($_POST["MFNO"]) ? htmlentities($_POST["MFNO"]) : null;
$ITDS = isset($_POST["ITDS"]) ? htmlentities($_POST["ITDS"]) : null;
$FUDS = isset($_POST["FUDS"]) ? htmlentities($_POST["FUDS"]) : null;
$MFDATE = isset($_POST["MFDATE"]) ? htmlentities($_POST["MFDATE"]) : null;
$CURR_STN = isset($_POST["CURR_STN"]) ? htmlentities($_POST["CURR_STN"]) : null;

if ($MFNO > 0) {
    $params = [$MFNO, $ITDS, $FUDS, $MFDATE, $CURR_STN];
    $action = isset($_POST["action"]) ? htmlentities($_POST["action"]) : null;

    $db = connectToDatabase();

    if ($action == "Create") {
        $stmt = $db->prepare("INSERT INTO MFNO_STATUS (MFNO, ITDS, FUDS, MFDATE, CURR_STN) VALUES(?, ?, ?, ?, ?)");
        $stmt->execute($params);
    } elseif ($action == "Update") {
        $stmt = $db->prepare("UPDATE MFNO_STATUS SET CURR_STN=$CURR_STN, ITDS='$ITDS', FUDS='$FUDS', MFDATE='$MFDATE' WHERE MFNO=$MFNO");
        $stmt->execute();
    } elseif ($action == "Delete") {
        $stmt = $db->prepare("DELETE FROM MFNO_STATUS WHERE MFNO=$MFNO");
        $stmt->execute();
    }
}
header("Location: " . $_SERVER["HTTP_REFERER"]);
