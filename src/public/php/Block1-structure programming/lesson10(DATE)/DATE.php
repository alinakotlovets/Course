<?php

echo date('m/D/Y g:ia');

date_default_timezone_set('UTC');

echo '<br/>' . date('m/D/Y g:ia');

echo '<br/>' . date('m/D/Y g:ia', mktime(12,47,32,1,10, 2004));

echo '<br>/' . date('m/D/Y g:ia', strtotime('09-01.2024'));
echo '<br>/' . date('d/m/Y g:ia', strtotime('first day this year'));

