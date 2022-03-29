<?php
    class checkPawn{

        public function findPawn($array){
            for($y=1;$y<9;$y++){
                for($x=1;$x<9;$x++){
                    $position = $x.','.$y;
                    if(in_array($position,$array)){
                        $coordinat = explode(',',$position);
                        $x = $coordinat[0];
                        $y = $coordinat[1];
                        $this->checkPosition($x,$y,$array);
                        $position = '';
                    }else{
                        $position = '';
                    }
                }
            }
            print_r($array);
        }

        private function checkPosition($x,$y,&$array)
        {
            $this->checkRight($x,$y,$array);
            $this->checkLeft($y,$y,$array);
            $this->checkUp($x,$y,$array);
            $this->checkDown($x,$y,$array);
            // $this->checkHorizontalUpRight($x,$y,$array);
            // $this->checkHorizontalUpLeft($x,$y,$array);
            // $this->checkHorizontalBottomLeft($x,$y,$array);
            // $this->checkHorizontalBottomRight($x,$y,$array);
        }

        private function checkPos($x,$y,&$array)
        {
            $position = $x.','.$y;
            $pos = array_search($position,$array);
            if($pos != ''){
                unset($array[$pos]);
                array_values($array);
            }
        }

        private function checkRight($x,$y,&$array)
        {   
            echo 'check right'.PHP_EOL;
            $x +=1;
            for($x;$x<9;$x++){
                $this->checkPos($x,$y,$array);
            }
        }

        private function checkLeft($x,$y,&$array)
        {   
            $x -= 1;
            for($x;$x>0;$x--){
                $this->checkPos($x,$y,$array);
            }
        }

        private function checkUp($x,$y,&$array)
        {   
            $y += 1;
            for($y;$y<9;$y++){
                $this->checkPos($x,$y,$array);
            }
        }

        private function checkDown($x,$y,&$array)
        {   
            $y -= 1;
            for($y;$y>0;$y--){
                $this->checkPos($x,$y,$array);
            }
        }

        private function checkHorizontalUpRight($x,$y,&$array)
        {
            $x += 1;
            $y += 1;
            for($x;$x<9;$x++){
                for($y;$y<9;$y++){
                    $this->checkPos($x,$y,$array);
                }
            }
        }

        private function checkHorizontalUpLeft($x,$y,&$array)
        {
            $x -= 1;
            $y += 1;
            for($x;$x>0;$x--){
                for($y;$y<9;$y++){
                    $this->checkPos($x,$y,$array);
                }
            }   
        }

        private function checkHorizontalBottomLeft($x,$y,&$array)
        {
            $x -= 1;
            $y -= 1;
            for($x;$x>0;$x--){
                for($y;$y>0;$y--){
                    $this->checkPos($x,$y,$array);
                }
            }
        }

        private function checkHorizontalBottomRight($x,$y,&$array)
        {
            $x += 1;
            $y -= 1;
            for($x;$x<9;$x++){
                for($y;$y>0;$y++){
                    $this->checkPos($x,$y,$array);
                }
            }
        }
        
    }
?>