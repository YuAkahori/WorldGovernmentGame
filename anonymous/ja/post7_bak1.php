<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>削除</title>
</head>
<body>
<form method="post" action="post7.php">
削除するid：<input type="text" size="80" name="id_int",value="">
<input type="submit" value="送信">
</form>
<?php
include ('login_header.php');
$con = pg_connect($con);

if (isset($_POST['id_int'])) {
$id_int = $_POST['id_int'];
$id_int2=intval($id_int);
//$id_int = pg_escape_string(htmlspecialchars($id_int));
$sql = sprintf("delete from wgg_comm_w1_co81_pro1_ci1_pl1_p1_tb where id = '%s'",$id_int2);

pg_query($con, $sql);
}
//if (!$result) {
 //   die('delete クエリーが失敗しました。'.pg_last_error());


$rs = pg_query($con, "select id,communication from wgg_comm_w1_co81_pro1_ci1_pl1_p1_tb order by id desc");
while ($row = pg_fetch_array($rs)) {
print ('id='.$row['id']);
print ('  内容='.$row['communication'] . "<br>\n");
}
pg_close($con);
?>
</body>
</html>
