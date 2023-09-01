<?php

function sell($a,$b)
    {//function

 $conn = "host=153.127.39.194 dbname=wgg_db user=wgg_dbmaster password=adgj1192";
$link = pg_connect($conn);
if (!$link) {
//    die('接続失敗です。'.pg_last_error());
}


$result = pg_query('SELECT * FROM wgg_location_sc.wgg_location_wgg_dbmaster_tb order by id desc');

if (!$result)   {
//    die('クエリーが失敗しました。'.pg_last_error());
                }

$location_x = array();
$location_y = array();

for ($i = 0 ; $i < pg_num_rows($result) ; $i++) {
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
//    print('id='.$rows['id']);
//    print('作成時間='.$rows['first_timestamp']);
//    print('X座標='.$rows['mylongitude_x']);
//    print('Y座標='.$rows['mylatitude_y'].'<br>');
  $location_x[] = $rows['mylongitude_x'];
  $location_y[] = $rows['mylatitude_y'];
 
                                                } 
if ($rows['mylongitude_x']==$a && $rows['mylatitude_y']==$b)
    {//doko
$x = $rows['mylongitude_x'];
$y = $rows['mylatitude_y'];
$x = (string)$x;
$y = (int)$y;
//print ($x);
//print ($y);
print ('<br>');
$result1 = pg_query('SELECT * FROM wgg_items_sc.wgg_items_shop1_tb');
if (!$result1)  {
    die('クエリーが失敗しました。'.pg_last_error());
                }

$item = array();

for ($i = 0 ; $i < pg_num_rows($result1) ; $i++){
    $rows1 = pg_fetch_array($result1, NULL, PGSQL_ASSOC);
//    print('items_name='.$rows1['items_name']);
//    print(';items_sell_price='.$rows1['items_sell_price']);
//    print(';items_buy_price='.$rows1['items_buy_price']);
//    print(';items_quantity='.$rows1['items_quantity']);
//  print(';sell_account='.$rows1['sell_account']);
//  print(';buy_account='.$rows1['buy_account']);
//  print(';shops_id='.$rows1['shops_id'].'<br>');
                                                }
 

$si =1;
$sei=1;
$ii=1;
$isp =300;
$pi=1;
$sn=1;
$x =$x;
$y =$y;

$result2= pg_query("insert into wgg_items_sc.wgg_items_seller_list_tb 
(shops_id,sellers_id,items_id,items_sell_price,persons_id,sell_number,items_sell_location_x,items_sell_location_y) 
values ('$si','$sei','$ii','$isp','$pi','$sn','$x','$y') " );

$result3=pg_query("update wgg_items_sc.wgg_items_shop1_tb set items_quantity=items_quantity-1");

print ('売却リストに登録しました。<br><br>');

if (!$result2)  {
    die('クエリーが失敗しました。'.pg_last_error());
                }
}//doko
}//function


?>
