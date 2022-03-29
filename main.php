<?php include 'checkPawn.php'; 
    $checkPawn = new checkPawn();
    $move = array();
    echo 'start'.PHP_EOL;
    for($i = 1;$i<9;$i++){
        echo 'masukan bidak '.$i.'(x,y)'.PHP_EOL;
        $input = fopen("php://stdin","r");
        $value = fgets($input);
        $move[$i] = strval($value);
    }
    echo 'hasil'.PHP_EOL;
    $result = $checkPawn->findPawn(array_map('trim', $move));
?>