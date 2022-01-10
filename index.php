<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Write php to covert the entered string to uppercase  -->
 

    <?php 
    //A // convert string to upper case 
    $strtoupper = "Rania abualnadi";
    $capstr = strtoupper($strtoupper);
    echo "$capstr";
    echo "<br>";

    // B // convert string to lowercase 

$strlower = "RANIA ABUALNADI";
$stringtolower = strtolower($strlower);
echo "$stringtolower";

//C//Make the first letter in string upper case
echo "<br>";
$firstupper = "rania abualnadi";
$convertoupper =  ucfirst($firstupper);
echo "$convertoupper";
  //D// first letter in each word capital 

  echo "<br>";
  $each = "rania hatem abualnadi";
  $converteach = ucwords($each);
  echo "$converteach";
  echo "<br>";

  //   Q2 // Date formate 
  $string = "085119";
  $date = strtotime($string);
  echo date ("h:i:s", $date);
  echo "<br>";

  // Q3 // check whether contain a specific words 
  $sentence  = 'What do you study?';

if (strpos($sentence, 'What') !== false) {
    echo 'true';
}else{
    echo "Word Not Found!";
}
echo "<br>";
// Q4 // Extract file name from URL
$url = 'http://learner.com/checkmycourse.php?lid=1348';
$file_name = basename(parse_url($url, PHP_URL_PATH));
echo $file_name;
echo "<br>";
// Q5 // Extract username from the following email address 

$email  = 'rania@gmail.com';
$username = strstr($email, '@', true);
echo $username;
echo "<br>";
//Q6 // Write php to get the last three characters from string 
$firstString = "Get the last three";
$secondString = substr($firstString, -3);
echo $secondString;
echo "<br>";

//Q7 // Generate simple random sample passwords from given string 
function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

echo rand_string(8);
echo "<br>";

//Q8 // replace the first word with another word 
$search  = 'This ';
$replace = 'The ';
$string  = 'this place is cold';
// $limit   = 2;

$replaced = str_replace($search, $replace, $string);

echo $replaced;
echo "<br>";
//Q9 // Write php script to find the first character that is different between two strings 
$string1 = "safety";
$string2 = "safeti";
$pos = strspn($string1 ^ $string2, "");
 echo 
    'First difference at position:',
    $pos, $string1[$pos], $string2[$pos]
;
echo "<br>";

// Q10 // Write Php script to put a string in an array , use var_dump to view the array 
$myString = "twinkle, Twinkle, little star";
$myArray = explode(" ", $myString);
 var_dump($myArray);
 echo "<br>";
// Q11 // Print the next letter of the inputted letter 
$str = 'a';
echo ++$str; 
echo "<br>";
// Q12 // Insert a string at the specified position in a given string

$string = 'I am happy today.';
$replacement = ' very ';

echo substr_replace($string, $replacement, 4, 0); 
echo "<br>";
// Q13 // Remove zeros from a given number 

$number = '000560820 ' ;
$search = '0' ;
$trimmed = str_replace($search, '', $number) ;
echo $trimmed ;
echo "<br>";

//Q14 // remove part of a string 
$subject = 'The quick brown fox jumbs over ' ;
$search = 'fox' ;
$trimmed = str_replace($search, '', $subject) ;
echo $trimmed ;
echo "<br>";
// Q15 // Remove trailing dashes from a string
$subject = 'The quick brown fox jumbs over --- ' ;
$search = '-' ;
$trimmed = str_replace($search, '', $subject) ;
echo $trimmed ;
echo "<br>";

//Q16 //  remove special characters from strings

  function RemoveSpecialChar($str) {
    $res = str_replace( array( '\'', '"',
    ',' , ';', '<', '>' ), ' ', $str);
    return $res;
    }
$str = "Example,to remove<the>Special'Char;"; 
$str1 = RemoveSpecialChar($str); 
echo $str1;
echo "<br>";

//Q17 // select first 5 words from string
$phrase = "All the ancient classic fairy tales have always been scary and dark.";
echo implode(' ', array_slice(str_word_count($phrase, 2), 0, 5));
echo "<br>";

// Q18 // Remove commas from the numeric string
$a = "1,435";
$b = str_replace( ',', '', $a );

if( is_numeric( $b ) ) {
    $a = $b;
    echo $a;
}
    echo "<br>";

// Q19 // Print letters from a to z
 $letter = ["A", "B", "C", "D","E","F", "G", "H","I","J","K","L","M", "N","O","P","Q","R","S","T","U", "V","W","X","Y","Z"];


 for($i=0; $i< count($letter); $i++){
     echo $letter[$i];
 }
// foreach (range('A', 'Z') as $char) {
//     echo $char . "\n";
// }
    ?>
</body>
</html>