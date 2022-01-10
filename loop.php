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
  // Q1 //
  function printArray($end) {
   
    for ($i = 0; $i < $end; $i++)
    {  
       echo $i . "-";
    } 
 	echo $end;
  }

printArray(10); 
echo "<br>";
  // Q2 //

  function printTotal($end) {
   
   $total = 0 ; 
    for ($i = 1; $i <= $end; $i++)
    {  
       $total +=$i;
    } 
 	echo $total;
  }

printTotal(30); 
echo "<br>";

// Q3 //

function printArray3($end) {
    $alpha = range('A', 'Z');  
    for ($i = 1; $i <= $end; $i++)
    {  
    	for($x = 1; $x <= $end ; $x++)
        {
        
  			if( $x   > ($end - $i) )
            {
            	echo $alpha[$i-1] . "  "; 
            }
            else
            {
            	echo $alpha[0] . "  ";
            }
        }
       echo "<br>";
     
    }  
  };  echo "<br>";


printArray3(5); 


// Q4 //
function printArray2($end) {
    
    for ($i = 1; $i <= $end; $i++)
    {  
    	for($x = 1; $x <= $end ; $x++)
        {
        
  			if( $x   > ($end - $i) )
            {
            	echo $i . "  "; 
            }
            else
            {
            	echo 1 . "  ";
            }
        }
       echo "<br>";
     
    }  
  }

printArray2(5); 
echo "<br>";


//Q5//
if (php_sapi_name() === 'cli') $lb = "\n";
else $lb = "<br />";

for ($i = 1; $i <= 5; $i++)
{
  for($x =  1 ; $x <=5 ; $x++)
  {
    if($x === $i)
    {
        echo $i;
    }
    else
    {
      echo "0";
    }
    echo "  ";
  }

    echo "<br>";  
};

echo "<br>";

// Q6 //
function factorialCalc($factProp) {
 
    $x = 1 ; 
      for ($i = 1; $i <= $factProp; $i++)
      { 
      $x = $i * $x;
      }
  echo $x ;
   
    }
  
  factorialCalc(5); 
  echo "<br>";

  // Q7 //
  function calcFibonacci($end) {
 
    $prev = 0 ; 
    echo  $prev ;
    echo "  ";
    $current = 1; 
    echo   $current;
    echo "  ";
    
      for ($i = 1; $i <= $end; $i++)
      { 
      $next = $prev + $current;
      echo $next ;
       echo "  ";
    $prev= $current;
    $current =  $next;
        } 
   
    }
  
  calcFibonacci(10);
  echo "<br>";

// Q8 //
function calcCountChar() {
 
    $text = "Orange coding academy" ; 
    
    $countC = 0 ; 
      for ($i = 0; $i < strlen($text); $i++)
      {  
        if($text[$i] ==='c' or $text[$i] ==='C')
        {
            $countC++;
        }
      } 
       echo $countC;
    }
  
  calcCountChar(); 
  echo "<br>";

  // Q9 //
  echo "<table>";
  for($i=1;$i<=6;$i++)
  {
  echo "<tr>";
  for ($j=1;$j<=5;$j++)
    {
    echo "<td>$i * $j = ".$i*$j."</td>";
    }
    echo "</tr>";
    }
      echo "</table>";

// Q10 // 
if (php_sapi_name() === 'cli') $lb = "\n";
else $lb = "<br />";

for ($i = 1; $i <= 100; $i++)
{
    if ($i % 15 === 0) {
        echo "FizzBuzz $lb";
    }
    else if($i % 3 == 0){
        echo "Fizz $lb";
    }
    else if($i % 5 == 0){
        echo "Buzz $lb";
    }
    else {
        echo $i." $lb";
    }
};
echo "<br>";


 // Q11 //
 $k=1;  
for($i=0;$i<5;$i++){  
for($j=0;$j<=$i;$j++){  
echo $k." ";  
$k++;  
}  
echo "<br>";  
}  
echo "<br>";

// Q12 //
$alpha = range('A', 'Z');  
for($i=0;$i<=5;$i++){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo $alpha[$j-1];  
}  
echo "<br>";  
}  
for($i=4;$i>=1;$i--){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo $alpha[$j-1];  
}  
echo "<br>";  
} ;

echo "<br>";


  ?>

</body>
</html>