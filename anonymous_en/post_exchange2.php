<?php



$wgm = $_GET['money_wgm'];
$yan = $_GET['money_yan'];
$comment = $_GET['bt1'];
echo $wgm;
echo $yan;
echo $comment;


$conn = "host=153.127.39.194 dbname=wgg_db user=wgg_dbmaster password=adgj1192";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

 $result = pg_query("select * from  wgg_money_sc.wgg_money_w1_p1_tb");
for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
//    print('id='.$rows['id'].' ');
$amount_wgm = $rows['money_amount_wgm'];
$amount_yan = $rows['money_amount_yan'];

print('世界ゲーム通貨='.$rows['money_amount_wgm'].'<br>');
    print('ジャパ国通貨='.$rows['money_amount_yan'].'<br>');
//    print('tesuuryou='.$rows['money_'].'<br>');
//$now_location_x=$rows['mylongitude_x'];
                                                }

 $result1 = pg_query("select * from  wgg_money_sc.wgg_money_exchange_tb");
for ($i = 0 ; $i < pg_num_rows($result1) ; $i++){
    $rows = pg_fetch_array($result1, NULL, PGSQL_ASSOC);
//    print('id='.$rows['id'].' ');
$e1 = $rows['exchange_1wgm_yan'];
$e2 = $rows['exchange_fee_to_w1_1wgm_yan'];
$e3 = $rows['exchange_fee_to_co81_1wgm_yan'];
print('世界ゲーム通貨 ジャパ国レート='.$rows['exchange_1wgm_yan'].'<br>');
    print('ジャパ国通貨='.$rows['exchange_fee_to_w1_1wgm_yan'].'<br>');
//    print('tesuuryou='.$rows['money_'].'<br>');
//$now_location_x=$rows['mylongitude_x'];
                                               }
$sum1=$wgm * $e1;
//世界への手数料
$sum2=$wgm * $e2;
//ジャパ国への手数料
$sum3=$wgm * $e3;
echo $sum1."--";
echo $sum2."--";

//保有のワールドゲームマネーから交換するワールドゲームマネーを引く
$amount_wgm = $amount_wgm - $wgm;
//為替手数料は、yanから引く
$amount_yan1 = $amount_yan - $sum2-$sum3;
//交換された額をyanに足す
$amount_yan2 = $amount_yan1 +  $sum1;
//手数料は、世界政府の収入になる。
$sell_w1_yan = $sum2;
$sell_w1_wgm = $sell_w1_yan / $e1;
//手数料を国家の収入にもした。
$sell_co81_yan = $sum3;

print ($amount_wgm."WGM;". $amount_yan2."YAN;". $sell_w1_yan."YAN;".$sell_w1_wgm."WGM")

?>

<form action="./post_exchange3.php" method="get">

<br>
<input type = "text" name= 'a' value ="<?php echo $amount_wgm ; ?>"><br>
<input type = "text" name= 'b' value ="<?php echo $amount_yan2 ;?>"><br>
<input type = "text" name= 'c' value ="<?php echo $sell_w1_yan ;?>"><br>
<input type = "text" name= 'd' value ="<?php echo $sell_w1_wgm ;?>"><br>
<input type = "text" name= 'e' value ="<?php echo $sell_co81_yan;?>"><br>


<input type = "submit" name='bt1' value ="両替する" ></input>
<input type = "submit" name='bt1' value ="" ></input>
<input type = "submit" name='bt1' value ="" ></input>
<input type = "submit" name='bt1' value ="" ></input>
<input type = "submit" name='bt1' value = ></input>
 <br>
</form>


