<?php
include("functions/readFunctions.php");
include("functions/updateFunctions.php");
include("functions/dbFunctions.php");
include("functions/getMFNOcsv.php");

$target_dir = "../db/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (file_exists($target_file)) {
    // chmod($target_file,0755); //Change the file permissions if allowed
    unlink($target_file); //remove the file
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    updateBCCprodplan();
}
?>


<!DOCTYPE html>
<html>
<body>

<form action="uploadCSV.php" method="post" enctype="multipart/form-data">
    Select CSV-file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
<hr>

<h1>Filen måste heta BCC_prodPlan.CSV</h1>

</body>
</html>
