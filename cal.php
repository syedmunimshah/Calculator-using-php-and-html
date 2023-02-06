<!doctype html>
<html lang="en">
  <head>
    <title>CalCULATOR</title>
  </head>
  <body>
    <h1>CalCULATOR</h1>

    <form>
<input type="text" name="num1" palaceholder="Enter text 1 here">
<input type="text" name="num2" palaceholder="Enter text 2 here">
<select name="operator">
<option>NONE</option>
<option>ADD</option>
<option>SUBTRACT</option>
<option>MULTIPLY</option>
<option>DIVIDE</option>

</select>
<br>
<button type="submit" name="submit" value="submit" >CALCULATOR</button>
    </form>
    <p>THE ANSWER IS : </p>
    <?php



if(isset($_GET['submit'])){
	$result1=$_GET['num1'];
	$result2=$_GET['num2'];
	$operator=$_GET['operator'];

	switch($operator){
	case "NONE":
	echo"YOU NEED TO SELECT METHOD ";
	break;

	case "ADD":
	echo $result1+$result2;
	break;

	case "SUBTRACT":
	echo $result1-$result2;
	break;

	case "MULTIPLY":
	echo $result1*$result2;
	break;

	case "DIVIDE":
	echo $result1%$result2;
	break;

}}
 ?>
   
  </body>
</html>