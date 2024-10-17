<?php

if (preg_match_all('/^images\/IMG_[0-9]+\.(jpg|png|gif)/', '<img src="./images/img_33.jpg",src="./images/photo_5465178857633078337_y (1).png" alt="" width="300px">', $photo)) {
    print_r($photo);
} else {
    echo "Розширення файла не коректне";
}
