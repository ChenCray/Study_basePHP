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

  echo add_toInput(10)."<br>";
// var_dump(), echo, print, print_r(), var_export()
  var_dump(PI);
  echo '<br>';

  $tmp_string = "abc";
  var_dump($tmp_string);
  echo '<br>';
  var_dump($tmp_array);
  echo '<br>';

  echo "$tmp_array[0]<br>";
  print"$tmp_array[1]<br>";
  print_r($tmp_array);
  echo "<br>";

  var_export($tmp_array);
  echo '<br>';

// strlen()
  echo strlen($tmp_string) . "<br>";

// str_replace()
  echo str_replace($tmp_string, "aaa", "abc def<br>");

// strpos()
  echo strpos("abcedfgh", "ced") . "<br>";

// strip_tags()
  $boldString = "<b>Bold</b>";

  echo $boldString . "<br>strip_tags: " . strip_tags($boldString) . "<br>";

//RW file
  function scan_file($input_file){
    $rt_str = "";
    while (!feof($input_file)) {
      $rt_str .= fgets($input_file);
    }
    return $rt_str;
  }

  $strHelloWorld = "Hello World!!";
  $file = fopen("test.xml", "w+");
  fwrite($file, $strHelloWorld);
  $rt_file = scan_file($file);
  fclose($file);
  echo $rt_file . "<br>";

  $filename = "test.xml";
  $rt_file = "";
  if(file_exists($filename)){
    $test_file = fopen($filename, "r");
    if($test_file != NULL){
      $rt_file = scan_file($test_file);
      fclose($test_file);
    }
  }
  echo $rt_file . "<br>";
//strtolower() strtoupper()
  echo strtolower($rt_file) . "<br>";
  echo strtoupper($rt_file) . "<br>";

//md5()
  echo md5($rt_file) . "<br>";

//abs()
  echo abs(-1344) . "<br>";
  echo abs(234) . "<br>";

//date()
  echo date("Ymd his"). "<br>";
  echo date("H"). "<br>";

//in_array() array_search()
  echo "abc is in array " . in_array("abc" ,$tmp_array) ."<br>";
  echo "value abc in array key is " . array_search("abc", $tmp_array)."<br>";
//test die() exit()
  echo "1111<br>";
  /*
  exit("exit<br>");
  echo "2222<br>";
  */
 ?>

<?php
  require_once "footer.php";
?>
