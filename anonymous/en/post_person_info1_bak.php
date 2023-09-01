<html>
<head><title>PERSON INFORMATION</title></head>
<body>

<?php

function convert_enc($str){
    $from_enc = 'utf8';
    $to_enc = 'utf8';
    return mb_convert_encoding($str, $to_enc, $from_enc);
}

$dsn = 'pgsql:dbname=wgg_db host=153.127.39.194 port=5432';
$user = 'wgg_dbmaster';
$password = 'adgj1192';

try{
    $dbh = new PDO($dsn, $user, $password);


print('プレイヤーの個人情報を表示します。<br><br>');

$id = 1; //プレーヤのid

    $sql = 'select * from wgg_info_person_sc.wgg_info_person_1_tb ';
    foreach ($dbh->query($sql) as $row) {
//        print(("カード番号＝".$row['cards_special_id']."<br>"));
 //       print(("カード名＝".$row['cards_name_ja_txt'])."<br>"));
 //       print(("カードランク＝".$row['cards_rank']."<br>"));
 //       print("説明＝".$row['number_of_sheets']."<br>"));
      print("name＝".$row['first_name_en']."<br>");
      print("family name＝".$row['family_name_en']."<br>");
      print("苗字＝".$row['family_name_ja']."<br>");
      print("名前＝".$row['first_name_ja']."<br>");
//      print("説明＝".$row['explanation_ja']."<br>");
//      print("カード所有者＝".$row['owner_name']."<br><br>");

}
    $sql1 = 'select * from wgg_location_sc.wgg_location_wgg_dbmaster_tb ';
    foreach ($dbh->query($sql1) as $row) {
//        print(("カード番号＝".$row['cards_special_id']."<br>"));
 //       print(("カード名＝".$row['cards_name_ja_txt'])."<br>"));
 //       print(("カードランク＝".$row['cards_rank']."<br>"));
 //       print("説明＝".$row['number_of_sheets']."<br>"));
      print("X座標＝".$row['mylongitude_x']."<br>");
      print("Y座標＝".$row['mylatitude_y']."<br>");
 //     print("苗字＝".$row['family_name_ja']."<br>");
 //     print("名前＝".$row['first_name_ja']."<br>");
 //     print("説明＝".$row['explanation_ja']."<br>");
 //     print("カード所有者＝".$row['owner_name']."<br><br>");
        }

    $sql2 = 'select * from wgg_cards_sc.wgg_cards_owner_math_basic_tb where owner_id=1 ';
    foreach ($dbh->query($sql2) as $row) {
//        print(("カード番号＝".$row['cards_special_id']."<br>"));
 //       print(("カード名＝".$row['cards_name_ja_txt'])."<br>"));
 //       print(("カードランク＝".$row['cards_rank']."<br>"));
 //       print("説明＝".$row['number_of_sheets']."<br>"));
      print("id＝".$row['owner_id']."<br>");
      print("name＝".$row['owner_first_name']."<br>");
 //     print("苗字＝".$row['family_name_ja']."<br>");
 //     print("名前＝".$row['first_name_ja']."<br>");
 //     print("説明＝".$row['explanation_ja']."<br>");
 //     print("カード所有者＝".$row['owner_name']."<br><br>");
        }

  $sql3 = 'select * from wgg_money_sc.wgg_money_w1_p1_tb where money_special_id=1 ';
    foreach ($dbh->query($sql3) as $row) {
//        print(("カード番号＝".$row['cards_special_id']."<br>"));
 //       print(("カード名＝".$row['cards_name_ja_txt'])."<br>"));
 //       print(("カードランク＝".$row['cards_rank']."<br>"));
        print("money_special_id＝".$row['money_special_id']."<br>");
        //数値の方は　integer型なので、こちらを使うこと。
        $money_wld = $row['money_amount_wgm'];
        //３桁のストリング型へ変換するが、表示のみに使うこと。
        $money1_wld= number_format($money_wld);
        print("世界ゲーム通貨の保有額（WGM）＝".$money1_wld."<br>");
        $money_yan = $row['money_amount_yan'];
        $money1_yan=number_format($money_yan);


        print("ジャパ国通貨の保有額(YAN)＝".$money1_yan."<br>");
 //     print("苗字＝".$row['family_name_ja']."<br>");
 //     print("名前＝".$row['first_name_ja']."<br>");
 //     print("説明＝".$row['explanation_ja']."<br>");
 //     print("カード所有者＝".$row['owner_name']."<br><br>");
        echo gettype ($money1_wld)."<br>";
        $moneyint_wld =str_replace(',','',$money1_wld);
        $moneyint_wld =(int)$moneyint_wld;
        echo $moneyint_wld."<br>";
        echo gettype ($moneyint_wld)."<br>";
        echo $money_wld."<br>";
        echo gettype ($money_wld);
}



//$id=$row['cards_special_id'];
//$ans= $row['answer_number'];
// $num =1; 
//if ($num ==1)
// {// print(($row[1]));
//session_start();
//if (!isset ($_session['ansbefore']))
//{$_session['ansbefore']=1;};


}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}
//接続を切る
$dbh = null;

?>
<style>

input {
  width:15%;
  font-size:25px;
  color:#FFFFFF;
  text-align:center;
  display:inline-block;
  padding:20px 0 20px;
  background:#6BCBF6;
  border-radius: 20px;
}
</style>

<form action="./post_answer1.php" method="get">
<!--
<br>
<input type="hidden" name="text1" value ="<?php echo $ans; ?>" >
<input type = "submit"name='bt1'value =1 ></input>
<input type = "submit"name='bt1'value =2 ></input>
<input type = "submit"name='bt1'value =3 ></input>
<input type = "submit"name='bt1'value =4 ></input>
-->
 <br>
</form>


<?php

// print("答えは　".$ans."<br><br>");
// echo $_session['ansbefore'];


//up
    //$result = "";
if (isset($_POST['bt_1'])) 
{
header("Location:post_1.php");

}
//dowm
elseif (isset($_POST['bt_2'])) 
{
 header("Location:post_2.php");

}
//left
elseif (isset($_POST['bt_3']))
{
 header("Location:post_3.php");

}
//right
elseif (isset($_POST['bt_4']))
{
 header("Location:post_4.php");

}
//４　リスト表示
elseif (isset($_POST['bt_5']))
{
print("ボタン5<br><br>");
//<form action="post_math_basic1.php" method="post">

}
?>
</body>
</html>
