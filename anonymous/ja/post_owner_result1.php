<html>
<head><title>OWNER SEARCH</title></head>
<body>

<?php

$x = $_GET['datax'];
$y = $_GET['datay'];


include('login_header.php');
$link = pg_connect($con);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

print('10度ごとの指定位置のオーナー情報を表示します。<br>');

pg_set_client_encoding("utf8");


if (-180<$x && $x < 180  ) {
if (-90 < $y && $y < 90){
$result = pg_query("select * from   wgg_land_registry_sc.wgg_land_registry_s10_tb
where lr_longitude_10_x=$x and lr_latitude_10_y=$y ");
if (!$result) {
    die('クエリーが失敗しました。'.pg_last_error());
}
                        }
                        }
                    
//print('wgg_dbmasterの居場所を表示します。<br>')
for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
//    print('id='.$rows['id'].' ');
    print('検索id='.$rows['lr_auto_id'].'<br>');
    print('X座標='.$rows['lr_longitude_10_x'].'<br>');
    print('Y座標='.$rows['lr_latitude_10_y'].'<br>');
   print('オーナー情報='.$rows['lr_owner_name'].'<br>');

//$now_location_x=$rows['mylongitude_x'];


}

$close_flag = pg_close($link);

if ($close_flag){
   // print('切断に成功しました。<br>');

}


//     $img_size_width1 = "10px";
//     $img_size_height1 = "10px";



 //    $img_size_width = "10px";
 //    $img_size_height = "10px";

 //    $img_location_x  = (int)$rows['mylongitude_x'];
 //    $img_location_y  = (int)$rows['mylatitude_y'];
//echo gettype ($img_location_x)."\n";


?>

<!--

</body>


<canvas id=canvas001 width=720 height=360></canvas>
<script>

window.onload = function() {
  const canvas001 = document.getElementById("canvas001");
    if (canvas001.getContext) {
      const context001 = canvas001.getContext("2d");//2次元描画
 context001.strokeRect(0,0,720,360);

var x = 0;
var img = new Image();
 img.src ='./tile/tile10_b.jpg';
 img.onload = function(){
 move();
 };

function move(){
let lx=<?php echo $img_location_x; ?> 
let ly=<?php echo $img_location_y; ?> 
//int lx = (int)lx;
//int ly = (int)ly;

var isType = function(x){
    return (x != x)? "NaN": (x === Infinity || x === -Infinity)? "Infinity": Object.prototype.toString.call(x).slice(8, -1);
};
console.log(isType(lx));


// 横幅が７２０で、半分が３６０　ポストグレでは、１８０が中心だから、＋１８０をして、
//升目が１０あるから、５を引く
// yで３８は、　９０以下は、90-38＝52　差し引く
//
//
//
//
//

 let l_now_x = -50;

if (0<=lx &&  lx<=180)  {l_now_x = lx*2 + 40};
if (-20<=lx &&  lx<0)  {l_now_x = lx*2 + 40};
if (-180<=lx && lx < -20) {l_now_x =760+lx*2};


let l_now_y =  -50;
if (0<=ly && ly<=90)  {l_now_y = 180-ly*2 -5};
if (-90<=ly && ly <0)  {l_now_y = 180-ly*2 -5};


context001.drawImage(img,l_now_x,l_now_y);


};
};
};
</script>


</html>
-->

