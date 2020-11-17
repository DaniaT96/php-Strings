<?php

echo "<table border='2'>";
echo "<tr>";
echo "<th>Function Name </th>";
echo "<th> Output</th>";
echo "</tr>";
//upperCase letters
$text="practice makes master";
echo "<tr>";
echo "<td>UpperCase letters</td>";
echo "<td> ".strtoupper($text)."</td>";
echo "</tr>";

//LowerCase letters
echo "<tr>";
echo "<td>LowerCase letters</td>";
echo "<td> ".strtolower($text)."</td>";
echo "</tr>";

//First character upperCase
echo "<tr>";
echo "<td>First character upperCase</td>";
echo "<td> ".ucfirst($text)."</td>";
echo "</tr>";


//First character upperCase of all the words
echo "<tr>";
echo "<td>First character upperCase of all the words</td>";
echo "<td> ".ucwords($text)."</td>";
echo "</tr>";


//split string
$number='258963';
$arr1=str_split($number,2);
$string1 = implode(":", $arr1);
echo "<tr>";
echo "<td>split string</td>";
echo "<td> $string1</td>";
echo "</tr>";



//Check string
$word = "jumps";
$mystring = "The quick brown fox jumps over the lazy dog";
if(stripos($mystring,$word)==true){
  $result ="Word Found";

}
else{
    $result="Word not Found";
}

echo "<tr>";
echo "<td>Check string</td>";
echo "<td> $result</td>";
echo "</tr>";

//php variable to string

$var_name = 55.78950;
  

echo "<tr>";
echo "<td>php variable to string</td>";
echo "<td>".gettype(strval($var_name)).strval($var_name)."</td>";
echo "</tr>";


//sub string
$em="www.batman.com/puplic_html/index.php";
echo "<tr>";
echo "<td>sub string</td>";
echo "<td>".substr($em,27)."</td>";//substr($em,-9)
echo "</tr>";

$em1="batman@gmail.com";
echo "<tr>";
echo "<td>sub string 2</td>";
echo "<td>".strstr($em1, '@', true)."</td>";//substr($em1,0,-10)
echo "</tr>";
  

$em2="batman@gmail.com";
echo "<tr>";
echo "<td>sub string 3</td>";
echo "<td>".substr($em2,-3)."</td>";
echo "</tr>";

//money format
$value1= 65.45;
$value2=104.35;
$value=$value1+$value2;

echo "<tr>";
echo "<td>money format</td>";
echo "<td>".number_format($value,2)."</td>";
echo "</tr>";

//str_shuffle
$password="123456789qwertyuiop[]asdfghjkl;'zxcvbnm,./!@#$%^&*()_+=";

function random($lenght){
  $password="123456789qwertyuiop[]asdfghjkl;'zxcvbnm,./!@#$%^&*()_+=";
  return substr(str_shuffle($password),0,$lenght);

}
$r=random(9);
echo "<tr>";
echo "<td>str_shuffle</td>";
echo "<td>$r</td>";
echo "</tr>";

//replace
$text1='the quick brown fox jumps over the lazy dog.';
$firstword="the";
$secondword="That";
echo "<tr>";
echo "<td>str_replace</td>";
echo "<td>".str_replace($firstword, $secondword, $text1)."</td>";
echo "</tr>";


//// first character that is different between two strings
$string1 = 'footboll';
$string2 = 'football';
$pos = strspn($string1 ^ $string2, "\0");

$pos1="between two strings at position $pos:$string1[$pos] vs $string2[$pos] ";
echo "<tr>";
echo "<td>strspn</td>";
echo "<td>$pos1</td>";
echo "</tr>";


//put a string in an array

$strtext="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high, \nLike a diamond in the sky.";
//$a = array("Twinkle, twinkle, little star,", "How I wonder what you are.","Up above the world so high,", "Like a diamond in the sky.");
var_dump(explode("\n", $strtext));

echo "<tr>";
echo "<td>var_dump</td>";
echo "<td>a</td>";
echo "</tr>";

//filename component

basename("https://www.orange.com/index.php");
echo "<tr>";
echo "<td>basename</td>";
echo "<td>".basename("https://www.orange.com/index.php",".php")."</td>";
echo "</tr>";


/////print the next character 
$cha = 'z';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }


echo "<tr>";
echo "<td>print the next character </td>";
echo "<td>$next_cha</td>";
echo "</tr>";

// remove a part of a string from the beginning

$sub_string = 'rayy@';
$str = 'rayy@example.com';
$str = substr($str, strlen($sub_string));

echo "<tr>";
echo "<td>remove a part of a string from the beginning</td>";
echo "<td>$str</td>";
echo "</tr>";

//hex dump of a string
$string3='rayy@exampie.com';


echo "<tr>";
echo "<td>hex dump of a string</td>";
echo "<td>".bin2hex($string3)."</td>";
echo "</tr>";

// insert a string
$oldstr='The brown fox';
$str_to_insert='quick';
$pos=4;
$newstr = substr_replace($oldstr, $str_to_insert.' ', $pos, 0);
echo "<tr>";
echo "<td>insert a string</td>";
echo "<td>$newstr</td>";
echo "</tr>";


//get the first word 
$text2 = 'The quick brown fox';
$arr1 = explode(' ',trim($text2));

 
echo "<tr>";
echo "<td>get the first word </td>";
echo "<td>$arr1[0]</td>";
echo "</tr>";

//remove all leading zeroes
$text4='000547023.24';


echo "<tr>";
echo "<td>remove all leading zeroes</td>";
echo "<td>".ltrim($text4, "0")."</td>";
echo "</tr>";


//remove part of a string
$text5='The quick brown fox jumps over the lazy dog';


echo "<tr>";
echo "<td>remove part of a string</td>";
echo "<td>".str_replace("fox", " ", $text5)."</td>";
echo "</tr>";

//remove trailing slash
$text6='The quick brown fox jumps over the lazy dog///';
echo "<tr>";
echo "<td>remove trailing slash</td>";
echo "<td>".rtrim($text6, "/")."</td>";
echo "</tr>";

//get the characters after the last '/'
echo "<tr>";
echo "<td>basename (get the characters after the last '/')</td>";
echo "<td>".basename('http://www.example.com/5478631')."</td>";
echo "</tr>";

// replace multiple characters

$text7 = '\"\1+2/3*2:2-3/4*3';

echo "<tr>";
echo "<td> replace multiple characters</td>";
echo "<td>".str_replace(str_split('\\/:*?"<>|+-'), ' ', $text7)."</td>";
echo "</tr>";

// select first 5 words 

$text8 = 'The quick brown fox jumps over the lazy dog';
echo "<tr>";
echo "<td>  select first 5 words </td>";
echo "<td>".implode(' ', array_slice(explode(' ', $text8), 0, 5))."</td>";
echo "</tr>";



//remove comma(s)
$text9= '2,543.12';
echo "<tr>";
echo "<td>remove comma(s)</td>";
echo "<td>".str_replace(",", "", $text9)."</td>";
echo "</tr>";




//print letters from 'a' to 'z'
echo"<hr>";
for ($x = ord('a'); $x <= ord('z'); $x++)
echo chr($x);
echo"<hr>";
 

?>