<?php
/* 變數、常數、函式
-----------------*/
  $test = 123;
  define("PI", 3.1415926);

  echo $test . "<br>";
  echo defined("PI") . "<br>";
  echo PI . "<br>";
  echo __Line__ . "<br>";

  $a="b";
  $b="Hi PHP World";
  echo $$a ."<br>"; //輸出"Hi PHP World"
  echo "$$a"."<br>"; //輸出$b

  function rt_HelloWorld(){
    echo "Hello World!<br>";
  }

  rt_HelloWorld();
  rt_HelloWorld();

// 判斷式
  function check_isPI($input){
    if ($input == PI){
      echo "Is PI<br>";
    }
    else {
      echo "Is not PI<br>";
    }
  }

  check_isPI(3.1415926);
  check_isPI("abc");

  $tmp_array = ["abc", "123", 456, PI];

  for($count=0; $count<3; ++$count){
    if ($count == 2){
      echo $tmp_array[$count] . "<br>";
    }
    else {
      echo $tmp_array[$count] . "-";
    }
  }

  foreach ($tmp_array as $key => $value) {
    echo "key=$key.    value=$value<br>";
  }

  function switch_test($input){
    switch ($input) {
      case '1':
        echo "Is 1<br>";
        break;
      case '2':
        echo "Is 2<br>";
        break;
      default:
        echo "Is other<br>";
        break;
    }
  }

  switch_test(1);
  switch_test("2");
  switch_test("abc");

  function add_toInput($input){
    $start = 0;
    $rt = 0;
    while($start <= $input){
      $rt += $start;
      ++$start;
    }
    return $rt;
  }

  echo add_toInput(10);
 ?>
