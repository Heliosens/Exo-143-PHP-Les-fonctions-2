<?php
// ex 1
function yes () {
    return true;
}

// ex 2
function repeat ($txt) {
    return $txt;
}

// ex 3
function addTxt ($txt1, $txt2) {
    return $txt1 . $txt2;
}

// ex 4
function num2 ($nrb1 , $nbr2){
    if($nrb1 > $nbr2){
        echo $nrb1 . " est plus grand que " . $nbr2;
    }
    elseif ($nrb1 < $nbr2){
        echo $nrb1 . " est plus petit que " . $nbr2;
    }
    else {
        echo "les deux nombres sont identiques";
    }
}

// ex 5

