<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Wrire your comment.</title>
</head>
<body>
<form method="post" action="post_register2.php">
Edit comment<input type="text" size="80" name="communication",value="">
<input type="submit" value="submit">
</form>
<button onclick="location.href='post_index.php'">back</button><br>


<?php
include ('login_header.php');

try{

$con = new PDO($dsn,$user,$password);


if (isset($_POST['communication'])) {
$con ->beginTransaction();
//print('conn state');
$communication = $_POST['communication'];
//print ($communication.'<br>');
//$communication = pg_escape_string(htmlspecialchars($communication));
$stmt = $con->prepare ("insert into wgg_comm_sc.wgg_comm_anonymous_tb (communication) values(:comm)");
//$stmt-> bindParam(':comm',$communicaton);
$res= $stmt ->execute(array(':comm'=>$communication));
$con->commit();
}
$con->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//$res->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$rs = "select id,first_timestamp,communication from wgg_comm_sc.wgg_comm_anonymous_tb order by id desc";
foreach ($con->query($rs) as $row )
  { print($row['id']);
    print('  '.$row['first_timestamp']);
    print('  '.$row['communication']."<br>");
 }

}catch (PDOException $e) {
print('権限がありません。');
}

//while ($row = pg_fetch_array($rs)) {
//print ('id='.$row['id']);
//print ('時間='.$row['first_timestamp']);
//print ('   内容= '.$row['communication'] . "<br>\n");

$con = null;
?>
</body>
</html>
