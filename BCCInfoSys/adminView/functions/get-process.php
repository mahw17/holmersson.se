<?php
include("../../db/functions/allFunctions.php");

if (isset($_GET['stn'])) {
    update_AssemblyStatus($_GET["stn"], $_GET["mfno"], $_GET["color"]);
}

// Redirect to the resultpage
header("Location: ../");
