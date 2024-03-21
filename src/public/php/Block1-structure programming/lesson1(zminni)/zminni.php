<?php

echo "Hello word <br/>";  /* Hello word */
print "Hello word <br/>"; /* Hello word */
echo print "Hello word"; /* Hello word1 */
/* print echo 'Hello word'; */ /* error */

?>

<?php

#comment
//comment
/* comment */

?>

<?php

$name = "<br/> Maks <br/>";
echo $name; /* Write Maks */
/* Не створювати змінні з цифр і символів*/

?>

<?php

$x = 1;
$y = $x;

$x = 2;
echo $y . "<br/>"; /* Write 1 */

$x = 1;
$y = &$x;

$x = 2;
echo $y; /* Write 2*/

?>

<?php

$name = 'Maks';
echo '<br/> Hello' . $name;
echo "<br/> hello {$name}";

?>

<!DOCTYPE html>
<html>
<body>

<h1>
    <?php echo 'hello' ?>
</h1>

</body>
</html>