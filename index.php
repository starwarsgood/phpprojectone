<!DOCTYPEhtml>
<head>
<title>123</title>
<meta charset="utf-8">
</head>
<body>
<form action="index.php" name="myform" method="post"> 
       ������� ������ �����: <input type="ini_set" name="a" size="10" maxlength="5">
	   </br>
       ������� ������ �����: <input type="int_set" name="b" size="10" maxlength="5">
	   <br>
<input name="Submit" type=submit value="������ �����"> 
</form>
<?php
$a= $_POST['a']; 
$b=$_POST['b'];
$result=$a+$b;
echo "</br>";
echo "���������= ".$result;

//echo "��������= ". $result."</br>";
//echo "------------------"."</br>";




?>
</body>
</html>