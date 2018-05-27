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

//htmlspecialchars()
  $str_handle = 'str <a>"string" </a>';
  echo $str_handle . "<br>";
  echo htmlspecialchars($str_handle) . "<br>";

//round()
  $num_float = 4.5708;
  echo round($num_float)."<br>";
  echo round($num_float, 3)."<br>";
//mb_substr()
  $sub_str = "用指定編碼切割字串";
  echo mb_substr($sub_str, 5, 20, "utf-8") . "<br>";

//test die() exit()
  echo "1111<br>";
  /*
  exit("exit<br>");
  echo "2222<br>";
  */
 ?>
<!--試載入JQuery-->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js">
 </script>
 <script type="text/javascript">
 //array
 var tmp_array = ["123", "abc"];
 //base64
 var hw = "Hello World";
 var base64hw = btoa(hw);
 //trim
 var message = "    abc def     \r\n  ";

 document.write(message.trim() + "<br/>");
 document.write("length:" + message.trim().length + "<br>");
 //josn
 var jsontext = '{"firstname":"Jesper","surname":"Aaberg","phone":["555-0100","555-0120"]}';
var contact = JSON.parse(jsontext);
document.write(contact.surname + ", " + contact.firstname + "<br>");
document.write(contact.phone[1] + "<br>");

var arr = ["a", "b", "c"];
var str = JSON.stringify(arr);
document.write(str + "<br>");

 $(document) .ready(
   function(){
     $("#checkButton") .click(
       function(){
       $(".thClass1").slideUp();
         $("#thID1").slideDown(30);
         $(".formClass").slideToggle();
         console.log(tmp_array);
         console.log(tmp_array[0]);
         console.debug("test debug");
         console.log(base64hw);
         console.log(atob(base64hw));
       }
     );
   }
 );
 </script>

 <style type="text/css">
 .thClass1{
   display: block;
 }
 #thID1{
   display: none;
 }
 </style>

<table border="1">
  <tr>
    <th class="thClass1">1</th>
  </tr>
  <tr>
    <th id="checkButton">2</th>
    <th id="thID1">3</th>
  </tr>
</table>

<div class="formClass" style="padding:20px;border:5px solid;">
<form action="test.php" method="post">
　姓名：<input type="text" name="UserName"><br>
　內容：<textarea name="Content"></textarea><br>
　<input type="submit" value="送出表單">
</form>
</div>

<?php
//SQL
$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$dbname = "StudySQL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE base SET age=30 WHERE Name='abc'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
echo "<br>";

$sql = "SELECT id, Name, age FROM base";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Name"]. "  - age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results<br>";
}
$conn->close();

?>
<?php
  require_once "footer.php";
?>
