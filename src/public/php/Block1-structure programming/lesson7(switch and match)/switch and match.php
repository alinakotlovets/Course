<?php

$statuses = [1, 2, 0];

foreach ($statuses as $status) {

    switch ($status) {
        case 1:
            echo '1 ';
            break;

        case 2:
        case 3:
            echo '2 ';
            break;

        case 0:
            echo '0 ';
            break;

            default:
                echo '...';
    }
}

//Свіч це "==" а метч "==="

$status = 2;

/*match ($status){
    1 => print "1",
    2 => print "2",
    3 => print "3",
    0 => print "0"
}*/

$statuss = match ($status){
    1 => "1",
    2, 3 => "2",
    0 => "0",
    default => ',,,'
};

echo $statuss;

?>

