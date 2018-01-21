<?php

/**
* Updates current kitting status (color) in database (BCCdb.sqlite) with regard on kitting wagon (kit) and manufacturing order (mfno)
*
* @param $kit - kitting wagon to be updated, $mfno - manufacturing number, $color(is the status) - white, yellow, green or red
*/

function update_KitStatus($kit, $mfno, $color)
{

    // Toggle to the next color, white -> yellow, yellow -> green, green -> red.
    switch ($color) {
        case 'white':
            $color = "yellow";
            break;

        case 'yellow':
            $color = "green";
            break;

        case 'green':
            $color = "red";
            break;

        default:
            $color = "white";
            break;
    }
    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare and excecute the SQL statement to update the status on kit wagon
    $sql = "UPDATE MFNOStatus SET $kit='$color' WHERE MFNO = '$mfno'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}

//---------------------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------------------

/**
 * Updates current assembly status (color) in database (BCCdb.sqlite) with regard on station (stn) and manufacturing order (mfno)
 *
 * @param $stn - station to be updated, $mfno - manufacturing number, $color(is the status) - white, yellow, green or red
 */
function update_AssemblyStatus($stn, $mfno, $color)
{
    // Connect to BCCdb.sqlite
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "UPDATE MFNOStatus SET $stn='$color' WHERE MFNO = '$mfno'";
    $stmt = $db->prepare($sql);

    // Excecute the SQL statement
    $stmt->execute();

    // Check if all stations is green, function in module sqlUpdateTact
    checkIfTactReady();
}

//---------------------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------------------

/**
* Updates next date and time to tact
*
* @param $tactTime - the new time to be set as the next tact time.
*/

function update_TactTime($tactTime)
{
    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "UPDATE Info SET TactTime='$tactTime' WHERE InfoType='Tact'";
    $stmt = $db->prepare($sql);

    // Excecute the SQL statement
    $stmt->execute();

    header("Refresh: 0; url='BCCadmin.php'");
}

//---------------------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------------------

/**
* Updates the tact 'pace', units per day
*
* @param $currentTact - the new tact pace to be set
 */
function update_CurrentTactPace($currentTact)
{
    // Connect to BCC db
    $db = connectBCCdb();

    // Prepare the SQL statement
    $sql = "UPDATE Info SET TactTime='$currentTact' WHERE InfoType='CurrentTact'";
    $stmt = $db->prepare($sql);

    // Excecute the SQL statement
    $stmt->execute();

    header("Refresh: 0; url='BCCadmin.php'");
}

//---------------------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------------------
