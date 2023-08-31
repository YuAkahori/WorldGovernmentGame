<html>
<head><title>WORLD INFORMATION</title></head>
<body>

<?php

include('login_header.php');
$link = pg_connect($con);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
            }

print('世界全体の情報を表示します。<br>');

pg_set_client_encoding("utf8");

$result = pg_query('SELECT * FROM wgg_law_sc.wgg_law_info_w1_tb');

if (!$result)   {
    die('クエリーが失敗しました。'.pg_last_error());
                }

$location_x = array();
$location_y = array();

for ($i = 0 ; $i < pg_num_rows($result) ; $i++) {
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
//    print('auto id='.$rows['w_auto_id'].'<br>');
    print('世界の名前（英語）='.$rows['w_name_en'].'<br>');
    print('世界の名前（日本語）='.$rows['w_name_ja'].'<br>');
    print('使用言語='.$rows['w_language'].'<br>');
    print('使用通貨='.$rows['w_money'].'<br>');
    print('世界の形状='.$rows['w_shape'].'<br>');
    print('世界の気候='.$rows['w_climate'].'<br>');
 print('世界の時間='.$rows['w_time'].'<br>');
 print('世界の重力='.$rows['w_gravity'].'<br>');
 print('世界の大気='.$rows['w_atmosphere'].'<br>');
 print('世界の暦='.$rows['w_calender'].'<br>');

//  $location_x[] = $rows['mylongitude_x'];
//  $location_y[] = $rows['mylatitude_y'];
    

                                                }

$result1 = pg_query('SELECT SUM(w1_income_amount_wgm) FROM wgg_money_sc.wgg_money_income_w1_tb');

if (!$result1)   {
    die('クエリーが失敗しました。'.pg_last_error());
                }
    $rows = pg_fetch_array($result1, NULL, PGSQL_ASSOC);
    print('世界収入(WGM)='.$rows['sum'].'<br>');
 

$close_flag = pg_close($link);

if ($close_flag){
   // print('切断に成功しました。<br>');

                }


//     $img_location_x  = (int)$rows['mylongitude_x'];
//     $img_location_y  = (int)$rows['mylatitude_y'];
//echo gettype ($img_location_x)."\n";

?>





</html>
