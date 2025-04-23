<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
 <form action="" method="post">
    <label for="Name">Name</label>
    <input type="text" name="Name" id="Name"><br>

    <label for="Address">Address</label>
    <input type="text" name="Address" id="Address"><br>

    <label for="Tell">Tell</label>
    <input type="number"  name="Tell" id="Tell"><br>
    <label for="email">Email</label>
    <input type="mail" name="Email" id="Email"><br>
    <label for="R_date">Reg_date</label>
    <input type="date" name="Reg_date" id="Reg_date"><br>
 
    <label for="Username">Username</label>
    <input type="text" name="Username" id="Username"><br>
    <label for="Password">Password</label>
    <input type="Password" name="Password" id="Password"><br>
<input type="Submit" value="Save">
</form>

<?php
function clearitems($value){
    $value=trim($value);
    $value=stripslashes($value);
    $value=htmlspecialchars($value);
return $value;
}

if (isset($_POST["Name"])){
if (!empty($_POST["Name"])){
    $Name= clearitems(  $_POST["Name"]);
}else{
    echo "please fill the Name ";
}

if (!empty($_POST["Address"])){
    $Address=clearitems( $_POST["Address"]);
}else{
    echo " please fill the Address";
}

if (!empty($_POST["Tell"])){
   
$Tell=clearitems( $_POST["Tell"]);

}else{
    echo "please fill the Tell";
}

$Email=clearitems( $_POST["Email"]);
$Reg_date=clearitems( $_POST["Reg_date"]);
$Username=clearitems( $_POST["Username"]);
$Passsowrd=md5(clearitems( $_POST["Password"]));

include("db.php");
$sql="insert into users(Name,Address,Tell,Email,
                 Reg_date,Username,PASSWORD)
        values ('$Name','$Address','$Tell','$Email',
               '$Reg_date','$Username','$Passsowrd')";
$con->query($sql);

}
?>
</body>
</html>
