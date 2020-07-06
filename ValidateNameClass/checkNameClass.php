<?php
    // function check($str){
    //     if (preg_match_all($pattern, $str))
    // }
    
    function checkClassName($str){
        $pattern = '/^[CAP]{1}+[0-9]{4}+[GHIKLM]{1}$/';
        if (preg_match_all($pattern, $str) == '0')
        throw new Exception('This class name is not right<br/>');
        else return 'This class name is good<br/>';
    }
    try{
        // echo checkClassName('C0318G');
        // echo checkClassName('M0318G');
        echo checkClassName('P0323A');
    } catch (Exception $e){
        echo $e->getMessage();
        echo $e->getLine();
        echo $e->getFile();
    }
