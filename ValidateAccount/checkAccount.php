<?php

function checkAcc($str){
    $pattern = '/^[_a-z0-9]{6,}$/';
    if (preg_match_all($pattern, $str) == '0')
    throw new Exception('Wrong Account name');
    else return 'This account can be used';
}
try{
    // echo checkAcc('123abc_');
    // echo checkAcc('_abc123');
    echo checkAcc('_____');
    // echo checkAcc('123456');
    // echo checkAcc('abcdefg');

    // echo checkAcc('.@');
    // echo checkAcc('12345');
    // echo checkAcc('1234_');
    // echo checkAcc('abcde');
} catch (Exception $e) {
    echo $e->getMessage()."<br/>";
    echo $e->getFile()."<br/>";
    echo $e->getLine()."<br/>";
}