<?php

if(preg_match_all('/[images,0-9].jpg/','<img src="./images/56577.jpg",src="./images/33.jpg",src="./images/photo_5465178857633078337_y (1).png" alt="" width="300px">',$photo)){
print_r($photo) ;
}
else{
    echo"Розширення файла не коректне";
}