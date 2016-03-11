<?php

$data = $_POST;
print "<pre>";
print_r($data);


if ($_SERVER['REQUEST_METHOD'] != 'POST') {
   header("Location: ancketa.html");
}

foreach($data as $key => $value) {
   print $key.   "<br>";
}

$masterKeys = array( 'name', 'day', 'month', 'year', 'profession', 'website', 'login', 'password1', 'password2');
$badKeys = array('password1', 'password2', 'password3'); // не пропускать ключи
$badWords = array('xxx', 'suk', 'fuck');  // не пропускать значения

//if(in_array('Alex', $data)){

//}

//if(array_key_exists('month', $data)){

//}

//foreach($masterKeys as $value) {
   print $value . "<br>";
//}
   if (!isset($data[$value])) {
//   if (!array_key_exists($value, $data)) {

      print 'ne suchestvuet elementa `' . $value . "`<br>";
   } else {
      print $value ."-". $data[$value]. "<br>";
   }
//}

foreach ($data as $key => $value) {
//   var_dump($value);
   if ($value == "") {
      print 'pustoe znachenie dlya polia ' . $key;
      echo " Не все данные присутствуют в форме <a href='ancketa.html'> Возврат к форме </a>"  . "<br>";;
   }
}



//
//       $description .= $v;
//   else $humanData[$k] = $v;
//
//}
$data['description'] = $description;
file_put_contents("users.csv",implode(',',$data). "\r\n", FILE_APPEND);
echo "Processed !!";
exit();
