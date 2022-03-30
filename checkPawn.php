<?php
    class checkPawn{
        private $arrays;
        private function setGlobal($value){
            $this->arrays = $value;
        }

        public function findPawn(&$array){
            $this->setGlobal($array);
            for($y=1;$y<9;$y++){
                for($x=1;$x<9;$x++){
                    $position = $x.','.$y;
                    if(in_array($position,$this->arrays)){
                        $coordinat = explode(',',$position);
                        echo 'Position : '.$position.PHP_EOL;
                        $x = $coordinat[0];
                        $y = $coordinat[1];
                        $this->checkPosition($x,$y,$this->arrays);
                        $position = '';
                    }else{
                        $position = '';
                    }
                }
            }
            if(count($this->arrays) == 8){
                echo 'tidak ditemukan'.PHP_EOL;
            }else{
                print_r($this->arrays);
            }
        }

        private function checkPosition($x,$y,&$array)
        {
            $this->checkRight($x,$y,$array);
            $this->checkLeft($x,$y,$array);
            $this->checkUp($x,$y,$array);
            $this->checkHorizontalUpRight($x,$y,$array);
            $this->checkHorizontalUpLeft($x,$y,$array);
            return $array;
        }

        private function checkPos($x,$y,&$array)
        {
            $position = $x.','.$y;
            $pos = array_search($position,$array);
            if($pos != ''){
                echo 'Positions : '.$position.PHP_EOL;
                unset($array[$pos]);
                array_values($array);
            }
            return $array;
        }

        private function checkRight($x,$y,&$array)
        {   
            echo 'check right'.PHP_EOL;
            for($x+1;$x+1<9;$x++){
                $this->checkPos($x+1,$y,$array);
            }
        }

        private function checkLeft($x,$y,&$array)
        {   
            for($i=1;$i<$x;$i++){
                $this->checkPos($i,$y,$array);
            }
        }

        private function checkUp($x,$y,&$array)
        {   
            $y = $y + 1;
            for($y;$y<9;$y++){
                $this->checkPos($x,$y,$array);
            }
            return $array;
        }

        private function checkHorizontalUpRight($x,$y,&$array)
        {
            for($x+1;$x+1<9;$x++){
                $y = $y + 1;
                    $this->checkPos($x+1,$y,$array);
            }
        }

        private function checkHorizontalUpLeft($x,$y,&$array)
        {
            for($x-1;$x>0;$x--){
                $y = $y +1;
                $this->checkPos($x-1,$y,$array);
            }   
        }
    }
?>