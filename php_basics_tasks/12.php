<?php
$day = '-uu77';
if ( $day >=1 && $day <=7) {

    switch ($day) {
        case 1:
            echo "Это рабочий день";

        case 2:
            echo "Это рабочий день";

        case 3:
            echo "Это рабочий день";

        case 4:
            echo "Это рабочий день";

        case 5:
            echo "Это рабочий день";

        case 6:
            echo "Это выходной день";

        case 7:
            echo "Это выходной день";
    }
}
        else {
            echo "Неизвестный день";
        }