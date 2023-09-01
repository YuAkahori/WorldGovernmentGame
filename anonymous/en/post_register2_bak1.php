<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>文章の挿入</title>
</head>
<body>
<form method="post" action="post_register2.php">
内容の編集：<input type="text" size="80" name="communication",value="">
<input type="submit" value="送信">
</form>
<button onclick="location.href='post_index.php'">戻る</button><br>


<?php
include ('login_header.php');

$con =pg_connect($con);
if (isset($_POST['communication'])) {
$communication = $_POST['communication'];
$communication = pg_escape_string(htmlspecialchars($communication));
  pg_query($con, "insert into wgg_comm_w1_co81_pro1_ci1_pl1_p1_tb (communication) values('$communication')");
}
try{
$rs = pg_query($con,"select id,first_timestamp,communication from wgg_comm_sc.wgg_comm_w1_co81_pro1_ci1_pl1_p1_tb order by id desc");
}catch (Exception $ex) {
print('error');
}

while ($row = pg_fetch_array($rs)) {
print ('id='.$row['id']);
print ('時間='.$row['first_timestamp']);
print ('   内容= '.$row['communication'] . "<br>\n");
}


pg_close($con);
?>
</body>
</html>
