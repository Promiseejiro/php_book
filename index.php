<?php
 $quantity = 30; // Buying 30 widgets.
 $price = 119.95;
$taxrate = .05; // 5% sales tax.
$total = $quantity * $price;
$total = $total + ($total * $taxrate); //
$total = number_format ($total, 2);
var_dump($_POST);


//constant 
define("NAME","PROMISE");
echo(NAME);


$var="test";
echo "\$var is equal $var";
// \$ is $ sign
echo '\$var is equal $var';

 echo '<h3>Using double quotatio marks: $quatity</h3>';
 echo "<h3>You are purchasing <br/>$quantity
<br> widget(s) at a cost of <b/>\$$price<br/>
each. With tax\nthe total comes to <br/>\
$$total</br>.</h3>\n go to a new line.";

?>

<html xmlns=”http://www.w3.org/1999/xhtml”

xml:lang=”en” lang=”en”>
<head>
<meta http-equiv=”content-type” content=
”text/html; charset=iso-8859-1” />
 <title>Numbers</title>
 </head>
 <body>
<h1>Calculate</h1>
<div><label>Price</label>:
<?php echo $quantity; ?>
</div>
<div><label>Quality</label>:
<?php echo $price; ?></div>
<div><label>Total</label>:
<?php echo $total; ?></div>

<form action=""method="post">
  <div>
    <label>price</label>
<input name="quantity"type="number"/>
  </div>
  <button type="submit">Submit</button>
</form>
 </body>
 </html>