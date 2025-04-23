<!-- 
<html>
<head>
<title>  </title>
</head>
<body>
<h1> Darwiish</h1>
<?php
echo"WELCOME";
?>
<br>
<?php 
echo"TOO APP DARWIISH";
?>
</body>
</html> -->

<!-- Arrays -->
<<?php 
$names = array("Abdullahi", "Mohamed", "Yusra"); 
var_dump($names); 
echo "<br>"; 
echo "Second Name: " . $names[1]."<br>"; 
$names[1] = "Khalid"; 
var_dump($names); 
echo "<br>"; 
?>
<!-- String Functions  -->
<br>
<?php 
echo "String Length: " . strlen("Abdullahi Ahmed"). "<br>"; 
echo "Word Count: " . str_word_count("Abdullahi Ahmed Bashir"). "<br>"; 
echo "Reversed: " . strrev("Abdullahi Ahmed Bashir"). "<br>"; 
echo "Position of 'Ali': " . strpos("Abdullahi Ahmed Bashir", "Ali"). "<br>"; 
echo "Replace Example: "  . str_replace("Ahmed", "Ali", "Abdullahi Ahmed"). "<br>"; 
?>

 <br>
 
 <!-- Number Functions  -->
<?php 
$num = 100.77; 
var_dump(is_int($num)); 
echo "<br>"; 
echo "Pi Value: " . pi(). "<br>"; 
echo "Min Value: " . min (99, 100, 80, 10). "<br>"; 
echo "Max Value: " . max (99, 100, 80, 10). "<br>"; 
echo "Absolute Value: " . abs(-32). "<br>"; 

?>