<?php
class MyList
{
    public int $size;
    public array $elements;
    public function __construct($arr="")
    {
        if (is_array($arr)){

            $this->elements = $arr;
        }else{
            $this->elements= [];
        }
    }
    public function insert($index, $obj)
    {
        array_splice($this->elements, $index, 0, $obj);
    }
    public function add($obj)
    {
        array_push($this->elements, $obj);
    }
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = [];
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) $newArrayList[] = $this->get($i);
            }
            $this->elements = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
    public function clear()
    {
        $this->elements = [];
    }
    public function isEmpty()
    {
        return count($this->elements)==0;
    }
    public function sort()
    {
        sort($this->elements);
    }
    public function size()
    {
        return count($this->elements);
    }
    public function reset()
    {
        reset ($this->elements);
    }
}