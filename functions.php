<?php

function mijnRekenMachine($num01, $oper, $num02) 
{
    $sum;
    switch ($oper) {

        case "plus":
            $sum = $num01 + $num02;
            break; // door de break ervoor te doen zeg je dat je de case add wilt eindigen
        
        case "min":
            $sum = $num01 - $num02;
            break;  
        
        case "deel":
            $sum = $num01 / $num02;
            break;
            
        case "keer":
            $sum = $num01 * $num02;
            break;
// dit is er voor de zekerheid als er toch nog iets fout iets, of gaat gebeuren dat er toch iets bij staat.          
        default: 
            $sum = "oeps! Er ging iets fout.";
            break;    
    }
    return $sum;
}

//we gebruiken ook 'Super globals'
//gebruiken we als iets wilt maken tijdens php en eigenlijk wilt gebruiken voor een andere page
//zodat het goed met elkaar correspondeerd 

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];


//uiteindelijk wil ik de resultaten laten tonen doormiddel van een echo
echo "Resultaat: " . mijnRekenMachine($num01, $oper, $num02);