<?php

/* booleans */

$complete = 1;
//true = n-numbers;
// false = [0, -0, 0.0, -0.0, '', '0', [], null];

if($complete) {
    echo 1;
} else {
    echo 2;
}

?>

<?php

/* integer */

$x = 200_000; // 20000
$x = '200_000'; // 200_000
$x = (int) '200_000'; //200

?>

<?php

/* Float */

$x = floor((0.1+0.2)*10); // заокруглення до меншого
$y = ceil((0.1+0.2)*10);  // заокруглення до більшого
echo '<br/>' . $x;
echo '<br/>' . $y;

?>

<?php

$first = 'Maks';
$last = 'SVV';

$name = $first . ' ' . $last;
$name [-2] = 'a'; // заміна другої букви з кінця

echo '<br/>' . $name;

// Herodoc
$x = 1;
$text = <<<TEXT
<br/> L1 $x
L2
L3
TEXT;

echo nl2br($text);

// Novodoc
$text2 = <<<'TEXT'
<br/> L1 $x
L2
L3
TEXT;

echo nl2br($text2);

?>

