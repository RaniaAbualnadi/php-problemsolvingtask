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
    //  Q1 // write script to generate paragraph 
    $color = array("red", "green", "white");
    echo "The memorey of that scene for me is like a frame of film: the "  . $color[0] . ", " . $color[1] . " and " . $color[2] . ".";
echo "<br>";

    // Q2// write script that will display the colors as unordered list 
    $color = array("Green", "Red", "White");
    echo "<ul>";
foreach($color as $color){
  echo "<li>". $color ."</li>";
}
echo "</ul>";
// Q3 // Display capital and country name from array 
$cities = array("Italy" => "Rome", "france" => "Paris", "Germany" => "Berlin");
echo "The capital of Italy " . $cities['Italy'] . "<br>";
echo "The capital of france " . $cities['france'] . "<br>";
echo "The capital of Germany " . $cities['Germany'] . "<br>";

//Q4 // The first elements of the array 
$color = array("Green", "Red", "White");
echo "$color[0]";
echo "<br>";

// Q5// inseret specific new item in any position
//Original Array on which operations is to be perform 
  
$original_array = array( '1', '2', '3', '4', '5' ); 
  
echo 'Original array : '; 
foreach ($original_array as $x)  
{ 
echo "$x "; 
} 
  
echo "
"; 

$inserted_value = '11'; 
$position = 2;   
array_splice( $original_array, $position, 0, $inserted_value );  
  
echo "After inserting 11 in the array is : "; 
foreach ($original_array as $x)  
{ 
echo "$x "; 
} 
echo "<br>";
// Q6 // sort the array asc
$color = array("d"=>"lemon", "a"=>"orange", "b"=> "banana");
// krsort($color);
asort($color);
foreach($color as $c=> $c_value) {
    echo  " $c  " , ", Value=" . $c_value;
  
};
echo "<br>";
// Q7 // calculate avg temp for the reads, display five lowest , display five highest 

$array_input = array(78, 60, 62, 68, 71, 68, 85, 66, 76,61, 65,70,89);
$average = array_sum($array_input) / count($array_input);
echo $average;
echo "<br>";
sort($array_input);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $array_input[$i].", ";
}
echo "<br>";
echo "List of five highest temperatures :";
for($i = count($array_input) - 5; $i <= count($array_input) - 1; $i++)
{
    echo "$array_input[$i], ";
}
echo "<br>";

// Q8 // Merge the two array 
 $array1 = array("color" => "red", 2 , 4);
 $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid",4);
 print_r(array_merge($array2,$array1));
 // $output = $array1 + $array2;
// echo "$output";

// Q10// convert strings in array to upperCase;
$colors = array( "red", "blue", "white", "yellow");
foreach($colors as $val){
    echo strtoupper($val)."<br>";
}


// Q11 // convert string to lowercase 

$colors = array( "RED", "BLUE", "WHITE", "YELLOW");
foreach($colors as $col){
    echo strtolower($col)."<br>";
}

// Q12 // all num between 200 and 250 divisible by 4
$numbers = range(200, 250);
foreach ($numbers as $number) {
    if($number % 4 === 0){
          echo $number." \n";
    };
  
};
echo "<br>";
// Q13 // shortest/longest string lenght from an array 
$words = ["abcd","abc","de","hjjj","g","wer"];
$lengths = array_map('strlen', $words);
echo "The shortest array is ".min($lengths). " and the longest array length is ".max($lengths);
echo "<br>";
// Q14 // UNIQUE RANDOM  NUMBERS Within a specific range 
for($i=0;$i<=10;$i++){
    echo rand(11,20). " \n";
};
echo "<br>";

// Q15 // return lowest integer that is not zero 
$array = array(2,0,10,12,6);
echo min(array_filter($array));

    ?> 

</body>
</html>