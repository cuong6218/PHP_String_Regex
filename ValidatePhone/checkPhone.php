<?php
    function checkPhone($str){
        $pattern = '/^[(]+[0-9]{2}+[)]+[-]+[(]+[0]{1}+[0-9]{9}+[)]$/';
        if (preg_match_all($pattern, $str) == '0')
        throw new Exception('this phone number is not good<br/>');
        else return 'This phone number is good<br/>';
    }
    try{
        echo checkPhone('(84)-(0978489648)');
        echo checkPhone('(a8)-(22222222)');
    } catch (Exception $e){
        echo $e->getMessage();
        echo $e->getLine()."<br/>";
        echo $e->getFile()."<br/>";
    }