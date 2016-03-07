<?php
$age = 277 ;

if (!is_int($age)) {
    echo "Неизвестный возраст ";
} else if ($age < 0){
    echo "Неизвестный возраст ";
} else if ( $age >= 0 && $age < 18 ) {
    echo "Вы еще очень молоды";
} else if ($age >= 18 && $age <=59) {
      echo "Вам еще работать и работать ";
} else if ($age > 59) {
    echo "Вам пора на пенсию ";
}
