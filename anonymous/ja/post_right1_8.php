<html>
<body>

<?php

$conn = "host=153.127.39.194 dbname=wgg_db user=wgg_dbmaster password=adgj1192";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

pg_set_client_encoding("utf8");
//$result = pg_query('select * from wgg_location_sc.wgg_location_wgg_dbmaster_tb where id =1');

//$now_location_y=$location_y[0]-$10;
$result = pg_query('update wgg_location_sc.wgg_location_wgg_dbmaster_tb set mylongitude_x=mylongitude_x+1  where id =1 ');
if (!$result) {
    die('クエリーが失敗しました。'.pg_last_error());
for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
}
$close_flag = pg_close($link);

if ($close_flag){
   // print('切断に成功しました。<br>');

};
};
require_once 'post_sell1.php';
sell(141,35);



?>
<BODY onLoad=setTimeout("location.href='post_myinfo8_co.php'",0)>

</body>
</html>
