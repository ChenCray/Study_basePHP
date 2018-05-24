<?php
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
 ?>
