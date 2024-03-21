<?php

    //constants

define('Status', 'paid');

echo Status . "<br/>"; //write paid

echo defined("Status"); //write1

?>

<?php

const Status_p = 'paid';
echo "<br/>" . "<br/>" . Status_p;

?>

<?php

$paid = 'Paid';
define('Statuss' . $paid, 4);

echo "<br/>" . StatussPaid;  //write 4
?>

<?php

 //variable

$foo = 'bar';

$$foo = 'baz';

echo "<br/>" . $foo, $$foo;
/* echo "$foo, {$$foo}";
echo "$foo, ${$foo}"; */

?>