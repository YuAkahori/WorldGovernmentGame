<html>
<head><title>LOCATION JAPA COUNTRY</title></head>
<body>

<?php

$conn = "host=153.127.39.194 dbname=wgg_db user=wgg_dbmaster password=adgj1192";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
            }

print('wgg_dbmasterのジャパ国内での居場所を表示します。売却デモ　120-x-154 20-y-46 <br>');

pg_set_client_encoding("utf8");

$result = pg_query('SELECT * FROM wgg_location_sc.wgg_location_wgg_dbmaster_tb order by id desc');

if (!$result)   {
    die('クエリーが失敗しました。'.pg_last_error());
                }

$location_x = array();
$location_y = array();

for ($i = 0 ; $i < pg_num_rows($result) ; $i++) {
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
    print('id='.$rows['id']);
    print('作成時間='.$rows['first_timestamp']);
    print('X座標='.$rows['mylongitude_x']);
    print('Y座標='.$rows['mylatitude_y'].'<br>');
//$locaton_x[0]= $rows[1];
$location_x[] = $rows['mylongitude_x'];
$location_y[] = $rows['mylatitude_y'];
    

                                                }

if ($rows['mylongitude_x']==141 && $rows['mylatitude_y']==35)
    {//doko?
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
//    print(';sell_account='.$rows1['sell_account']);
//    print(';buy_account='.$rows1['buy_account']);
//    print(';shops_id='.$rows1['shops_id'].'<br>');



                                                }

//$result2= pg_query("insert into wgg_items_sc.wgg_items_seller_list_tb 
//(shops_id,sellers_id,items_id,items_sell_price,persons_id,sell_number,items_sell_location_x,items_sell_location_y) 
//values ('$si','$sei','$ii','$isp','$pi','$sn','$x','$y') " );

//$result3=pg_query("update wgg_items_sc.wgg_items_shop1_tb set items_quantity=items_quantity-1");

//print ('売却リストに登録しました。<br>');
//if (!$result2) {
//    die('クエリーが失敗しました。'.pg_last_error());
//}

    }//doko

$close_flag = pg_close($link);

if ($close_flag){
    print('切断に成功しました。<br>');

                }


     $img_location_x  = (int)$rows['mylongitude_x'];
     $img_location_y  = (int)$rows['mylatitude_y'];
//echo gettype ($img_location_x)."\n";

?>

</body>
<canvas id=canvas001 width=680 height=520></canvas>
<script>

window.onload = function() 
                            //1
                            {
  const canvas001 = document.getElementById("canvas001");
    if (canvas001.getContext){ 
                            //2
                            
      const context001 = canvas001.getContext("2d");//2次元描画
 context001.strokeRect(0,0,680,520);

var x = 0;
var img = new Image();
 img.src ='./tile/tile10_b.jpg';
 img.onload = function()    
                            //function
                            {
//id 1 の座標が掲載される 
 <?php $n2 =0?>
var lx=<?php echo $location_x[$n2]; ?> ;
var ly=<?php echo $location_y[$n2]; ?> ;
 move(lx,ly);

//id 2
//<?php $n2=1?>;
//var lx1 = <?pho echo $location_x[$n2];?>;
//var ly1 = <?php echo $location_y[$n2];?>;
//move (0,0);

 move(141,35);
 move(136.5,38.6);
if (lx==136.5 && ly==38.6)  {alert("第２目標地点に到達しました");
                            };

                            //function
                            };

function move(val1=122,val2=25){
//3
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

if (120<=val1 &&  val1<=154)
     {l_now_x = (val1-120)*20-5
     };

let l_now_y =  -50;
if (20<=val2 && val2<=46)
     {l_now_y = 　520- (val2-20)*20  -5
     };
context001.drawImage(img,l_now_x,l_now_y);


};//3
};//2
};//1
</script>

<style>
button      {
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
 <form action="post_myinfo5_co.php" method="get">

    <br>
    <button type="submit" name="bt_up" >上</button>
    <button type="submit" name="bt_down">下</button>
    <button type="submit" name="bt_left">左</button>
    <button type="submit" name="bt_right">右</button>
         
<?php



//up
    $result = "";
    if (isset($_GET['bt_up']))      {
        header("Location:post_up1.php");
                                    }
//dowm
    elseif (isset($_GET['bt_down'])) {
        header("Location:post_down1.php");
                                    }
//left
    elseif (isset($_GET['bt_left'])){
        header("Location:post_left1.php");
                                    }
//right
elseif (isset($_GET['bt_right']))   {  
        header("Location:post_right1.php");
                                    }
//４　リスト表示
elseif (isset($_POST['bt_list']))   {
        header("Location:post_register1.php");
                                    }
?>

</html>
