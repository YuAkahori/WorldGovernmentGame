<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$conn = "host=153.127.39.194 dbname=wgg_db user=wgg_dbmaster password=adgj1192";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

print('wgg_dbmasterの居場所を表示します。<br>');

pg_set_client_encoding("utf8");

$result = pg_query('SELECT * FROM wgg_location_sc.wgg_location_wgg_dbmaster_tb');
if (!$result) {
    die('クエリーが失敗しました。'.pg_last_error());
}
//print('wgg_dbmasterの居場所を表示します。<br>')
for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
//    print('id='.$rows['id'].' ');
    print('作成時間='.$rows['first_timestamp'].'<br>');
    print('X座標='.$rows['mylocation_x'].'<br>');
    print('Y座標='.$rows['mylocation_y'].'<br>');
$now_location_x=$rows['mylocation_x'];


}

$close_flag = pg_close($link);

if ($close_flag){
   // print('切断に成功しました。<br>');

}


     $img_size_width1 = "10px";
     $img_size_height1 = "10px";



     $img_size_width = "10px";
     $img_size_height = "10px";

     $img_location_x  = $rows['mylocation_x'];
     $img_location_y  = $rows['mylocation_y'];



?>



</body>


<img src="tile1.jpg" 
width=<?php echo $img_size_width1; ?> 
height=<?php echo $img_size_height1; ?> 
alt=""><br>


<img src="tile1.jpg" 
width=<?php echo $img_size_width; ?>
height=<?php echo $img_size_height; ?>
alt=""><br>



<table border="1" cellspacing="0" cellpadding="0">
<tr>
<td><img src="tile1.jpg"></td>
<td><img src="tile1.jpg"></td>
<td><IMG src="tile1.jpg"></td>
</tr>
</table>

<canvas id=canvas001 width=1500 height=510></canvas>
<script>

window.onload = function() {
  const canvas001 = document.getElementById("canvas001");
    if (canvas001.getContext) {
      const context001 = canvas001.getContext("2d");//2次元描画
 context001.strokeRect(0,0,750,500);

var x = 0;
var img = new Image();
 img.src ='tile1.jpg';
 img.onload = function(){
 move();
 };

function move(){
lx=<?php echo $img_location_x; ?> 
ly=<?php echo $img_location_y; ?> 

context001.drawImage(img, lx,ly);
};
};
};
</script>


</html>
