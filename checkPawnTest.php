<?php
    use PHPUnit\Framework\TestCase;
    require_once 'checkPawn.php';

    class checkPawnTest extends TestCase{
        public function testPositive()
        {
            $cp = new checkPawn();
            $data   = array('2,1','3,2','5,3','4,4','1,5','1,6','2,7','2,8');
            $find = $cp->findPawn($data);
            $this->assertEquals(true,$find);
        }

        public function testNegative()
        {
            $cp = new checkPawn();
            $data   = array('2,1','5,2','7,3','4,4','1,5','8,6','6,7','3,8');
            $find = $cp->findPawn($data);
            $this->assertEquals(false,$find);
        }
    }   
?>