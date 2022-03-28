<?php
    echo 'start'.PHP_EOL;
    for($i = 1;$i<=8;$i++){
        echo 'masukan bidak '.$i.'(x,y)'.PHP_EOL;
        $input = fopen("php://stdin","r");
        $value = fgets($input);
    }
    echo 'hasil'.PHP_EOL;
?>