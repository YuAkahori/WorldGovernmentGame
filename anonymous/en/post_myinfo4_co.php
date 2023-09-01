<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$conn = "host=153.127.39.194 dbname=wgg_db user=wgg_dbmaster password=adgj1192";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

print('wgg_dbmasterの国内での居場所を表示します。120-x-154 20-y-46 <br>');

pg_set_client_encoding("utf8");

$result = pg_query('SELECT * FROM wgg_location_sc.wgg_location_wgg_dbmaster_tb order by id desc');
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
$close_flag = pg_close($link);

if ($close_flag){
   // print('切断に成功しました。<br>');

}


     $img_location_x  = (int)$rows['mylongitude_x'];
     $img_location_y  = (int)$rows['mylatitude_y'];
//echo gettype ($img_location_x)."\n";

?>

</body>
<canvas id=canvas001 width=680 height=520></canvas>
<script>

window.onload = function() {
  const canvas001 = document.getElementById("canvas001");
    if (canvas001.getContext) {
      const context001 = canvas001.getContext("2d");//2次元描画
 context001.strokeRect(0,0,680,520);

var x = 0;
var img = new Image();



// 画像ファイルを読み込む。



img.src ='./tile/tile10_b.jpg';

img.onload = function(){

//id 1 の座標が掲載される 

<?php $n2 =0?>
var lx=<?php echo $location_x[$n2]; ?> ;
var ly=<?php echo $location_y[$n2]; ?> ;

 move(lx,ly);
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

if (120<=val1 &&  val1<=154)
     {l_now_x = (val1-120)*20-5};

let l_now_y =  -50;
if (20<=val2 && val2<=46)
     {l_now_y = 　520- (val2-20)*20  -5};
context001.drawImage(img,l_now_x,l_now_y);


};
};
};
</script>

<style>
button {
  width:5%;
  font-size:10px;
  color:#FFFFFF;
  text-align:center;
  display:inline-block;
  padding:20px 0 20px;
  background:#6BCBF6;
  border-radius: 20px;
}
</style>
 <form action="post_myinfo3_co.php" method="post">

    <br>
    <button type="submit" name="bt_up" >上</button>
    <button type="submit" name="bt_down">下</button>
    <button type="submit" name="bt_left">左</button>
    <button type="submit" name="bt_right">右</button>
         
<?php



//up
    $result = "";
    if (isset($_POST['bt_up'])) {
        header("Location:post_up1.php");
    }
//dowm
    elseif (isset($_POST['bt_down'])) {
        header("Location:post_down1.php");
        }
//left
    elseif (isset($_POST['bt_left'])){
        header("Location:post_left1.php");
        }
//right
elseif (isset($_POST['bt_right'])){
        header("Location:post_right1.php");
        }
//４　リスト表示
elseif (isset($_POST['bt_list'])){
        header("Location:post_register1.php");
        }
?>





</html>
