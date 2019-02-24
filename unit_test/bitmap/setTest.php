<?php

use PHPUnit\Framework\TestCase;

class setTest extends TestCase
{
    public function testSort()
    {
        $set = new set();
        $data = [
            [6,2,3,4,5,4,3,2,1],
            [6,6,6,6],
            [-1,-2,-3,0,100]
        ];
        foreach ($data as $key => $value) {
            $set->add($value);
            $value = array_unique($value);
            sort($value);
            $this->assertEquals($set->get(),$value);
            $set->clearAll();
        }
    }
}
?>