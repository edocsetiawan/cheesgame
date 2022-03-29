<?php
    class checkPawn{

        public function findPawn($array){
            $array = array_map('trim', $array);
            for($x=1;$x<=2;$x++){
                for($y=1;$y<=2;$y++){
                    $position = $x.','.$y;
                    if(in_array($position,$array)){
                        $position = '';
                        echo 'match'.PHP_EOL;
                    }else{
                        $position = '';
                    }
                }
            }
        }

        public function checkRight($pos)
        {   
            $coordinat = explode(',',$pos);
            $x = $coordinat[0];
            $y = $coordinat[1];
            for($x;$x<9;$x++){
                $position = $x.','.$y;
            }
        }

        public function checkLeft($pos)
        {   
            $coordinat = explode(',',$pos);
            $x = $coordinat[0];
            $y = $coordinat[1];
            for($x;$x>0;$x--){
                $position = $x.','.$y;
            }
        }

        public function checkUp($pos)
        {   
            $coordinat = explode(',',$pos);
            $x = $coordinat[0];
            $y = $coordinat[1];
            for($y;$y<9;$y++){
                $position = $x.','.$y;
            }
        }

        public function checkDown($pos)
        {   
            $coordinat = explode(',',$pos);
            $x = $coordinat[0];
            $y = $coordinat[1];
            for($y;$y>0;$y--){
                $position = $x.','.$y;
            }
        }
    }
?>