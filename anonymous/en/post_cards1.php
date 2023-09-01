<html>
<head><title>ITEM BOOK</title></head>
<body>

<?php

function convert_enc($str){
    $from_enc = 'utf8';
    $to_enc = 'utf8';
    return mb_convert_encoding($str, $to_enc, $from_enc);
}

include ('login_header.php');
try{
    $dbh = new PDO($dsn, $user, $password);


print('全カードリストを表示します。<br><br>');

    $sql = 'select * from wgg_cards_sc.wgg_cards_list_tb order by cards_special_id';
    foreach ($dbh->query($sql) as $row) {
//        print(("カード番号＝".$row['cards_special_id']."<br>"));
 //       print(("カード名＝".$row['cards_name_ja_txt'])."<br>"));
 //       print(("カードランク＝".$row['cards_rank']."<br>"));
 //       print("説明＝".$row['number_of_sheets']."<br>"));
      print("指定カード番号＝".$row['cards_special_id']."<br>");
      print("カード名＝".$row['cards_name_ja_txt']."<br>");
      print("カードランク＝".$row['cards_rank']."<br>");
      print("カード枚数＝".$row['number_of_sheets']."<br>");
      print("説明＝".$row['explanation_ja']."<br>");
      print("カード所有者＝".$row['owner_name']."<br><br>");

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
