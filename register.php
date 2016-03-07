<?php

var_dump($_POST);
if ($_SERVER['REQUEST_METHOD']!= $_POST);
   header("Location: /ancketa.html");

echo $_POST['name'];
echo $_POST['profession'];
echo $_POST['website'];
echo $_POST['login'];

$masterKeys = array('name', 'day', 'month', 'year', 'profession', 'website', 'login', 'password1', 'password2');
$postKeys = array_keys($_POST);

foreach ($masterKeys as $key=>$v){
   if (in_array($key, $postKeys));
      echo $key .'=>'. $v. "<br>";
   else echo "Не все данные присутствуют в форме
   <a href="/ancketa.html/"> Возврат к форме </a>" ;

       $description .= $v;
   else $humanData[$k] = $v;

}
$humanData['description'] = $description;
file_put_contents("users.csv",implode(',',$humanData). "\r\n", FILE_APPEND);
echo "Processed !!";
exit();
