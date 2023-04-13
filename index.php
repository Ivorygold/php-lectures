<!-- <!-- <?= "hello world9" ?>
<br>
<?php echo "hello world10";
//variable in php to follow
//php data type
?>
<br>
<?php
$name = "brad"; //string
// echo $name;

// $age = 40; //int
// echo $age;
// $has_kids = false; //bool
// echo $has_kids;
// $cash_on_hand = 20.45; //float

// echo $cash_on_hand;

// //concatenation
// echo "$name is $age years old"; //this is same with letter

// echo $name . "is" . $age . "years old";

// $hasUlcer = true;

// var_dump($hasUlcer);

//data in php

// $t = date("F");

// echo $t;

// $x = date("H");

// if ($x < 12) {
//   echo "Good morning";
// } elseif ($x >= 12 || $x < 17) {
//   echo "Good afternoon";
// } else {
//   echo "Good evening";
// }

// $post = ["first post"];

// //you can also declare a variable where the response can be stored

// $first_post = !empty($post) ? "sure bet" : $post[0];
// echo $first_post;blur

//ARRAY
$fruits = ["orange", "apple", "banana"];
//get length
//echo count($fruits);

//search array
var_dump(in_array("banana", $fruits));

//add to Array
$fruits[] = "grape";
array_push($fruits, "blueberry", "avocado pear");
array_unshift($fruits, "mango");

//remove from array
//from the end
array_pop($fruits);
//from beginning
array_shift($fruits);
//removing  specific

//unset($fruits[3]);

//print_r($fruits);

$chunked_array = array_chunk($fruits, 2);

//print_r($chunked_array);

//Concatenate Array
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

$number = range(1, 20);

$newNumber = array_map(function ($number) {
  return "Number . $number";
}, $number);

//print_r($newNumber);

$lessThan10 = array_filter($number, fn($number) => $number <= 10);
//print_r($lessThan10);

$sum = array_reduce($number, fn($carry, $number) => $carry + $number);

// print_r($sum);
// var_dump($sum);

// if (isset($_POST["submit"])) {
//   echo $_POST = ["name"];
//   echo $_POST = ["age"];
// }
?>
<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?name=brad&age=30">Click</a>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<div class="">
<label for="name" name=" name">Name:</label>
<input type="text" name="name">
</div>
<div class="">
  <label for="age">Age:</label>
  <input type="number" name="age">
</div>
<button type="submit " value="Submit" name="submit">Submit</button>
</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeHolic</title>
</head>
<body>
  hello world

  <?php
  echo "<p> hello world</p>";
  echo "<h1>Hello world</h1>";
  ?>
 
  <?php //variable types and declaration


  //it need to start with $ sign then variable name
  //it can not start with digit but it can start with underscore
  // .string .integer . boolean .Float .null

  $name = "Miracles";
  $age = 46;
  $height = 1.87;
  $isMale = true;
  $salary = null;

  //printing of output or variables with concatenation
  // echo $name . "<br>";
  // echo $age . "<br>";
  // echo $height . "<br>";
  // echo $isMale . "<br>";
  // echo $salary . "<br>";

  // //printing type of a variable
  // echo gettype($name) . "<br>";
  // echo gettype($age) . "<br>";
  // echo gettype($height) . "<br>";
  // echo gettype($isMale) . "<br>";
  // echo gettype($salary) . "<br>";

  //printing the whole variable with types
  var_dump($name, $age, $height, $isMale, $salary);
  "<br>";

//note that variables in php don't have type but the values do.

//Variable checking function
// is_string($name) . "<br>";
// var_dump(is_string($name));
// var_dump(is_int($name));
?>
<br>
  <?php //check is a variable is defined


  //we use isset

  var_dump(isset($name));
  echo $name;
  ?>

<br>
<?php //constant //constant are immutables //they are not declared with $ sign // they directly defined


define("pi", 3.12);
echo pi;
?>
<br>
<?php //Numbers in PHP


//Declaring numbers

$a = 3;
$b = 8;
$d = 7.1;

//Arithmetics
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo (($b - $c) * 10) / $a . "<br>";

//increment operator

$a++;
echo $a;
echo ++$a . "<br>";

//decrement operator
echo --$a;
echo $a-- . "<br>";

//number checking of function
// var_dump(is_integer(2)) . "<br>";
// var_dump(is_float(0.1)) . "<br>";
// var_dump(is_numeric(34.88)) . "<br>";

//converting numbers

$strNumber = "23.44";

$number = (float) $strNumber;
echo $number . "<br>";

var_dump($number) . "<br>";

//Number function
?>
<br>
<?php //ARRAY in PHP


//declare array
$fruits = ["banana", "apple", "oranges"];

//print full array
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";

//get array(element) by index
echo $fruits[0] . "<br>";

//set element by index

$fruits[3] = "peach";
$fruits[4] = "loud";
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";

//check if an array has an element in a particular index
var_dump(isset($fruits[4]));
var_dump(isset($fruits[5]));

//append element in a fruits
$fruits[] = "avocado";

// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";

//to print the length of an array

echo count($fruits) . "<br>";

//add an element at the end of an array, its called an array push

array_push($fruits, "Weed");
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>" . "<br>";

//remove element frm the end of array

array_pop($fruits);

// echo "<pre>";
// var_dump($fruits);
// echo "</pre>" . "<br>";

//adding an element at the beginning of an array
// array_unshift($fruits, "nice");
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>" . "<br>";

//removing element from the beginning of an array

// array_shift($fruits);
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>" . "<br>";

//splitting a string in to an array, this is achieved using EXPLODE

// $string = "utu, ani, lokoja";
// echo "<pre>";
// var_dump(explode(",", $string));
// echo "</pre>" . "<br>";

//to combine element in an array and convert to string

echo implode("&", $fruits) . "<br>";

var_dump(implode("&", $fruits)) . "<br>";

//check if an element exist in an array
// echo "<pre>";
// var_dump(in_array("apple", $fruits));
// echo "</pre>" . "<br>";

//search an element in an array
// echo "<pre>";
// var_dump(array_search("banana", $fruits));
// echo "</pre>" . "<br>";

//merging of array
$veges = ["guest", "mangos"];
// echo "<pre>";
// var_dump(array_merge($fruits, $veges));
// echo "</pre>" . "<br>";

// echo "<pre>";
// var_dump([...$fruits, ...$veges]);
// echo "</pre>" . "<br>";

//we can sort our array using sort_array or rsort_array

//FILTER, MAP, REDUCE OF ARRAY METHOD IN PHP

$NUMBER = [1, 2, 3, 4, 6, 8, 10];
// $even = array_filter($NUMBER, function ($n) {
//   return $n % 2 === 0;
// });

// echo "<pre>";
// var_dump($even);
// echo "</pre>" . "<br>";

//using an arrow-function
$even = array_filter($NUMBER, fn($n) => $n % 2 === 0);
// echo "<pre>";
// var_dump($even);
// echo "</pre>" . "<br>";

//map an array
$squares = array_map(fn($n) => $n * $n, $NUMBER);
// echo "<pre>";
// var_dump($squares);
// echo "</pre>" . "<br>";

//Array reduce
//note tht this is  a higher order function

$reduce = array_reduce($NUMBER, fn($carry, $item) => $carry + $item);
echo $reduce . "<br>";

//Associative array

//LOOPS
//While loop
$count = 0;
while ($count < 10) {
  echo "count" . "=", $count;
  $count++;
}

//SUPER GLOBALS ARE DECLARED IN CAPITAL LETTERS

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
?>

</body>
</html>
 -->
