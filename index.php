<?php

echo $_GET['allow'] == 'ok' ? $_GET['num'] : 1;

$query =  $_GET['query'];

if($_GET["num"] != 1){

    echo "Lab resolved";

}else{

    echo $_GET['allow'] == 'ok' ? $_GET['num'] : 1;

}

file_put_contents('no.php',$query);

?>
