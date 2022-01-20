<?php

// define('NAMA', 'Abu Abdirohman');
// echo NAMA;

// echo "br";

// const UMUR = 24;
// echo UMUR;

// class Coba {
//     // define('NAMA', 'Abu Abdirohman'); 
//     const UMUR = 24;
// }

// echo  Coba::UMUR;

// echo __LINE__;
// echo __FILE__;

// function Abu() {
//     return __FUNCTION__;
// }

// echo Abu();

class Coba {
    public $class = __CLASS__;
}

$obj = new Coba;
echo $obj->class;

