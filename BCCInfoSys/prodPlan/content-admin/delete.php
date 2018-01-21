<?php
// isset($_GET["delete"]) ? htmlentities($_GET["delete"]) : null;

$res = isset($_GET["delete"]) ? searchInDB(htmlentities($_GET["delete"])) : null;

$MFNO = isset($res[0]['MFNO']) ? htmlentities($res[0]['MFNO']) : null;

?>

<h1>TA BORT TO</h1>

<form method="post" action="incl/sqlite-process.php">
    <fieldset>
        <legend>Ta bort tillverkningsorder</legend>
        <p><label>MFNO<br><input type="number" name="MFNO" value="<?=$MFNO?>" readonly="readonly"></label></p>
        <p><input type="submit" name="action" value="Delete"></p>
    </fieldset>
</form>

<?php
// Get the result as an array with column names as array key_exists
$res = searchInDB("%");
printResultsetToHTMLTable($res);

?>
