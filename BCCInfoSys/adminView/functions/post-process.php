<?php
include("../../db/functions/allFunctions.php");

// Updates next date and time for tact (ex. 2017-10-19 08:15)
if (isset($_POST['tactTime'])) {
    update_TactTime($_POST["tactTime"]);
}

//Updates current tact (ex. 0,75 maskiner per dag)
if (isset($_POST['currentTact'])) {
    update_CurrentTactPace($_POST["currentTact"]);
}

// Redirect to the resultpage
header("Location: ../");
