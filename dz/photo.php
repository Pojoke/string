<?php

if(preg_match_all('/[images,0-9].jpg/','<img src="./images/56577.jpg" alt="" width="300px">',$photo)){
print_r($photo) ;
}
else{
    echo"Розширення файла не коректне";
}