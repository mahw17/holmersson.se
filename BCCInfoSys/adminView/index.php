<?php
    include("../db/functions/allFunctions.php");

    $sec = "60";
    header("Refresh: $sec;");

    $STN0 = read_STN_data("0");
    $STN1 = read_STN_data("1");
    $STN2 = read_STN_data("2");
    $STN3 = read_STN_data("3");
    $STN4 = read_STN_data("4");
    $STN5 = read_STN_data("5");
    $STN6 = read_STN_data("6");

    /*Get ITDS and FUDS parameters from prodplan table*/
    $MFNO1 = read_prodPlan($STN1[0]["MFNO"]);
    $MFNO2 = read_prodPlan($STN2[0]["MFNO"]);
    $MFNO3 = read_prodPlan($STN3[0]["MFNO"]);
    $MFNO4 = read_prodPlan($STN4[0]["MFNO"]);
    $MFNO5 = read_prodPlan($STN5[0]["MFNO"]);
    $MFNO6 = read_prodPlan($STN6[0]["MFNO"]);

    $tactTime = read_tactTime();
    $currentTact = read_currentTact();

?>

<!DOCTYPE html>
<html class="" lang="en">
    <head>
        <meta charset="utf-8"></meta>
        <title>BCCInfoSys | adminView</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link href="img/favicon.ico" rel="icon">
        <link href="css/adminView.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <!-- wrapper around all items on page -->
        <div class="wrap-all">

            <!-- siteheader -->
            <div class="outer-wrap outer-wrap-header">
                <div class="inner-wrap inner-wrap-header">
                    <div class="row-wrap-header">
                        <header class="site-header" role="banner">
                        </header>
                    </div>
                </div>
            </div>

            <!-- main -->
            <div class="outer-wrap outer-wrap-main">
                <div class="inner-wrap inner-wrap-main">
                    <div class="row-wrap-main">
                        <main class="main" role="main">
                            <!-- Column Station1 -->
                            <div class="column-outer">
                                <div class="column-inner">
                                        <!-- Cell-Station number -->
                                    <div class="cell-outer station">
                                        <div class="cell-inner">
                                            <h1>STEG1</h1>
                                        </div>
                                    </div>
                                    <!-- Cell-MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN1[0]["STN1"]?>">
                                            <h2><?=$STN1[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-ITDS -->
                                    <div class="cell-outer itds">
                                        <div class="cell-inner" style="color:<?=$STN1[0]["STN1"]?>">
                                            <h3><?=$MFNO1[0]["ITDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-FUDS -->
                                    <div class="cell-outer fuds">
                                        <div class="cell-inner" style="color:<?=$STN1[0]["STN1"]?>">
                                            <h3><?=$MFNO1[0]["FUDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-KIT MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN0[0]["KIT3"]?>">
                                            <h2><?=$STN0[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-BUTTON NOT STARTED -->
                                    <div class="cell-outer start-button">
                                        <a href="functions/get-process.php?stn=STN1&mfno=<?=$STN1[0]["MFNO"]?>&color=white">
                                            <div class="cell-inner not-started">
                                                <h4>NOT STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STARTED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN1&mfno=<?=$STN1[0]["MFNO"]?>&color=yellow">
                                            <div class="cell-inner started">
                                                <h4>STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON FINISHED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN1&mfno=<?=$STN1[0]["MFNO"]?>&color=green">
                                            <div class="cell-inner finished">
                                                <h4>FINISHED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STOPPED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN1&mfno=<?=$STN1[0]["MFNO"]?>&color=red">
                                            <div class="cell-inner stopped">
                                                <h4>STOPPED</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Column Station2 -->
                            <div class="column-outer">
                                <div class="column-inner">
                                    <!-- Cell-Station number -->
                                    <div class="cell-outer station">
                                        <div class="cell-inner">
                                            <h1>STEG2</h1>
                                        </div>
                                    </div>
                                    <!-- Cell-MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN2[0]["STN2"]?>">
                                            <h2><?=$STN2[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-ITDS -->
                                    <div class="cell-outer itds">
                                        <div class="cell-inner" style="color:<?=$STN2[0]["STN2"]?>">
                                            <h3><?=$MFNO2[0]["ITDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-FUDS -->
                                    <div class="cell-outer fuds">
                                        <div class="cell-inner" style="color:<?=$STN2[0]["STN2"]?>">
                                            <h3><?=$MFNO2[0]["FUDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-KIT MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN1[0]["KIT4"]?>">
                                            <h2><?=$STN1[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-BUTTON NOT STARTED -->
                                    <div class="cell-outer start-button">
                                        <a href="functions/get-process.php?stn=STN2&mfno=<?=$STN2[0]["MFNO"]?>&color=white">
                                            <div class="cell-inner not-started">
                                                <h4>NOT STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STARTED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN2&mfno=<?=$STN2[0]["MFNO"]?>&color=yellow">
                                            <div class="cell-inner started">
                                                <h4>STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON FINISHED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN2&mfno=<?=$STN2[0]["MFNO"]?>&color=green">
                                            <div class="cell-inner finished">
                                                <h4>FINISHED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STOPPED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN2&mfno=<?=$STN2[0]["MFNO"]?>&color=red">
                                            <div class="cell-inner stopped">
                                                <h4>STOPPED</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Column Station3 -->
                            <div class="column-outer">
                                <div class="column-inner">
                                    <!-- Cell-Station number -->
                                    <div class="cell-outer station">
                                        <div class="cell-inner">
                                            <h1>STEG3</h1>
                                        </div>
                                    </div>
                                    <!-- Cell-MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN3[0]["STN3"]?>">
                                            <h2><?=$STN3[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-ITDS -->
                                    <div class="cell-outer itds">
                                        <div class="cell-inner" style="color:<?=$STN3[0]["STN3"]?>">
                                            <h3><?=$MFNO3[0]["ITDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-FUDS -->
                                    <div class="cell-outer fuds">
                                        <div class="cell-inner" style="color:<?=$STN3[0]["STN3"]?>">
                                            <h3><?=$MFNO3[0]["FUDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-KIT MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN2[0]["KIT7"]?>">
                                            <h2><?=$STN2[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-BUTTON NOT STARTED -->
                                    <div class="cell-outer start-button">
                                        <a href="functions/get-process.php?stn=STN3&mfno=<?=$STN3[0]["MFNO"]?>&color=white">
                                            <div class="cell-inner not-started">
                                                <h4>NOT STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STARTED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN3&mfno=<?=$STN3[0]["MFNO"]?>&color=yellow">
                                            <div class="cell-inner started">
                                                <h4>STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON FINISHED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN3&mfno=<?=$STN3[0]["MFNO"]?>&color=green">
                                            <div class="cell-inner finished">
                                                <h4>FINISHED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STOPPED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN3&mfno=<?=$STN3[0]["MFNO"]?>&color=red">
                                            <div class="cell-inner stopped">
                                                <h4>STOPPED</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Column Station4 -->
                            <div class="column-outer">
                                <div class="column-inner">
                                    <!-- Cell-Station number -->
                                    <div class="cell-outer station">
                                        <div class="cell-inner">
                                            <h1>STEG4</h1>
                                        </div>
                                    </div>
                                    <!-- Cell-MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN4[0]["STN4"]?>">
                                            <h2><?=$STN4[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-ITDS -->
                                    <div class="cell-outer itds">
                                        <div class="cell-inner" style="color:<?=$STN4[0]["STN4"]?>">
                                            <h3><?=$MFNO4[0]["ITDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-FUDS -->
                                    <div class="cell-outer fuds">
                                        <div class="cell-inner" style="color:<?=$STN4[0]["STN4"]?>">
                                            <h3><?=$MFNO4[0]["FUDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-KIT MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN3[0]["KIT9"]?>">
                                            <h2><?=$STN3[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-BUTTON NOT STARTED -->
                                    <div class="cell-outer start-button">
                                        <a href="functions/get-process.php?stn=STN4&mfno=<?=$STN4[0]["MFNO"]?>&color=white">
                                            <div class="cell-inner not-started">
                                                <h4>NOT STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STARTED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN4&mfno=<?=$STN4[0]["MFNO"]?>&color=yellow">
                                            <div class="cell-inner started">
                                                <h4>STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON FINISHED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN4&mfno=<?=$STN4[0]["MFNO"]?>&color=green">
                                            <div class="cell-inner finished">
                                                <h4>FINISHED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STOPPED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN4&mfno=<?=$STN4[0]["MFNO"]?>&color=red">
                                            <div class="cell-inner stopped">
                                                <h4>STOPPED</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Column Station5 -->
                            <div class="column-outer">
                                <div class="column-inner">
                                    <!-- Cell-Station number -->
                                    <div class="cell-outer station">
                                        <div class="cell-inner">
                                            <h1>STEG5</h1>
                                        </div>
                                    </div>
                                    <!-- Cell-MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN5[0]["STN5"]?>">
                                            <h2><?=$STN5[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-ITDS -->
                                    <div class="cell-outer itds">
                                        <div class="cell-inner" style="color:<?=$STN5[0]["STN5"]?>">
                                            <h3><?=$MFNO5[0]["ITDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-FUDS -->
                                    <div class="cell-outer fuds">
                                        <div class="cell-inner" style="color:<?=$STN5[0]["STN5"]?>">
                                            <h3><?=$MFNO5[0]["FUDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-KIT MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN4[0]["KIT11"]?>">
                                            <h2><?=$STN4[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-BUTTON NOT STARTED -->
                                    <div class="cell-outer start-button">
                                        <a href="functions/get-process.php?stn=STN5&mfno=<?=$STN5[0]["MFNO"]?>&color=white">
                                            <div class="cell-inner not-started">
                                                <h4>NOT STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STARTED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN5&mfno=<?=$STN5[0]["MFNO"]?>&color=yellow">
                                            <div class="cell-inner started">
                                                <h4>STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON FINISHED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN5&mfno=<?=$STN5[0]["MFNO"]?>&color=green">
                                            <div class="cell-inner finished">
                                                <h4>FINISHED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STOPPED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN5&mfno=<?=$STN5[0]["MFNO"]?>&color=red">
                                            <div class="cell-inner stopped">
                                                <h4>STOPPED</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Column Station6 -->
                            <div class="column-outer">
                                <div class="column-inner">
                                    <!-- Cell-Station number -->
                                    <div class="cell-outer station">
                                        <div class="cell-inner">
                                            <h1>STEG6</h1>
                                        </div>
                                    </div>
                                    <!-- Cell-MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN6[0]["STN6"]?>">
                                            <h2><?=$STN6[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-ITDS -->
                                    <div class="cell-outer itds">
                                        <div class="cell-inner" style="color:<?=$STN6[0]["STN6"]?>">
                                            <h3><?=$MFNO6[0]["ITDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-FUDS -->
                                    <div class="cell-outer fuds">
                                        <div class="cell-inner" style="color:<?=$STN6[0]["STN6"]?>">
                                            <h3><?=$MFNO6[0]["FUDS"]?></h3>
                                        </div>
                                    </div>
                                    <!-- Cell-KIT MFNO -->
                                    <div class="cell-outer mfno">
                                        <div class="cell-inner" style="color:<?=$STN5[0]["KIT12"]?>">
                                            <h2><?=$STN5[0]["MFNO"]?></h2>
                                        </div>
                                    </div>
                                    <!-- Cell-BUTTON NOT STARTED -->
                                    <div class="cell-outer start-button">
                                        <a href="functions/get-process.php?stn=STN6&mfno=<?=$STN6[0]["MFNO"]?>&color=white">
                                            <div class="cell-inner not-started">
                                                <h4>NOT STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STARTED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN6&mfno=<?=$STN6[0]["MFNO"]?>&color=yellow">
                                            <div class="cell-inner started">
                                                <h4>STARTED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON FINISHED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN6&mfno=<?=$STN6[0]["MFNO"]?>&color=green">
                                            <div class="cell-inner finished">
                                                <h4>FINISHED</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Cell-BUTTON STOPPED -->
                                    <div class="cell-outer">
                                        <a href="functions/get-process.php?stn=STN6&mfno=<?=$STN6[0]["MFNO"]?>&color=red">
                                            <div class="cell-inner stopped">
                                                <h4>STOPPED</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>

            <!-- after-main -->
            <div class="outer-wrap outer-wrap-after-main">
                <div class="inner-wrap inner-wrap-after-main">

                    <div class="after-main-column">
                        <h3><?=$tactTime?></h3>
                        <form method="post" action="functions/post-process.php">
                            <fieldset>
                                <p><input type="text" name="tactTime" placeholder="åååå-mm-dd hh:mm"></p>
                                <p><input type="submit" name="update" value="Uppdatera nästa takttid"></p>
                            </fieldset>
                        </form>
                    </div>

                    <div class="after-main-column">
                        <h3><?=$currentTact?></h3>
                        <form method="post" action="functions/post-process.php">
                            <fieldset>
                                <p><input type="text" name="currentTact" placeholder="enheter per dag"></p>
                                <p><input type="submit" name="update" value="Uppdatera takt"></p>
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>

            <!-- sitefooter -->
            <div class="outer-wrap outer-wrap-footer" role="contentinfo">
                <div class="inner-wrap inner-wrap-footer">
                    <div class="row-footer">
                        <div class="footer">
                            <div class="columns footer-column-wrapper">

                                <div class="column footer-column">
                                    <div class="footer-column-x footer-column-1 block">
                                        <h2>BCCInfoSys - Admin View</h2>
                                    </div>
                                </div>

                                <div class="column footer-column">
                                    <div class="footer-column-x footer-column-2 block">
                                        <img class="dynapac-logo-large" alt="dynapac-logo" src="img/dynapac-logo.png">
                                    </div>
                                </div>

                            </div>

                            <div class="block site-footer">
                                <p>Copyright © 2012-2016&nbsp;<a href="https://mikaelroos.se">Mikael Roos</a> (mos@dbwebb.se)</p>
                                <ul>
                                    <li><a href="http://www.student.bth.se/~mahw17/dbwebb-kurser/design/me/anax-flat/htdocs/license">License</a></li>
                                    <li><a href="http://www.student.bth.se/~mahw17/dbwebb-kurser/design/me/anax-flat/htdocs/cookies">Cookies</a></li>
                                    <li><a href="http://www.student.bth.se/~mahw17/dbwebb-kurser/design/me/anax-flat/htdocs/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
