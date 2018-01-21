<?php

// Get the selected page, or the default one
$page = (isset($_GET['page'])) ? $_GET['page'] : "read";

is_string($page) or is_null($page)
    or die("Incoming value for page must be a string.");

// Where are the content-files
$dir  = __DIR__ . "/content-admin";
$file = null;



// Array with all valid pages
$multipage = [
    "create"    => "create.php",
    "update"  => "update.php",
    "delete"      => "delete.php",
    "read" => "read.php",
];



// Get the contentfile to include
if (isset($multipage[$page])) {
    $file = $multipage[$page];
} else {
    die("The value of ?page=" . htmlentities($page) . " is not recognized as a valid page.");
}

$title = "BCCprodPlan";
$site_title = "BCC production plan";
$site_slogan = "Beta-version";
include("incl/header.php");
?>

    <aside><?php include("incl/aside-admin.php")?></aside>

            <?php include("$dir/$file")?>
