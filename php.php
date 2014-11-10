<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Server Side Product List (PHP) - Boukem Widget API Playground</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

</head>

<body>



<div class="pure-g">
	<div class="pure-u-1-4"></div>
	
    <div class="pure-u-1-2">
	
	<h1>Server Side Product List (PHP)</h1>
	
	<div class="pure-menu pure-menu-open">
		<a class="pure-menu-heading">Products</a>
	    <ul>
			<?php
				
				$pure_json_response = file_get_contents('http://boutiquedemo.boutiquekem.com/en/widget/rebates?format=json&limit=32&version=1');
				$decoded_response = json_decode($pure_json_response);
				
				foreach ($decoded_response as $item)
				{
					echo "<li>";
					echo "<a href='" . $item->url . "'>";
					echo $item->name;
					echo "</a></li>";
				}
				
				
			?>
	    </ul>
	</div>
	
	</div>
	
	<div class="pure-u-1-4"></div>
   
</div>


</body>
</html>
