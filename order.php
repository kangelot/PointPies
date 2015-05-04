<?php

$myServer = "localhost";
$myUser = "root";
$myPass = "password";
$myDB = "pizzaorder"; 

//connection to the database
$dbhandle = mysql_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer"); 

if(!mysql_select_db($myDB, $dbhandle)){
echo "error";
}

@$a=$_POST['a'];
@$b=$_POST['b'];
@$c=$_POST['c'];
@$d=$_POST['d'];
@$e=$_POST['e'];
@$f=$_POST['f'];
@$g=$_POST['g'];

$s="insert into orders(id,name,emailaddress,phonenumber,deliveryaddress,transactionid,size,toppings) values('0', '$a','$b','$c','$d','$e','$f','$g')";

if(@$_POST['submit'])
{

if(mysql_query($s))
{
echo "Your Data Inserted";
}

else
{
echo "error";
}




}

?> 

<!DOCTYPE html><!-- Thiswas created in Webflow. http://www.webflow.com--><!-- Last Published: Fri Apr 24 2015 18:27:39 GMT+0000 (UTC) --><html data-wf-site="553a80f7dc3ac0f779fa06d9" data-wf-page="553a80f7dc3ac0f779fa06db" data-wf-status='1'><head><meta charset="utf-8"><title>PointPies</title><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="generator" content="Webflow"><link rel="stylesheet" type="text/css" href="https://daks2k3a4ib2z.cloudfront.net/553a80f7dc3ac0f779fa06d9/css/pointpies.webflow.d35e040f8.css"><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script><script>WebFont.load({
  google: {
    families: ["Montserrat:400,700","Bitter:400,700,400italic"]
  }
});</script><script type="text/javascript" src="https://daks2k3a4ib2z.cloudfront.net/0globals/modernizr-2.7.1.js"></script><link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/530e4313f4a216ca3c000048/53aa5920039f2a9529e8a9bb_webclip-slate.png"><link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/530e4313f4a216ca3c000048/53aa5920039f2a9529e8a9bb_webclip-slate.png"></head><body><header class="w-section navbar"><div class="w-container"><div class="w-row"><div class="w-col w-col-4"><img class="logo" src="http://uploads.webflow.com/553a80f7dc3ac0f779fa06d9/530e4fc7f4a216ca3c0000e1_logo-header.png" width="25" alt="530e4fc7f4a216ca3c0000e1_logo-header.png"><div class="app-name">Pointpies</div></div><div class="w-col w-col-8 nav-column"><a class="nav-link" href="#Order">Order</a><a class="nav-link" href="pastorders.php">Past Orders</a></div></div></div></header><div class="w-section section hero"><div class="w-container"><div class="w-row"><div class="w-col w-col-6"></div><div class="w-col w-col-6 call-to-action"><h1 class="hero-header">PointPies</h1><p class="hero-subtitle">Your only PointCoin Pizza Provider since Block 687!</p><a class="button" href="#">Order Today!</a></div></div></div></div><div class="w-section w-clearfix section" id="features"><div class="w-container"><div class="w-row"><div class="w-col w-col-6"><a id="About"><h2>About PointPies</h2></a><p>All of our premium pizzas are made with prime ingredients, using only the finest elliptic curves. We ensure a tasty crust using double-hashing, and our pizza chefs have no difficulty meeting the most demanding targets.<br/><br/> Our PointCoin address is PcCnzzCvFQNS9khgdcnY9nD3jig7NvZZv1.</p></div><div class="w-col w-col-6 center"><img src="https://daks2k3a4ib2z.cloudfront.net/553a80f7dc3ac0f779fa06d9/553a836f3ca1c17b420576b2_-945c9b0bb9ec69cf.jpg" alt="Making your pizza" width="400"></div></div></div></div><div class="w-section section grey"><div class="w-container"><div class="w-row"><div class="w-col w-col-6 center"><img src="https://daks2k3a4ib2z.cloudfront.net/553a80f7dc3ac0f779fa06d9/553a84f43ca1c17b4205771b_download%20(1).jpeg" width="337" alt="553a84f43ca1c17b4205771b_download%20(1).jpeg"></div><div class="w-col w-col-6"><h2>Pricing...</h2><p>Currently, all our pizza's are priced at&nbsp;31815.629 PTC</p></div></div></div></div><div class="w-section section purple"><a id="Order"><div class="w-container"><div class="w-row"><div class="w-col w-col-8"><h2 class="price-text">Order here</a></h2></div><div class="w-col w-col-4"></div></div><div class="w-form">



<form action="order.php" method = "post">
	
	<label for="node">Name:</label><input class="w-input" id="node" type="text" name="a" placeholder="Name" required="required">
	
	<label for="name">Email Address:</label><input class="w-input"  name="b" placeholder="Email Address" required="required">
	
	<label for="email">Phone Number:</label> <input class="w-input" name="c" placeholder="Phone Number"  placeholder="Phone Number" required="required">

<label for="field-2">Delivery Address</label><input class="w-input"  type="text" name="d" placeholder="Delivery Address" required="required">

<label for="field-2">Transaction ID</label><input class="w-input" type="text" placeholder="Transaction ID" name="e" required="required">

<label>Size</label><div class="w-radio">
	<input name="f" class="w-radio-input" id="radio-3" type="radio" value="Radio 3" data-name="Radio">
	
	<label class="w-form-label" for="radio-3">&nbsp;Small</label>

</div><div class="w-radio">
	
	<input name="f" class="w-radio-input" id="radio-2" type="radio" value="Radio 2" data-name="Radio">
	<label class="w-form-label" for="radio-2">Medium</label></div><div class="w-radio">
		
		<input class="w-radio-input" name="f" id="radio" type="radio" value="Radio" data-name="Radio">
		
		<label class="w-form-label" for="radio">Large</label></div>
	

<label for="field-2">Toppings</label><input class="w-input" id="field-2" type="textarea" name="g" placeholder="Toppings"  required="required">
	
	
	<input class="w-button" name="submit"  type="submit" value="Submit" data-wait="Please wait..."></form>
	
	
	
	<div class="w-form-done"><p>Thank you! Your submission has been received!</p></div><div class="w-form-fail"><p>Oops! Something went wrong while submitting the form :(</p>
	
	
	
	</div></div></div></div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body></html>

