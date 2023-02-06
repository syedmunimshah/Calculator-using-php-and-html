<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>

    <form action="">
        <input type="text" name="num1" placeholder="Enter num 1">
        <input type="text" name="num2" placeholder="Enter num 2">
        <select name="operator">
<option>none</option>
<option>ADD</option>
<option>SUB</option>
<option>MUL</option>
<option>Div</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">submit</button>

    </form>
    <h2>Answer:</h2>
<?php

if(isset($_GET['submit'])){
    $result1=$_GET['num1'];
    $result2=$_GET['num2'];
    $operator=$_GET['operator'];

    switch($operator){
        case "none";
        echo"SELECT";
        break;

        case "ADD";
        echo $result1+$result2;
        break;

        case "SUB";
        echo $result1-$result2;
        break;

        case "MUL";
        echo $result1*$result2;
        break;

        case "Div";
        echo $result1%$result2;
        break;

    }

}
?>    
</body>
</html>