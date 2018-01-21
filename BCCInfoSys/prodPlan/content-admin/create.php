<h1>LÄGG TILL TO</h1>
<form method="post" action="incl/sqlite-process.php">
    <fieldset>
        <legend>NY TO</legend>
        <p><label>Tillverkningsstart<br><input type="datetime" name="MFDATE"></label></p>
        <p><label>TO-nummer<br><input type="number" name="MFNO"></label></p>
        <p><label>Typ<br><input type="text" name="ITDS"></label></p>
        <p><label>Benämning<br><input type="text" name="FUDS"></label></p>
        <p><label>Station<br><input type="number" name="CURR_STN"></label></p>
        <p><input type="submit" name="action" value="Create"></p>
    </fieldset>
</form>

<br>

<?php
// Get the result as an array with column names as array key_exists
$res = searchInDB("%");
printResultsetToHTMLTable($res);
?>
