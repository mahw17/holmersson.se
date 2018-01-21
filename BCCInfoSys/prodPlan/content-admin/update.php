<?php
$res = isset($_GET["edit"]) ? searchInDB(htmlentities($_GET["edit"])) : null;
?>

<h1>UPPDATERA KÖRPLAN</h1>
<form method="post" action="incl/sqlite-process.php">
    <fieldset>
        <legend>Uppdatera körplan</legend>
        <p><label>MFNO<br><input type="number" name="MFNO" value="<?=$res[0]['MFNO']?>"></label></p>
        <p><label>ITDS<br><input type="text" name="ITDS" value="<?=$res[0]['ITDS']?>"></label></p>
        <p><label>FUDS<br><input type="text" name="FUDS" value="<?=$res[0]['FUDS']?>"></label></p>
        <p><label>MFDATE<br><input type="datetime" name="MFDATE" value="<?=$res[0]['MFDATE']?>"></label></p>
        <p><label>CURR_STN<br><input type="number" name="CURR_STN" value="<?=$res[0]['CURR_STN']?>"></label></p>
        <p><input type="submit" name="action" value="Update"></p>
    </fieldset>
</form>

<?php
// Get the result as an array with column names as array key_exists
$res = searchInDB("%");
printResultsetToHTMLTable($res);

?>
