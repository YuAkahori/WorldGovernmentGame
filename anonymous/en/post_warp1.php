<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GET_WARP</title>
</head>
<body>
<form action="post_myinfo7.php" method="get">
<?php
include ('login_header.php');
print($use."指定のポイントへワープします。-180-X-180 -90-Y-90 <br>");

?>

<input type="text" name="datax"value =0 /><br />
<input type="text" name="datay"value =0 /><br />

<input type="submit" value="ワープ" />
</form>
</body>
</html>
