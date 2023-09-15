<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$conn = "host=153.127.39.194 dbname=wgg_db user=wgg_a3 password=111111";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
            }

print('wgg_dbmasterの国内での居場所を表示します。120 X 154 20 Y  46 <br>');

pg_set_client_encoding("utf8");

$result = pg_query('SELECT * FROM wgg_location_sc.wgg_location_wgg_dbmaster_tb');
if (!$result) {
    die('クエリーが失敗しました。'.pg_last_error());
}
$location_x = array();
$location_y = array();


//print('wgg_dbmasterの居場所を表示します。<br>')
for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
//    print('id='.$rows['id'].' ');
    print('作成時間='.$rows['first_timestamp'].'<br>');
    print('X座標='.$rows['mylongitude_x'].'<br>');
    print('Y座標='.$rows['mylatitude_y'].'<br>');

  $location_x[] = $rows['mylongitude_x'];
  $location_y[] = $rows['mylatitude_y'];
    echo $location_x[$i];
    echo $location_y[$i];
$now_location_x=$rows['mylongitude_x'];


  }

$close_flag = pg_close($link);

if ($close_flag){
   // print('切断に成功しました。<br>');}


     $img_size_width1 = "10px";
     $img_size_height1 = "10px";



     $img_size_width = "10px";
     $img_size_height = "10px";

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

var  x = 0;
var img = new Image();
 img.src ='./tile/tile10_b.jpg';
 img.onload = function(){
//for (let n=1 ;n<2;n++)

//var n1 = 0;


//n1 =<?php echo $n2; ?>;
//n3 =<?php pg_num_rows($result); ?>;

<?php $n2 =1?>
var lx=<?php echo $location_x[$n2]; ?> ;
var ly=<?php echo $location_y[$n2]; ?> ;
move(lx,ly);
//<?php $n2 =$n2+1?>


//var lx=<?php echo $location_x[$n2]; ?> 
//var ly=<?php echo $location_y[$n2]; ?> 

//move(lx,ly)
    };
function move(val1=125,val2=25){
//int val1 = (int)val1;
//int val2 = (int)val2;
// 横幅が680 縦幅が520 ある
// xは、１２０から１５４の間。差し引き　３４＊２０　６８０
// yは　２０から４６の間　２６*２０　５２０ ２０倍している
//升目が１０あるから、５を引く
// yで３８は、　９０以下は、90-38＝52　差し引く
//120 20 左下 120 46 左上

let l_now_x = -50;

if (120<=val1 &&  val1<=154){l_now_x = (val1-120)*20-5};

let l_now_y =  -50;
if (20<=val2 && val2<=46){l_now_y = 　520- (val2-20)*20  -5};

context001.drawImage(img,l_now_x,l_now_y);

};
};
};
</script>
</html>
