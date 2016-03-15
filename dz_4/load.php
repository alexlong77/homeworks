<?php

print "<pre>";
session_start();
//$_SESSION['avatarcka'];
/*$finfo = finfo_open(FILEINFO_MIME_TYPE); // возвращает mime-тип
foreach (glob("*") as $_FILES) {
    echo finfo_file($finfo, $_FILES) . "\n";
}
finfo_close($finfo);*/

var_dump($_FILES['avatarcka']);
$uploadFile = ($_FILES['avatarcka']['name']);

move_uploaded_file($_FILES['avatarcka']['tmp_name'], $uploadFile);


