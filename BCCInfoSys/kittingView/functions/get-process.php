<?php
include("../../db/functions/allFunctions.php");

if (isset($_GET['kit'])) {
    update_KitStatus($_GET["kit"], $_GET["mfno"], $_GET["color"]);
}

// Redirect to the resultpage
header("Location: ../");
