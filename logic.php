<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     
     //Q1 // Check leap year 

    $year = 2004;
$leap = date('L', mktime(0, 0, 0, 1, 1, $year));
echo $year . ' ' . ($leap ? 'is' : 'is not') . ' a leap year.';
echo "<br>";
    //Q2 // Check season depending on tem if below 20 winter else summer 
    // $giorno = date('d');
    $temp = 21;
  
    if ($temp <= 20) {
      $stagione = "Winter";
    } else {
      $stagione = "Summer";
    }
echo $stagione;
echo "<br>";

// Q3 // Calculate the sum of two integers, if they are the same then calculate the triple
    
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(2, 2)."\n";
echo "<br>";
//Q4 // CHECK the sum of two given intger equal 30 then true else false

function tests($x, $y) 

{$z= $y + $x ;
    return $z === 30 ? "true" : "false" ;
}
echo tests(15, 15)."\n";
echo "<br>";

// Q5 // if the given postive bumber multiple 3 
function multiple($x) 

{
    return $x % 3 === 0 ? "true" : "false" ;
}
echo multiple(2)."\n";
echo "<br>";

// Q6 // check if the integer in the range of [20-50] inclusive
function check($x) 

{
    return ($x <= 50 &&  $x >= 20) ? "true" : "false" ;
}
echo check(20)."\n";
echo "<br>";
 // Q7 // LARGEST number between three integer 

    echo max(array(1, 5, 9));
    echo "<br>";

// Q8 // calculate monthly electricity bill
function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units <= 50) {
         echo $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
      echo  $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
      echo  $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
      echo  $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
};
calculate_bill(30);

echo "<br>";
// Q9 // calculator

   $operandOne = 2;
    $operandTwo = 3;
    $operator = "Subtract";
if(isset($operandOne) && isset($operandTwo)){
 
    switch ($operator){
    
        case 'Add':
             echo $operandOne + $operandTwo;
        break;
        case 'Subtract':
              echo $operandOne - $operandTwo;
        break;
        case 'Multiply':
              echo $operandOne * $operandTwo;
        break;
        case 'Divide':
             echo $operandOne / $operandTwo;
        break;
        default:
            echo 'Nothing was supplied';
        break;
    }
}else {
    echo '0';
}
// Q10 // check if person able to vote
echo"<br>";
$age=17;
if($age<=18)
echo("is no eligible to vote");
else
echo("is eligible to vote");
echo"<br>";
// Q11 // if number is postive or negative or zero
$number=-50;
if($number===0){
    echo"zero";
}else if($number<0){  echo"negative";}else if($number>0){echo"positive";}
echo"<br>";
//Q12 // 
$range=80;
if($range<60)
echo "f";
elseif($range<=70)
echo "D";
elseif($range<=80)
echo "C";
elseif($range<=90)
echo "B";
elseif($range<=100)
echo "A";
echo"<br>";

    ?>
</body>
</html>