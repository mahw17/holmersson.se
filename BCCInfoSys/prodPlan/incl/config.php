<?php
include("dbfunctions.php");

/**
 * Start up SESSION
 *
 *
 *
 */
$name = substr(preg_replace('/[^a-z\d]/i', '', __DIR__), -30);
session_name($name);
session_start();

/**
 * connect to database
 *
 * @return ($style) returns selected stylesheet
 */
function current_style()
{

    if (isset($_GET['style'])) {
        $style = $_GET['style'];
    } elseif (isset($_POST['style'])) {
        $style = $_POST['style'];
    } else {
        $style = null;
    }

    return $style;
}

/**
 * connect to database
 *
 * @param (stylesheetToCheck) stylesheet to check if selected
 * @return returns "selected" i checked stylesheet is selected otherwise "null"
 */

function check_if_current($stylesheetToCheck)
{
    return basename($_SESSION['stylesheet']) == $stylesheetToCheck ? "selected" : "";
}
