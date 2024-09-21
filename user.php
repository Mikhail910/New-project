<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<body>

<?php
$name = "не определено";
$age = "не определен";
if(isset($_POST["lname"])){
  
    $name = $_POST["lname"];
}
if(isset($_POST["lemail"])){
  
    $age = $_POST["lemail"];
}
echo "Имя: $name <br> Email: $age";
?>

</body>
</html>





