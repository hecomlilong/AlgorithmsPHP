<?php
/**
* 如果不缺内存，如何使用一个具有库的语言来实现一种排序算法以表示和排序集合？
* 
*/
class set
{
    public $data = [];

    public function add($i){
        if (is_array($i)){
            foreach ($i as $key => $value) {
                $this->setValue($value);
            }
        }else{
            $this->setValue($i);
        }
    }

    public function setValue($i){
        $this->data[$i] = 1;
        ksort($this->data);
    }

    public function clr($i){
        unset($this->data[$i]);
    }

    public function test($i)
    {
        return array_key_exists($i, $this->data);
    }

    public function get()
    {
        return array_keys($this->data);
    }

    public function clearAll()
    {
        $this->data = [];
    }
}