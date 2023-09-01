<html>
<body>

<?php

include('login_header.php');
$link = pg_connect($con);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

pg_set_client_encoding("utf8");
//$result = pg_query('select * from wgg_location_sc.wgg_location_wgg_dbmaster_tb where id =1');

//$now_location_y=$location_y[0]-$10;
$state = 'update wgg_location_sc.wgg_location_'.$use.'_tb set mylongitude_x=mylongitude_x+0.1  where id =1 ';

$result = pg_query($state);
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
<BODY onLoad=setTimeout("location.href='post_myinfo1_pr.php'",0)>

</body>
</html>
