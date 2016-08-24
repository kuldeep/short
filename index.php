<?php

if( !empty($_POST['original']) &&  !empty($_POST['short']) ){
	$txt = $_POST['original']."\t".$_POST['short'];	
	file_put_contents('url.txt', $txt.PHP_EOL );
	$page = $_SERVER['PHP_SELF'];
	$sec = "0";
	header("Refresh: $sec; url=$page");
}

$list = explode(PHP_EOL , trim(file_get_contents("url.txt")));

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
		<p>
			Original <input type="text" id="original" name="original" value="" />
		</p>
		<p>
			Shortner <input type="text" id="short" name="short" value="" />
		</p>
		<input type="submit" id="sub" name="sub" value="submit">
	</form>
	<div style="margin-top:50px;">
		<?php
		foreach ($list as $key => $l) {
			list($long , $short) = explode("\t", $l);
			echo "$long <b>=></b> $short";
		}
		?>
	</div>

</body>
</html>