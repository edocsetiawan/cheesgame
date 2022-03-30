<?php include 'checkPawn.php'; 
    $checkPawn = new checkPawn();
    $move = array();
    echo 'start'.PHP_EOL;
    for($i = 1;$i<9;$i++){
        echo 'masukan bidak '.$i.'(x,y)'.PHP_EOL;
        $input = fopen("php://stdin","r");
        $value = fgets($input);
        if(!strpos($value,',')){
            echo 'wrong format!'.PHP_EOL;
            $i--;
        }else{
            $checknumber = explode(',',$value);
            $checknumber = array_map('trim', $checknumber);
            if(is_numeric($checknumber[0]) && is_numeric($checknumber[1])){
                    if(($checknumber[0] > 8 || $checknumber[0] < 0) || ($checknumber[1] > 8 || $checknumber[1] < 0)){
                        echo 'Angka yang diperbolehkan hanya 1 - 8! '.PHP_EOL;
                        $i--;
                    }else{
                        $move[$i] = strval($value);
                        $move = array_map('trim', $move);
                    }
            }else{
                echo 'Number only!'.PHP_EOL;
                $i--;
            }
        }
    }
    echo 'hasil'.PHP_EOL;
    $result = $checkPawn->findPawn($move);
?>