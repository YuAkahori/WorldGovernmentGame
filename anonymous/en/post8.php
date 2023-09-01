<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$conn = "host=153.127.39.194 dbname=wgg_db user=wgg_dbmaster password=adgj1192";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

//print('接続に成功しました。<br>');

pg_set_client_encoding("utf8");

$result = pg_query('SELECT * FROM world1');
if (!$result) {
    die('クエリーが失敗しました。'.pg_last_error());
}

$rows = pg_fetch_all($result);
    print($rows);
//    print('作成時間='.$rows['first_timestamp']);
//    print(',　　　 内容='.$rows['communication'].'<br>');


$close_flag = pg_close($link);

if ($close_flag){
   // print('切断に成功しました。<br>');
}

?>
</body>
</html>
