<?php

/*$x = 0;
while ($x <= 15){
  echo $x++ . ' ';
}

while($x <= 15){
    if ($x % 2 == 0){
        $x++;
        continue;
    }
    echo $x++ . ',';
}

do {
    echo $x++ . ',';
}
while ($x <= 15);*/

$text = "Hello word";
$lenght = strlen($text);
for ($x = 0; $x < $lenght; /*print ($x . ',')*/ $x++){
    echo $text[$x] . ' ';
}

echo '<br/>';

$car = ['car1', 'car2', 'car3'];
foreach($car as $key => $transport) {
    echo $key . ':' . $transport . '<br/>';
}

unset($transport); //delete data transport

$user = [
    'name' => 'Maks',
    'email' => 'gdg@ghg',
    'skills' => ['1', '2', '3']];

foreach ($user as $key => $value) {
    echo $key . ': ' . json_encode($value) . ' ' . '<br/>';
}

// або:

foreach ($user as $key => $value) {
    if (is_array($value)){
        $value = implode(',', $value);   //  перевірка на масив
    }
    echo $key . ': ' . $value . ' ' . '<br/>';
}

// або:

foreach ($user as $key => $value) {
    echo $key . ': ';

    if (is_array($value)){
        foreach ($value as $skill) {
            echo $skill . ' - ';
        }
    }
    else {
        echo  $value;
    }
}
?>