<?php
    // function showError(){
    //     return 'Invalid Email';
    // }
    function checkMail($str){
        $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
        if (preg_match_all($pattern, $str) == '0') 
        throw new Exception('Invalid Error') ;
        return 'Email is not invalid';
    }
    try{
        // echo checkMail('a@gmail.com');
        // echo checkMail('ab@yahoo.com');
        // echo checkMail('abc@hotmail.com');
        echo checkMail('@gmail.com');
        // echo checkMail('ab@gmail.');
        // echo checkMail('@#abc@gmail.com');
    } catch (Exception $e){
        echo $e->getMessage().'<br/>';
        echo $e->getLine().'<br/>';
        echo $e->getFile().'<br/>';
    }
    