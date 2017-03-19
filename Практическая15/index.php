<html>
 <head>
<meta charset="utf-8">
  <title>test PHP</title>
 </head>
 <body>
 <?php
function numhide(string $creditcard){

	echo "************",substr($creditcard, 12, 16);
}
numhide("1234567890121488");
?>
 </body>
</html>