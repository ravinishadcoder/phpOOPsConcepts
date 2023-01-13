<?php

class Math{
    public static function add(...$nums){
        return array_sum($nums);
    }
}
$math=new Math;
echo Math::add(1,2);
?>