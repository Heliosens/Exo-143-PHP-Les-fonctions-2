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
echo addTxt('ici', ' et là');

echo '<br>';
// ex 4
function num2 ($nrb1 , $nbr2){
    if($nrb1 > $nbr2){
        return $nrb1 . " est plus grand que " . $nbr2;
    }
    elseif ($nrb1 < $nbr2){
        return $nrb1 . " est plus petit que " . $nbr2;
    }
    else {
        return "les deux nombres sont identiques";
    }
}
echo num2(1, 5);

echo '<br>';
// ex 5
function mixNbrText ($nbr, $txt){
    return $nbr . " " . $txt;
}

echo mixNbrText(5, "cerises");
echo '<br>';
// exo 6
function infoPers ($name, $surname, $age){
    return "Bonjour ". $name . " " . $surname . ", tu as " . $age . " ans";
}

echo infoPers("Bataille", "Sylvie", 46);
echo '<br>';
// ex 7
function genreAge ($age, $genre){
    $result = "Vous êtes ";
    if($genre === "femme"){
        $result .= "une femme et vous êtes ";
    }
    elseif ("homme") {
        $result .= "un homme et vous êtes ";
    }
    else {
        $result .= "indéterminé et vous êtes ";
    }

    if ($age >= 18){
        $result .= "majeur";
    }
    else {
        $result .= "mineur";
    }

    return $result;
}

echo genreAge(46, "femme");

// ex 8
function number3 ($a = 2, $b = 5, $c = 8){
    return $a + $b + $c;
}

