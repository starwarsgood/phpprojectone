<!DOCTYPEhtml>
<head>
<title>123</title>
<meta charset="utf-8">
</head>
<body>
<form action="index.php" name="myform" method="post"> 
       ¬ведите первое число: <input type="ini_set" name="a" size="10" maxlength="5">
	   </br>
       ¬ведите второе число: <input type="int_set" name="b" size="10" maxlength="5">
	   <br>
<input name="Submit" type=submit value="”знать сумму"> 
</form>
<?php
$a= $_POST['a']; 
$b=$_POST['b'];
$result=$a+$b;
echo "</br>";
echo "–езультат= ".$result;

//echo "—ложение= ". $result."</br>";
//echo "------------------"."</br>";




?>
</body>
</html>