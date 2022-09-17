<!DOCTYPE html>

<head>
    <title> simple calculator</title>
</head>
<?php
    $CalculatorResult = "";
if(isset($_POST['FirstNumber']) || isset($_POST['SecondNumber']) || isset($_POST['operator'])){
    $FirstNumber = $_POST['FirstNumber'];
    $SecondNumber = $_POST['SecondNumber'];
    $operator = $_POST['operator'];

if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
    
    switch ($operator) {
        case "Sum":
            $CalculatorResult = $FirstNumber + $SecondNumber;
            break;
        case "Subtraction":
            $CalculatorResult = $FirstNumber - $SecondNumber;
            break;
        case "Multiplication":
            $CalculatorResult = $FirstNumber * $SecondNumber;
            break;
        case "Division":
            $CalculatorResult = $FirstNumber / $SecondNumber;
    }
}
}
?>

<body>
    <div id="page-wrap">
        <h1>PHP - Simple Calculator Program</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber  ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>
            </p>
            <input type="submit" name="operator" value="Sum" />
            <input type="submit" name="operator" value="Subtraction" />
            <input type="submit" name="operator" value="Multiplication" />
            <input type="submit" name="operator" value="Division" />
        </form>
    </div>

<br>
<form action="index.php" method="post">
    E-mail: <input type="email" name="email"><br>
    password: <input type="password" name="pass"><br>
    <input type="submit">
</form>
<?php
if (isset($_POST["email"]) && isset($_POST["pass"])) {
    echo  "Your email address is : " . $_POST["email"] . "<br>";
    echo  "Your password  is : " . $_POST["pass"] . "<br>";
}
?>

<form action="index.php" method="post">
    task : <input type="text" name="task"><br>
    <input type="submit" value="ADD">
</form>
<?php
if (isset($_POST["task"]) ) {
    // array_push($allTask , $_POST["task$i"]);
    addTask($_POST["task"]);

}
$allTaskTest = [];
function addTask($value)
{
    static $allTask = [];
    static $i=1;
    array_push($allTask , $value);
    // $allTask[$i] = $value;
    echo "<pre>";
    print_r($allTask);
    echo "</pre>";
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>php task</title>
</head>
<body>
  

<?php
// q1
$inputYear = 2013;
if ($inputYear % 4 == 0) {
  echo "This year is  a leap year <br>";
} else {
  echo "This year is not a leap year <br>";
}
?>

<?php
// q2
$inputTemp = 10;
if ($inputTemp < 20) {
  echo "It is wintertime <br>";
} else {
  echo "It is summertime <br>";
}
?>

<?php
// q3
$inputOne = 3;
$inputSecond = 2;
echo ($inputOne + $inputSecond) *3 ;
echo '<br>' ;
?>


<?php
// q4
$sumOne = 10;
$sumTwo = 10;
$sum = ($sumOne + $sumTwo);
if ($sum > 30 ) {
  echo $sum;
  echo '<br>' ;
} else {
  echo "false";
  echo '<br>' ;
}
?>

<?php
// q5
$numInput = 20;
if (($numInput > 0)  and ($numInput % 3 == 0) ) {
  echo "$numInput positive number is a multiple of 3 <br>";
} else {
  echo "false<br>";
}
?>


<?php
// q6
$numInput = 20;
if ( (20 <= $numInput ) && ($numInput <= 50) ) {
  echo "true <br>";
} else {
  echo "false<br>";
}
?>

<?php
// q7
$numsInput = [1,3,9];
$largestNam = 0;
for ($i=0; $i < count($numsInput) ; $i++) { 
if ($numsInput[$i] > $largestNam) {
  $largestNam = $numsInput[$i];
}
}
echo "The largest Number is $largestNam <br>"
?>


<?php
// q8
$monthlyEleBill = 251;
$totalMonthlyEleBill = 0;
if ($monthlyEleBill <= 50) {
  $totalMonthlyEleBill = $totalMonthlyEleBill + ($monthlyEleBill *2.5);
} else if ($monthlyEleBill > 50) {
  $totalMonthlyEleBill = $totalMonthlyEleBill + (50 *2.5);
}
if (($monthlyEleBill > 50) && ($monthlyEleBill <= 150)) {
  $totalMonthlyEleBill = $totalMonthlyEleBill + (($monthlyEleBill-50) *5);
} else if ($monthlyEleBill > 150){
  $totalMonthlyEleBill = $totalMonthlyEleBill + (100 *5);
}
if (($monthlyEleBill > 150) && ($monthlyEleBill <= 250)) {
  $totalMonthlyEleBill = $totalMonthlyEleBill + (($monthlyEleBill-150) *6.2);
} else if ($monthlyEleBill > 250) {
  $totalMonthlyEleBill = $totalMonthlyEleBill + (100 *6.2);
}
if ($monthlyEleBill > 250) {
  $totalMonthlyEleBill = $totalMonthlyEleBill + (($monthlyEleBill-250) *7.5);
}

echo " Monthly Electricity Bill $totalMonthlyEleBill JD <br>";
?>

<?php
  $numOne = 2;
  $numTow = 3;
  $operator = "*";
  if ($operator == "+") {
    echo $numOne + $numTow;
    echo "<br>";
  } else if ($operator == "-"){
    echo $numOne - $numTow;
    echo "<br>";
  }else if ($operator == "*"){
    echo $numOne * $numTow;
    echo "<br>";
  }else if ($operator == "/"){
    echo $numOne / $numTow;
    echo "<br>";
  }
?>

<?php
// q10
$age = 15;
if ($age >= 18) {
  echo "is eligible to vote <br>";
}else {
  echo "is no eligible to vote <br>";
}
?>

<?php
// q11
  $numberToCheck = -60;
if ($numberToCheck > 0) {
  echo "Positive <br>";
} else if ($numberToCheck < 0) {
  echo "Negative <br>";
}else if ($numberToCheck == 0) {
  echo "the number is zero <br>";
}
?>

<?php
// q12
$grads = [60,86,95,63,55,74,79,62,50];
$total = 0;

foreach ($grads as $ele) {
  $total += $ele;

}
$average = $total/count($grads);
if (($average >= 50) and ($average < 60)) {
  echo "the grade is F";
} else if (($average >= 60) and ($average < 70)){
  echo "the grade is D";
}else if (($average >= 70) and ($average < 80)){
  echo "the grade is C";
}else if (($average >= 80) and ($average < 90)){
  echo "the grade is b";
}else if (($average >= 90) and ($average < 100)){
  echo "the grade is A";
}

?>

<?php 
// q1 array
  $arrayColor = ['red','green','white' ];
  echo "The memory of that scene for me is like a frame
   of film forever frozen at that moment: the  ". $arrayColor[0] ." carpet,
    the ". $arrayColor[1] ." lawn, the ". $arrayColor[2] ." house, the leaden sky.
     The new president and his first lady. - Richard M. Nixon";
?>

<?php
  //q2 array
  $colors = array('white', 'green', 'red');
  echo "<ul>";
  for ($i=0; $i < count($colors) ; $i++) { 
    echo "<li>".  $colors[$i] ." </li>";
  }
  echo "</ul>";
?>

<?php
  //q3 array
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
foreach ($cities as $country => $capital) {
  echo "The capital of $country is $capital <br>";
}
?>

<?php
  //q4 array
  $color = array (4 => 'white', 6 => 'green', 11=> 'red');
  echo   $color[array_key_first($color)];
  echo "<br>";
  echo   reset($color);
  echo "<br>";
?>

<?php
  //q5 array
  $nums = array (1,2,3,4,5);
  $newNum = ["$"];
  array_splice($nums,3,0,$newNum );
  print_r($nums);
  echo "<br>";
  
  ?>

<?php
  $fruits = ["d"=> "lemon",'a'=> "orange","b" => "banana","c" => "apple"];
  asort($fruits);
  print_r($fruits);
  echo "<br>";
  foreach ($fruits as $key=>$value) {
    echo " $key = $value <br>";
  }
  ?>

<?php
  //array 7
  $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
  $averg = 0;
  foreach ($temp as $value) {
    $averg += $value;
  }
  $averg = $averg / count($temp);
  $sortArray = array_unique($temp);
  sort($sortArray);
  echo "Average Temperature is:" . round($averg ,1) ."<br>";
  // print_r($sortArray);
  echo 'List of seven lowest temperatures:';
  for ($i=0; $i < 7 ; $i++) { 
    echo $sortArray[$i] . ", ";
  }
  echo "<br>";
  echo 'List of seven highest temperatures:';
  for ($i=0; $i < 7 ; $i++) { 
    echo $sortArray[count($sortArray)-1 - $i] . ", ";
  }
  ?>

  <?php
    //array 8
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    array_splice($array2 , -1 ,-2, $array1 );
    echo "<br>";
    echo "<pre>";
    print_r($array2);
    echo "</pre>";
  ?>


<?php
  //array 9
  $colors = array("red","blue", "white","yellow");
  function toUpperCase( array $array){
    $colorsUpper =[];
    foreach ($array as $value){
      array_push($colorsUpper , strtoupper($value));
    }
    echo "<pre>";
    print_r($colorsUpper);
    echo "</pre>";
  }
  toUpperCase($colors);
?>

<?php
  //array 10
  $colorsl = array("RED","BLUE", "WHITE","YELLOW");
  function toLowerCase(array $array){
    $colorsLowe =[];
    foreach ($array as $value){
      array_push($colorsLowe , strtolower($value));
    }
    echo "<pre>";
    print_r($colorsLowe);
    echo "</pre>";
  }
  toLowerCase($colorsl);
?>

<?php
  //array 11
  function check($number)
  {
    if (($number >= 200) && ($number <= 250) && ($number % 4 == 0) ) {
      echo $number . " , ";
    }
  }
  for ($i=180; $i < 300 ; $i++) { 
    check($i);
  }
?>

<?php
  //array 12
  $words =  array("abcd","abc","de","hjjj","g","wer");
  $short = $long ='';
  foreach ($words as $value){
    if (strlen($long) < strlen($value) ){
      $long =$value;
    } 
    if (strlen($short) > strlen($value) ){
      $short =$value;
    }else if (strlen($short) == 0){
      $short =$long;
    }
  }
  echo "<br>";
  echo 'The shortest array length is: ' .  strlen($short) . ", The longest array length is :" .  strlen($long);
  echo "<br>";
?>

<?php
  //array 13
  function randomNumbers ($number1 , $number2)
  {
    $numbers =[];
    if ($number2 > $number1) {
      $range = $number2 - $number1;
      $i=0;
      echo "the numbers between your range is :";
      while ($i < $range){ 
        $value = rand($number1,$number2);
        if (!(in_array($value , $numbers))) {
          array_push($numbers , $value);
          echo $value . " , ";
          $i++;
        }
      }
      echo "<br>";
    } 
    else if ($number1 > $number2) {
      $range = $number1 - $number2;
      $i=0;
      echo "the numbers between your range is :";
      while ($i < $range){ 
        $value = rand($number2,$number1);
        if (!(in_array($value , $numbers))) {
          array_push($numbers , $value);
          echo $value . " , ";
          $i++;
        }
      }
      echo "<br>";
    } 
    else if ($number1 = $number2)
      {
      echo "your input numbers is equal ";
      echo "<br>";
    } 
  }
  randomNumbers(11,20);
  randomNumbers(25,20);
  randomNumbers(20,20);
  ?>

<?php
  //array 14
  $array1 = array(2, 0, 10, 12, 6);
  function lowerNumber(array $array)
  {
    $lowerNumber = 0;
    foreach ($array as $value) {
      if ($lowerNumber == 0) {
        $lowerNumber = $value;
      }
      if (($lowerNumber > $value) && ($value!= 0)) {
        $lowerNumber = $value;
      }
    }
    echo "the lower number is $lowerNumber <br>" ;
  }
  lowerNumber($array1);
?>

<?php
  //loop 1
  for ($i=1; $i <= 10 ; $i++) { 
    if ($i < 10) {
      echo $i . " - ";
    } else {
      echo $i ;
    }
  }
  echo "<br>";
?>

<?php
  //loop 2
  $total =0;
  for ($i=0; $i < 30 ; $i++) { 
    $total += $i; 
  }
  echo "the total of all the integers between 0 and 30 is : $total <br>";
  ?>

<?php
  //loop 3
  for ($i=0; $i < 5 ; $i++) { 
    $character = 65 + $i;
    for ($j=4; $j >= 0 ; $j--) { 
      if ($j > $i) {
        echo chr("65") . " " ;
      } else {
        echo chr("$character") . " "  ;
      }    
    }
    echo "<br>";
  }
  echo "<br>";
?>
<?php
  //loop 4
  for ($i=0; $i < 5 ; $i++) { 
    $character = 49 + $i;
    for ($j=4; $j >= 0 ; $j--) { 
      if ($j > $i) {
        echo chr("49") . " " ;
      } else {
        echo chr("$character") . " "  ;
      }    
    }
    echo "<br>";
  }
  echo "<br>";
?>
<?php
  //loop 5
  for ($i=0; $i < 5 ; $i++) { 
    $character = 49 + $i;
    for ($j=0; $j < 5 ; $j++) { 
      if ($j == $i) {
        echo chr("$character") . " "  ;
      } else {
        echo chr("48") . " " ;
      }    
    }
    echo "<br>";
  }
  echo "<br>";
?>
<?php
  //loop 6
  function factorial($var)
  {
    $total =1;
    for ($i=1; $i <= $var ; $i++) { 
      $total *= $i; 
    }
    echo "the total of  factorial $var is : $total <br>";
  }
  factorial(5);
  factorial(6);
?>

<?php 
  //loop 7
  function sequence ($var)
  {
    $sequence =[0,1];
    echo $sequencePrint = "0 - 1 -";
    for ($i=2; $i < $var; $i++) { 
      $newValue = $sequence[$i-1] + $sequence[$i-2];
      if ($i < $var-1) {
        echo $newValue . " - " ;
      } else {
        echo $newValue  ;
      }
      array_push($sequence , $newValue );
    }
    echo "<br>";
  }
  sequence(10);
?>

<?php
//loop 8
  function countC( $string )
  {
    $countC = 0;
    for ($i=0; $i < strlen($string) ; $i++) { 
      if ($string[$i] == "c" || $string[$i] == "C") {
        $countC++;
      } 
    }
    echo "the count the c characters in the $string is : $countC <br>";
  }
  countC("Orange Coding Academy");
?>

<?php
//loop 9
  echo '<table style="border-collapse:collapse; width: 100%;">';
  for ($i=1; $i <= 6 ; $i++) { 
    echo '<tr>';
    for ($j=1; $j <= 5 ; $j++) { 
        echo "<td style=\"padding:8px;\">";
        echo "$i * $j =" . ($i * $j) ;
        echo "</td>";
      }
    echo '</tr>';
  }
  echo '</table>';
?>

<?php
//loop 10
  for ($i=1; $i <= 50; $i++) { 
    if (($i % 3 ==0) && ($i % 5 ==0)) {
      echo  "FizzBuzz";
    } else if ($i % 5 ==0) {
      echo  "Buzz";
    }else if ($i % 3 ==0) {
      echo  "Fizz";
    } else {
      echo  $i;
    }
  }
  echo "<br>";
?>

<?php
//loop 11
  $count = 1;
  for ($i=1; $i <= 5 ; $i++) { 
    for ($j=0; $j < $i ; $j++) { 
      echo $count++ . " ";
    }
  echo "<br>";
  }
?>

<?php
  function checkPrime(int $num)
  {
    if (($num % 2 != 0) and ($num % 3 != 0)) {
      echo "$num is a prime number <br>";
    }
  }
  for ($i=0; $i < 10 ; $i++) { 
    checkPrime($i);
  }
?>

<?php
  $var = "Dasooky";
  function reverse(string $var )
  {
    str_split( $var);
    $varExplode = str_split( $var);
    $reversed=[];
    foreach ($varExplode as $value){
      array_unshift($reversed , $value );
    }

    echo join("",$reversed);
  }
  reverse($var);
?>

<?php
  function allLower(string $var1){
    str_split($var1);
    $varSplit = str_split($var1);
    $condition = 0;
    foreach ($varSplit as $value){
      if (strtoupper($value) ===  $value) {
      $condition++;
      }
    }
    if ( $condition != 0 ) {
      echo "Your String is not Ok";
    } else {
      echo "Your String is Ok";
    }
  }
  allLower($var);
  echo "<br>";

  ?>

  <?php
    function countR(string $var)
    {
      $counter = 0;
      $varSplit = str_split($var);
      foreach ($varSplit as $ele) {
        if (($ele == "r") || ($ele == "R") ) {
          $counter++;
        }
      }
      echo "r characters in stances is $counter" . '<br>';
    }
    echo "<br>";

    countR("rRRosama");
    countR("rRrrsRosama");
  ?>


<?php
  for ($i=1; $i <= 10; $i++) { 
    echo "<br>";
    for ($j=1; $j <= 10; $j++) { 
      echo $i * $j . " | ";
    }
  }
?>


<?php
  $var = "osama[dasooky]dddd[osama]";
  $condition = 0;
  for ($i=0; $i < strlen($var) ; $i++) { 
    if ($var[$i] == "[") {
      $condition++;
    } else if ($var[$i] == "]") {
      $condition = 0;
    } else if ($condition) {
      echo $var[$i];
    }  
  }
?>

<?php
  class Calculator {
    protected $num1;
    protected $num2;

    public function __construct($num1,$num2)
    {
      $this->num1 = $num1;
      $this->num2 = $num2;
    }
    public function add()
    {
      return $this->num1+$this->num2;
    }
    public function subtract()
    {
      return $this->num1-$this->num2;
    }
    public function multiply()
    {
      return $this->num1*$this->num2;
    }
    public function divide()
    {
      return $this->num1/$this->num2;
    }
  }

  $number = new  Calculator(12 , 6);
  echo $number->add();
  echo "<br>"
?>

<?php
  //function 5
  function swap ($var1 , $var2)
  {
    $firstValue = $var1;
    $secondValue = $var2;
    $swap =$firstValue;
    $firstValue = $secondValue;
    $secondValue = $swap;
    echo "first Value  is : $firstValue - second Value is : $secondValue <br>";
  }
  swap("osama",12);
?>

<?php

  function isArmstrong($MyNum)
  {
    $y = $MyNum;
    $sum = 0;
    $Order = 0;
  
    //Find number of digit in the Number
    while($y > 0){
      $Order++;
      $y = (int)($y / 10);
    }
  
    $y = $MyNum;
    while ($y > 0){
      $x = $y % 10;
      $sum = $sum + Pow($x, $Order);
      $y = (int)($y/10);
    }
    
    if ($MyNum == $sum){
      echo $MyNum." is a Armstrong Number.<br>";
    } else {
      echo $MyNum." is not a Armstrong Number.<br>";
    }
  }
  isArmstrong(371);
  isArmstrong(407);
?>
<?php
  //function 8
  function  removeDuplicates( $array )
  {
    $withoutDuplicates =[];
    foreach ($array as $value) {
      if (!in_array($value, $withoutDuplicates)) {
        array_push($withoutDuplicates , $value );
      }
    }
    echo "<pre>";
    print_r($withoutDuplicates);
    echo "</pre>";
  }
  $array1 = array(2, 4, 7, 4, 8, 4);
  removeDuplicates($array1);
?>
</body>
</html>

</body>

</html>
