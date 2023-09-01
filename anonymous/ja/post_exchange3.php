<?php



$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];
$e = $_GET['e'];
echo $a;
echo $b;
echo $c;
echo $d;
echo $e;

$conn = "host=153.127.39.194 dbname=wgg_db user=wgg_dbmaster password=adgj1192";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

 $result = pg_query("update  wgg_money_sc.wgg_money_w1_p1_tb  
 set money_amount_wgm = '$a',money_amount_yan = '$b'");
//for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
//    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
//    print('id='.$rows['id'].' ');
//$amount_wgm = $rows['money_amount_wgm'];
//$amount_yan = $rows['money_amount_yan'];

//print('世界ゲーム通貨='.$rows['money_amount_wgm'].'<br>');
//    print('ジャパ国通貨='.$rows['money_amount_yan'].'<br>');
//    print('tesuuryou='.$rows['money_'].'<br>');
//$now_location_x=$rows['mylongitude_x'];
                                              //  }
$dint = (int)$d;
 $result1 = pg_query("insert into  wgg_money_sc.wgg_money_income_w1_tb 
 (w1_income_amount_wgm,w1_income_place) values ('$dint','exchange')");
//for ($i = 0 ; $i < pg_num_rows($result1) ; $i++){
//    $rows = pg_fetch_array($result1, NULL, PGSQL_ASSOC);
//    print('id='.$rows['id'].' ');
//$e1 = $rows['exchange_1wgm_yan'];
//$e2 = $rows['exchange_fee_1wgm_yan'];
//print('世界ゲーム通貨 ジャパ国レート='.$rows['exchange_1wgm_yan'].'<br>');
//    print('ジャパ国通貨='.$rows['exchange_fee_1wgm_yan'].'<br>');
//    print('tesuuryou='.$rows['money_'].'<br>');
//$now_location_x=$rows['mylongitude_x'];
//                                                }
//$sum1=$wgm * $e1;
//$sum2=$wgm * $e2;
//echo $sum1."--";
//echo $sum2."--";

//保有のワールドゲームマネーから交換するワールドゲームマネーを引く
//$amount_wgm = $amount_wgm - $wgm;
//為替手数料は、yanから引く
//$amount_yan1 = $amount_yan - $sum2;
//交換された額をyanに足す
//$amount_yan2 = $amount_yan1 +  $sum1;
//手数料は、世界政府の収入になる。
//$sell_w1_yan = $sum2;
//$sell_w1_wgm = $sell_w1_yan / $e1;
//print ($amount_wgm."WGM;". $amount_yan2."YAN;". $sell_w1_yan."YAN;".$sell_w1_wgm."WGM")
$eint = (int)$e;
 $result2 = pg_query("insert into  wgg_money_sc.wgg_money_income_co81_tb 
 (co81_income_amount_yan,co81_income_place) values ('$eint','exchange')");



?>

