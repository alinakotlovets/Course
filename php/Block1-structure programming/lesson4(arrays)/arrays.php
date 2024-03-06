<?php

$typevehicle = ['bus', 'car', 'plane'];

$typevehicle[0] = 'sheep'; // zamina

$typevehicle[] = 'bus'; // add element

echo array_pop($typevehicle); // delete last element
echo '<br/>' . array_shift($typevehicle); // delete first element

unset($typevehicle[2]); // deleted array or element
//var_dump(isset($typevehicle[2])); // chek elements

/* var_dump($typevehicle);
print_r($typevehicle); */

echo '<br/>' . count($typevehicle); // kilkist elementiv

echo '<br/>';
print_r($typevehicle);
?>

<?php

$language = [
    'php' => 2,
    'php2' => null
];

$newlanguage = 'c++';
$language[$newlanguage] = 6;

echo '<br/>';
print_r($language);

var_dump(array_key_exists('php2', $language));
var_dump(isset($language['php2'])); //якщо ключ null виведе false

?>
