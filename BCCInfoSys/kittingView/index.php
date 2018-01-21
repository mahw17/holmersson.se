<?php
    include("../db/functions/allFunctions.php");
    include("functions/combiCheck.php");
    include("functions/ureaCheck.php");

    $sec = "60";
    header("Refresh: $sec;");

    $STN0 = read_STN_data("0");
    $STN1 = read_STN_data("1");
    $STN2 = read_STN_data("2");
    $STN3 = read_STN_data("3");
    $STN4 = read_STN_data("4");
    $STN5 = read_STN_data("5");
    $STN6 = read_STN_data("6");

    $tactTime = read_tactTime();
    $currentTact = read_currentTact();

    $cell4_2 = checkIfCombi($STN1[0]["MFNO"]);
    $cell5_2 = checkIfCombi($STN0[0]["MFNO"]);

    $cell4_3 = checkIfUrea($STN1[0]["MFNO"]);
    $cell5_3 = checkIfUrea($STN0[0]["MFNO"]);

?>

<!DOCTYPE html>
<html class="" lang="en">
    <head>
        <meta charset="utf-8"></meta>
        <title>BCCInfoSys | kittingView</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link href="img/favicon.ico" rel="icon">
        <link href="css/kittingView.css" rel="stylesheet" type="text/css">
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
                            <!-- Row1 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN1</h3>
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN2</h3>
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN3</h3>
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN4</h3>
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN5</h3>
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN16</h3>
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN7</h3>
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN8</h3>
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN9</h3>
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN10</h3>
                                    </div>
                                </div>
                                <!-- Column12 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN11</h3>
                                    </div>
                                </div>
                                <!-- Column13 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>VAGN12</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Row2 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>KOMBI</h3>
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>UREA</h3>
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>STEG1</h3>
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>STEG2</h3>
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>MOTOR</h3>
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>STOL</h3>
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>STEG3</h3>
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>HYTT</h3>
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>STEG4</h3>
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>ENDING</h3>
                                    </div>
                                </div>
                                <!-- Column12 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>STEG5</h3>
                                    </div>
                                </div>
                                <!-- Column13 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>STEG6</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Row3 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP150</h4>
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP20</h4>
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP200</h4>
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP220</h4>
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP30/40</h4>
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP80/90</h4>
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP240</h4>
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP100</h4>
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP260</h4>
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP160</h4>
                                    </div>
                                </div>
                                <!-- Column12 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP280</h4>
                                    </div>
                                </div>
                                <!-- Column13 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h4>OP300/320</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Row4 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>ON LINE</h3>
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col <?=$cell4_2?>">
                                    <a href="functions/get-process.php?kit=KIT1&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT1"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT1"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column3 -->
                                <div class="col <?=$cell4_3?>">
                                    <a href="functions/get-process.php?kit=KIT2&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT2"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT2"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column4 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT3&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT3"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT3"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column5 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT4&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT4"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT4"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column6 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT5&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT5"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT5"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column7 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT16&mfno=<?=$STN3[0]['MFNO']?>&color=<?=$STN3[0]["KIT16"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN3[0]["KIT16"]?>">
                                        <h3><?=$STN3[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column8 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT7&mfno=<?=$STN3[0]['MFNO']?>&color=<?=$STN3[0]["KIT7"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN3[0]["KIT7"]?>">
                                        <h3><?=$STN3[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column9 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT8&mfno=<?=$STN4[0]['MFNO']?>&color=<?=$STN4[0]["KIT8"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN4[0]["KIT8"]?>">
                                        <h3><?=$STN4[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column10 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT9&mfno=<?=$STN4[0]['MFNO']?>&color=<?=$STN4[0]["KIT9"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN4[0]["KIT9"]?>">
                                        <h3><?=$STN4[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column11 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT10&mfno=<?=$STN5[0]['MFNO']?>&color=<?=$STN5[0]["KIT10"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN5[0]["KIT10"]?>">
                                        <h3><?=$STN5[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column12 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT11&mfno=<?=$STN5[0]['MFNO']?>&color=<?=$STN5[0]["KIT11"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN5[0]["KIT11"]?>">
                                        <h3><?=$STN5[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column13 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT12&mfno=<?=$STN6[0]['MFNO']?>&color=<?=$STN6[0]["KIT12"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN6[0]["KIT12"]?>">
                                        <h3><?=$STN6[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Row5 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col col-info">
                                    <div class="cell cell-info">
                                        <h3>NEXT</h3>
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col <?=$cell5_2?>">
                                    <a href="functions/get-process.php?kit=KIT1&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT1"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT1"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column3 -->
                                <div class="col <?=$cell5_3?>">
                                    <a href="functions/get-process.php?kit=KIT2&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT2"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT2"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column4 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT3&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT3"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT3"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column5 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT4&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT4"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT4"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column6 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT5&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT5"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT5"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column7 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT16&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT16"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT16"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column8 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT7&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT7"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT7"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column9 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT8&mfno=<?=$STN3[0]['MFNO']?>&color=<?=$STN3[0]["KIT8"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN3[0]["KIT8"]?>">
                                        <h3><?=$STN3[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column10 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT9&mfno=<?=$STN3[0]['MFNO']?>&color=<?=$STN3[0]["KIT9"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN3[0]["KIT9"]?>">
                                        <h3><?=$STN3[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column11 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT10&mfno=<?=$STN4[0]['MFNO']?>&color=<?=$STN4[0]["KIT10"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN4[0]["KIT10"]?>">
                                        <h3><?=$STN4[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column12 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT11&mfno=<?=$STN4[0]['MFNO']?>&color=<?=$STN4[0]["KIT11"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN4[0]["KIT11"]?>">
                                        <h3><?=$STN4[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column13 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT12&mfno=<?=$STN5[0]['MFNO']?>&color=<?=$STN5[0]["KIT12"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN5[0]["KIT12"]?>">
                                        <h3><?=$STN5[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Row6 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT4&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT4"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT4"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column6 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT5&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT5"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT5"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column7 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT16&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT16"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT16"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column8 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT7&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT7"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT7"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column9 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT8&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT8"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT8"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column10 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT9&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT9"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT9"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column11 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT10&mfno=<?=$STN3[0]['MFNO']?>&color=<?=$STN3[0]["KIT10"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN3[0]["KIT10"]?>">
                                        <h3><?=$STN3[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column12 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT11&mfno=<?=$STN3[0]['MFNO']?>&color=<?=$STN3[0]["KIT11"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN3[0]["KIT11"]?>">
                                        <h3><?=$STN3[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column13 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT12&mfno=<?=$STN4[0]['MFNO']?>&color=<?=$STN4[0]["KIT12"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN4[0]["KIT12"]?>">
                                        <h3><?=$STN4[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Row7 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT16&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT16"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT16"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column8 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT7&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT7"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT7"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column9 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT8&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT8"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT8"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column10 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT9&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT9"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT9"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column11 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT10&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT10"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT10"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column12 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT11&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT11"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT11"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column13 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT12&mfno=<?=$STN3[0]['MFNO']?>&color=<?=$STN3[0]["KIT12"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN3[0]["KIT12"]?>">
                                        <h3><?=$STN3[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Row8 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT8&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT8"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT8"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column10 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT9&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT9"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT9"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column11 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT10&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT10"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT10"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column12 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT11&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT11"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT11"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column13 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT12&mfno=<?=$STN2[0]['MFNO']?>&color=<?=$STN2[0]["KIT12"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN2[0]["KIT12"]?>">
                                        <h3><?=$STN2[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Row9 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col col-description">
                                    <div class="cell not-started">
                                        <h3>NOT STARTED</h3>
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col col-description">
                                    <div class="cell started">
                                        <h3>STARTED</h3>
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT10&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT10"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT10"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column12 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT11&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT11"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT11"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                                <!-- Column13 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT12&mfno=<?=$STN1[0]['MFNO']?>&color=<?=$STN1[0]["KIT12"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN1[0]["KIT12"]?>">
                                        <h3><?=$STN1[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Row10 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col col-description">
                                    <div class="cell finished">
                                        <h3>FINISHED</h3>
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col col-description">
                                    <div class="cell stopped">
                                        <h3>STOPPED</h3>
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column12 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column13 -->
                                <div class="col">
                                    <a href="functions/get-process.php?kit=KIT12&mfno=<?=$STN0[0]['MFNO']?>&color=<?=$STN0[0]["KIT12"]?>">
                                    <div class="cell" style="color:black;background-color:<?=$STN0[0]["KIT12"]?>">
                                        <h3><?=$STN0[0]["MFNO"]?></h3>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Row11 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column12 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column13 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                            </div>
                            <!-- Row12 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col col-tact-info">
                                    <div class="cell cell-info">
                                        <h3>Nästa planerade taktning: <?=$tactTime?></h3>
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column12 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column13 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                            </div>
                            <!-- Row13 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column12 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column13 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                            </div>
                            <!-- Row14 -->
                            <div class="row">
                                <!-- Column1 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column2 -->
                                <div class="col col-tact-info">
                                    <div class="cell cell-info">
                                        <h3>Aktuell takt på linen: <?=$currentTact?></h3>
                                    </div>
                                </div>
                                <!-- Column3 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column4 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column5 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column6 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column7 -->
                                <div class="col col-remove">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column8 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column9 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column10 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column11 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column12 -->
                                <div class="col blank">
                                    <div class="cell">
                                    </div>
                                </div>
                                <!-- Column13 -->
                                <div class="col blank">
                                    <div class="cell">
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
                    <div class="row-after-main">
                        <div class="after-main">
                            <div class="content">
                            </div>
                        </div>
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
                                        <h2>BCCInfoSys - Kitting View</h2>
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
