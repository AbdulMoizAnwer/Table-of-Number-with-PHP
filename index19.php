<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of Numbers</title>
</head>
<body>
    <!-- Write a program in php to read any Month Number in integer and display the number of days for this month. Go to the editor
    Test Data :
    7
    Expected Output :
    Month have 31 days -->
    <h1>Print any table till any number provided</h1>
    <form action="#" method="POST">
        <label>Enter the Number of Which You Wanna See Table</label>
        <input type="text" name="n1">
        <label>Till How Many Numbers You Wanna See?</label>
        <input type="text" name="n2">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    for ($i=1;$i<=$n2;$i++){
        $result = $n1 * $i;
        echo $n1 . " x " . $i . " = " . $result;   
        echo "<br>";  
        }
    }
?>
