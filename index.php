
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






