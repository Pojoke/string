<?php

// $str="[   34  555   8 9 9  ]";
// $prob=" ";
// $neprob="";
// $repl=str_replace($prob,$neprob,$str);
// echo $repl;
$email='pavl@gmail.com';
if (preg_match_all('/^[a-zA-Z][a-zA-Z0-9_]*@[a-zA-Z]+\.[a-zA-Z]{3,6}/', $email)) {
    print_r($email);
} else {
    echo "Email некоректний";
}