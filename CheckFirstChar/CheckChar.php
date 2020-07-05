<?php
    // $regexp = '/^[A-Z]/';
    function isFirstLetterUpperCase($str){
        $regexp = '/^[A-Z]/';
        if (preg_match($regexp, $str)) echo 'String is first character is uppercase<br/>';
        else echo 'String is first character is not upper case<br/>';    
    }
    isFirstLetterUpperCase('Codegym');
    isFirstLetterUpperCase('codegym');
    isFirstLetterUpperCase('Nguyen van Nam');
    isFirstLetterUpperCase('NGUYEN VAN NAM');
    isFirstLetterUpperCase('nguyen van Nam');