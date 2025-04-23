<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial
scale=1.0"> 
    <title>Document</title> 
</head> 
<body> 
<?php  include("inculde\header.php") ; ?> 
<form action="" method="post"> 
    <label for="name">Name:</label> 
    <input type="text" id="name" name="name" required><br><br> 
 
    <label for="Id">Id:</label> 
    <input type="INT" id="Id" name="Id"  required ><br><br> 
 
    <label for="email">Email:</label> 
    <input type="email" id="email" name="email" ><br><br> 
 
    <label for="course">Course:</label> 
    <input type="text" id="course" name="course" ><br><br> 
 
    <button type="submit">Submit</button> 
 
    </form> 
    <?php 
    if ($_SERVER["REQUEST_METHOD"]=="POST"){ 
        if (empty($_POST["name"])){ 
            echo "Name is required"; 
        }else{ 
             
        $name=  cleardate($_POST["name"]); 
        } 
 
        if (empty($_POST["Id"])){ 
            echo "Id is required"; 
        }else{ 
             
            $age=  cleardate($_POST["Id"]); 
        } 
          
        $email= cleardate( $_POST["email"]); 
        $course=  cleardate($_POST["course"]); 
        echo  "xiliga action ka". date("D-M-Y"); 
    } 
 
function cleardate($value){ 
    $value = trim($value); 
    $value = stripslashes($value); 
    $value = htmlspecialchars($value); 
    return $value; 
 
} 
include("inculde/footer.php") ; 
?> 
 
</body> 
</html>