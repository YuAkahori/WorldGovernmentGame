<html>
<head><title>MIYA CITY</title></head>
<body>

<?php

include('login_header.php');
$link = pg_connect($con);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

print($use.'のミヤ市内での居場所を表示します。138.5-x-138.75 35.16-y-35.46 <br>');

pg_set_client_encoding("utf8");
$state = 'SELECT * FROM wgg_location_sc.wgg_location_'.$use.'_tb ';

$result = pg_query($state);

if (!$result) {
    die('クエリーが失敗しました。'.pg_last_error());
}

$location_x = array();
$location_y = array();

for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
    print('id='.$rows['id']);
    print('作成時間='.$rows['first_timestamp']);
    print('X座標='.$rows['mylongitude_x']);
    print('Y座標='.$rows['mylatitude_y'].'<br>');
  $location_x[] = $rows['mylongitude_x'];
  $location_y[] = $rows['mylatitude_y'];
    

}

if ($rows['mylongitude_x']==141 && $rows['mylatitude_y']==35)
{
$x = $rows['mylongitude_x'];
$y = $rows['mylatitude_y'];
$x = (string)$x;
$y = (int)$y;
print ($x);
print ($y);
print ('<br>');
$result1 = pg_query('SELECT * FROM wgg_items_sc.wgg_items_shop1_tb');
if (!$result1) {
    die('クエリーが失敗しました。'.pg_last_error());
}

$item = array();

for ($i = 0 ; $i < pg_num_rows($result1) ; $i++){
    $rows1 = pg_fetch_array($result1, NULL, PGSQL_ASSOC);
    print('items_name='.$rows1['items_name']);
    print(';items_sell_price='.$rows1['items_sell_price']);
    print(';items_buy_price='.$rows1['items_buy_price']);
    print(';items_quantity='.$rows1['items_quantity']);
  print(';sell_account='.$rows1['sell_account']);
  print(';buy_account='.$rows1['buy_account']);
  print(';shops_id='.$rows1['shops_id'].'<br>');



}
 
$si =1;
$sei=1;
$ii=1;
$isp =300;
$pi=1;
$sn=1;


$result2= pg_query("insert into wgg_items_sc.wgg_items_seller_list_tb 
(shops_id,sellers_id,items_id,items_sell_price,persons_id,sell_number,items_sell_location_x,items_sell_location_y) 
values ('$si','$sei','$ii','$isp','$pi','$sn','$x','$y') " );

$result3=pg_query("update wgg_items_sc.wgg_items_shop1_tb set items_quantity=items_quantity-1");

print ('売却リストに登録しました。<br>');
if (!$result2) {
    die('クエリーが失敗しました。'.pg_last_error());
}

}

$close_flag = pg_close($link);

if ($close_flag){
   // print('切断に成功しました。<br>');

}


     $img_location_x  = (int)$rows['mylongitude_x'];
     $img_location_y  = (int)$rows['mylatitude_y'];
//echo gettype ($img_location_x)."\n";

?>

</body>
<canvas id=canvas001 width=500 height=600></canvas>
<script>

window.onload = function() {
  const canvas001 = document.getElementById("canvas001");
    if (canvas001.getContext) {
      const context001 = canvas001.getContext("2d");//2次元描画
 context001.strokeRect(0,0,500,600);

var x = 0;
var img = new Image();
 img.src ='./tile/tile10_b.jpg';
 img.onload = function(){
//id 1 の座標が掲載される 
 <?php $n2 =0?>
var lx=<?php echo $location_x[$n2]; ?> ;
var ly=<?php echo $location_y[$n2]; ?> ;

 move(lx,ly);
// move(141,35);
// move(136.5,38.6);
//if (lx==136.5 && ly==38.6){alert("第２目標地点に到達しました");};

};

function move(val1=122,val2=25){
let lx=<?php echo $img_location_x; ?> 
let ly=<?php echo $img_location_y; ?> 
//int lx = (int)lx;
//int ly = (int)ly;

// 横幅が680 縦幅が520 ある
// xは、１２０から１５４の間。差し引き　３４＊２０　６８０
// yは　２０から４６の間　２６*２０　５２０ ２０倍している
//升目が１０あるから、５を引く
// yで３８は、　９０以下は、90-38＝52　差し引く
//120 20 左下 120 46 左上


let l_now_x = -50;

if (138.5<=val1 &&  val1<=138.75)
     {l_now_x = (val1-138.5)*2000-5};

let l_now_y =  -50;
if (35.16<=val2 && val2<=35.46)
     {l_now_y = 　600- (val2-35.16)*2000  -5};
context001.drawImage(img,l_now_x,l_now_y);


};
};
};
</script>

<style>
button {
  width:20%;
  font-size:10px;
  color:#FFFFFF;
  text-align:center;
  display:inline-block;
  padding:20px 0 20px;
  background:#6BCBF6;
  border-radius: 20px;
}
</style>
 <form action="post_myinfo1_ci.php" method="post">

    <br>
    <button type="submit" name="bt_up" >上</button>
    <button type="submit" name="bt_down">下</button>
    <button type="submit" name="bt_left">左</button>
    <button type="submit" name="bt_right">右</button>
         
<?php



//up
    $result = "";
    if (isset($_POST['bt_up'])) {
        header("Location:post_up1_a1_001.php");
    }
//dowm
    elseif (isset($_POST['bt_down'])) {
        header("Location:post_down1_a1_001.php");
        }
//left
    elseif (isset($_POST['bt_left'])){
        header("Location:post_left1_a1_001.php");
        }
//right
elseif (isset($_POST['bt_right'])){
        header("Location:post_right1_a1_001.php");
        }
//４　リスト表示
elseif (isset($_POST['bt_list'])){
        header("Location:post_register1.php");
        }
?>

</html>
