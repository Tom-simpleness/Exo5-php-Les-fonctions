<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<p>exercice 1</p>

<?php
function returnTrue(){
    return true;
}
echo returnTrue();
?>

<p>exercice 2</p>

<?php
$var = 'bonjours kikoo';

function chaine($var){
    return $var;
}
echo chaine($var);
?>

<p>exercice 3</p>

<?php
$var = 'bonjours kikoo ';
$var2 = 'et au revoir php';

function chaine2($var, $var2){
return $var. $var2;
}
echo chaine2($var, $var2);
?>

<p> excercice 4</p>

<?php

$nbre1 = 15;
$nbre2 = 15;

function compar($nbre1, $nbre2){
    if ($nbre1 < $nbre2){
        return "Le premier nombre est plus petit";
    } else if ($nbre1>$nbre2){
        return "Le premier nombre est plus grand";
    } else {
        return "égal";
    }
}
echo compar($nbre1, $nbre2);
?>

<p>exercice 5</p>

<?php

$var = 12 ;
$var2 = 'et au revoir php';

function add($var, $var2){
return $var. $var2;
}
echo add($var, $var2);
?>

<p>exercice 6</p>

<?php

$nom = 'landes';
$prenom = 'tom';
$age = '26';

function add4 ($nom, $prenom, $age){
    return "Bonjours $nom $prenom , tu as $age ans";
}
echo add4($nom, $prenom, $age)

?>

<p>exercice 7</p>

<?php

$age = 12;
$genre = 'masculin';

function add5($age, $genre){
    if ($age >= 18 and $genre = 'masculin'){
        return "Vous êtes un homme et vous êtes majeur";
    } elseif ($age < 18 and $genre = 'masculin'){
        return "Vous êtes un homme et vous êtes mineur";
    } elseif ($age<18 and $genre = 'feminin'){
        return "Vous êtes une femme et vous êtes mineure";
    } else {
        return "Vous êtes un femme et vous êtes majeur";
    }
}

echo add5($age, $genre);

?>

<p>exercice 8</p>

<?php

$var = 1;
$var2 = 2;
$var3 = 3;

function somme($var, $var2, $var3){
    return ($var + $var2 + $var3);
}

echo somme($var,$var2,$var3);

?>



</body>
</html>