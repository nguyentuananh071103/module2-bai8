<?php
class MyList
{
    public int $size;
    public array $elements;
    public function __construct($size, $arr="")
    {
        if (is_list($arr)){

            $this->elements = $arr;
        }else{
            $this->elements= [];
        }
    }
    public function insert($index, $obj)
    {

    }
    public function add($obj)
    {
        array_push($this->myList, $obj);
    }
    public function remove($index)
    {
        if(array_key_exists($index, $this->list));
        {
            unset(($this->list[$index]));
        }
    }
}