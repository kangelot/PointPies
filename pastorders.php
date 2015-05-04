
<!DOCTYPE html><!-- Thiswas created in Webflow. http://www.webflow.com--><!-- Last Published: Fri Apr 24 2015 18:27:39 GMT+0000 (UTC) --><html data-wf-site="553a80f7dc3ac0f779fa06d9" data-wf-page="553a80f7dc3ac0f779fa06db" data-wf-status='1'><head><meta charset="utf-8"><title>PointPies</title><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="generator" content="Webflow"><link rel="stylesheet" type="text/css" href="https://daks2k3a4ib2z.cloudfront.net/553a80f7dc3ac0f779fa06d9/css/pointpies.webflow.d35e040f8.css"><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script><script>WebFont.load({
  google: {
    families: ["Montserrat:400,700","Bitter:400,700,400italic"]
  }
});</script><script type="text/javascript" src="https://daks2k3a4ib2z.cloudfront.net/0globals/modernizr-2.7.1.js"></script><link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/530e4313f4a216ca3c000048/53aa5920039f2a9529e8a9bb_webclip-slate.png"><link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/530e4313f4a216ca3c000048/53aa5920039f2a9529e8a9bb_webclip-slate.png"></head><body><header class="w-section navbar"><div class="w-container"><div class="w-row"><div class="w-col w-col-4"><div class="app-name">Pointpies</div></div><div class="w-col w-col-8 nav-column"><a class="nav-link" href="order.php">Order</a><a class="nav-link" href="pastorders.php">Past Orders</a></div></div></div></header>

<div class="w-container"><div class="w-row"><div class="w-col w-col-6"><a id="About"><h2>Past Orders</h2></a></div>



<?php

$connection = mysql_connect('localhost', 'root', 'password'); //The Blank string is the password
mysql_select_db('pizzaorder');

$query = "SELECT * FROM orders"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

 // start a table tag in the HTML
echo "<center><table border = 1><center><td>#</td><td>Name</td><td>Phone Number</td><td>Email Address</td><td>Address</td><td>Transaction ID</td><td>Size</td><td>Toppings</td>";

while($row = mysql_fetch_array($result)){  
	
echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td>
	
	
<td>" . $row['emailaddress'] . "</td><td>" . $row['phonenumber'] . "</td>
<td>" . $row['deliveryaddress'] . "</td><td>" . $row['transactionid'] . "</td>
<td>" . $row['size'] . "</td><td>" . $row['toppings'] . "</td>


</tr>";  
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection

?>
	
	</div></div></div></div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body></html>

