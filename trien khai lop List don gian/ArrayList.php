<?php
class ArrayList
{
    public array $arrayList;

    public function __construct($arr = " ")
    {
        if (is_array($arr)){
            $this->arrayList = $arr;
        }else {
            $this->arrayList = [];
        }
    }
    public function add($obj): void  // thêm phần tử vào cuối mảng
    {
        array_push($this->arrayList, $obj);
    }
    public function clear(): void  // xóa tất cả phần tử
    {
        $this->arrayList = [];
    }
    public function get($index) // trả về phần tử tại vị trí index
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
    public function remove($index) // xóa phần tử tại vị trí index
    {
        if ($this->isInteger($index)){
            $newArrayList = [];
            for ($i =0; $i<$this->size();$i++){
                if ($index !=$i) $newArrayList[]=$this->get($i);
            }
            $this->arrayList=$newArrayList;
        }else{
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
//
//    public function toArray(): array    // trả về [] chứa tất cả phần tử theo thứ tự
//    {
//        return $this->arrayList;
//    }
//
//    public function sort()  // sắp xếp theo chữ cái
//    {
//        sort($this->arrayList);
//    }
//
//    public function isEmpty()   // kiểm tra số pt trong []
//    {
//        return count($this->arrayList)==0;
//    }
    public function isInteger($toCheck): bool
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size()
    {
        return count($this->arrayList);
    }
}