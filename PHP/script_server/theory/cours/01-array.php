<?php
// Exercices tableaux
$courses = ['HTML' => 80, 'CSS' => 60, 'PHP' => 125, 'JS' => 100, 'Symfony' => 120, 'Design' => 80];

// 1. Ajoutez dans le tableau le cours "Network 40" (sans modifier manuellement le tableau)
// 2. Affichez le nombre de périodes du cours de CSS
// 3. Vérifiez si le cours de Symfony est bien dans le tableau.  Le résultat devrait être la valeur numérique 1
// 4. A l'aide d'une boucle, affichez tous les cours triés par périodes (croissant)
// 5. A l'aide d'une boucle, affichez les cours dont les périodes sont comprises entre 100 et 120
// 6. Affichez la moyenne des périodes et arrondissez le résultat
// 7. Convertissez le tableau associatif en variables et ajoutez 20 périodes au cours HTML.  Affichez le nouveau résultat.

// 1 ------------------------------------------------------------------------------------------------------------

print_r($courses);
print "<br>";
$courses['Newtork'] = 40;
print_r($courses);
print "<hr>";

// 2 ------------------------------------------------------------------------------------------------------------

foreach($courses as $name => $value){
    if($name == 'CSS'){
        print "Le cours de ".$name." est de ".$value." périodes.";
    }
} print "<hr>";

// 3 ------------------------------------------------------------------------------------------------------------

print array_key_exists('Symfony', $courses)."<hr>";

// 4 ------------------------------------------------------------------------------------------------------------

asort($courses);
foreach($courses as $name => $value){
    print $name.' : '.$value.'<br>';
} print "<hr>";

// 5 -------------------------------------------------------------------------------------------------------------

foreach($courses as $name => $value){
    if($value >= 100 && $value <= 120){
        print $name." : ".$value."<br>";
    }
} print "<hr>";

// 6 -------------------------------------------------------------------------------------------------------------

print round(array_sum($courses) / count($courses));
print "<hr>";

// 7 -------------------------------------------------------------------------------------------------------------

print_r($courses);
print "<br>";
extract($courses, EXTR_PREFIX_SAME, "");
$HTML = $HTML + 20;
print "Le cours d'HTML a désormais ".$HTML." périodes.";

/* 
$strings = extract($courses);
// var_dump($strings);
echo 'HTML:'. $HTML.'<br>';
echo 'HTML:'.$HTML + 20;
*/