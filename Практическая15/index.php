<html>
 <head>
<meta charset="utf-8">
  <title>test PHP</title>
 </head>
 <body>
 <form method="post">
 <input type="text" name="num1" pattern="[0-9]{4}" value="1111" required="required">
 <input type="text" name="num2" pattern="[0-9]{4}" value="1111" required="required">
 <input type="text" name="num3" pattern="[0-9]{4}" value="1111" required="required">
 <input type="text" name="num4" pattern="[0-9]{4}" value="1666" required="required">
 <input type="submit">
 </form>
 <?php
 $creditcardIn=$_POST['num1'].=$_POST['num2'].=$_POST['num3'].=$_POST['num4'];
function numhide(string $creditcard){
	 

	echo "**** **** **** ",substr($creditcard, 12, 16);
}
numhide($creditcardIn);
?>
 </body>
</html>