<html>
<head><title>PHP TEST</title></head>
<body>

<?php

ob_start();
include("post_math_basic1.php");
ob_clean();
print ("回答4<br>");
print("問題番号は、".$num);
print("解答は、".$ans."<br><br>");
if ($ans==4)
{print ("正解");}
else{print("不正解");}


















/*

function convert_enc($str){
    $from_enc = 'utf8';
    $to_enc = 'utf8';

//    return mb_convert_encoding($str, $to_enc, $from_enc);
}

$dsn = 'pgsql:dbname=wgg_db host=153.127.39.194 port=5432';
$user = 'wgg_dbmaster';
$password = 'adgj1192';

try{
    $dbh = new PDO($dsn, $user, $password);

   // print('接続に成功しました。<br>');

    $sql = 'select * from wgg_quizbook_sc.wgg_quizbook_math_basic_tb order by random()  limit 1 ';
    foreach ($dbh->query($sql) as $row) {
   //     print($row['quiz_id']."\t");


        print(($row['question_txt'])."<br><br>");};
      $num= 1;
        print($num."<br><br>");

if ($num =1)
 {// print(($row[1]));
print(($row['choice_correct_1_txt']));
print(($row['choice_incorrect_2_txt']));
print(($row['choice_incorrect_3_txt']));
print(($row['choice_incorrect_4_txt']));
$ans =1;
}
elseif ($num =2)
{
print(($row['choice_incorrect_2_txt']));
print(($row['choice_incorrect_4_txt']));
print(($row['choice_incorrect_3_txt']));
print(($row['choice_correct_1_txt']));
$ans =4;
}
elseif ($num =3)
{
print(($row['choice_incorrect_3_txt']));
print(($row['choice_correct_1_txt']));
print(($row['choice_incorrect_4_txt']));
print(($row['choice_incorrect_2_txt']));
$ans =2;
}

elseif ($num =4)
{
print(($row['choice_incorrect_4_txt']));
print(($row['choice_incorrect_3_txt']));
print(($row['choice_incorrect_2_txt']));
print(($row['choice_correct_1_txt']));
$ans=4;
};

}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}
//接続を切る
$dbh = null;

?>


<style>
button {
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
 <form action="post_math_basic1.php" method="post">
<?php  print($num."<br><br>");
?>
    <br>
    <button type="submit" name="bt_1" >1</button>
    <button type="submit" name="bt_2">2</button>
    <button type="submit" name="bt_3">3</button>
    <button type="submit" name="bt_4">4</button>
         
<?php



//up
    $result = "";
    if (isset($_POST['bt_1'])) {
        header("Location:post_1.php");
    }
//dowm
    elseif (isset($_POST['bt_2'])) {
        header("Location:post_2.php");
        }
//left
    elseif (isset($_POST['bt_3'])){
        header("Location:post_3.php");
        }
//right
elseif (isset($_POST['bt_4'])){
        header("Location:post_4.php");
        }
//４　リスト表示
elseif (isset($_POST['bt_list'])){
        header("Location:post_register1.php");
        }
?>




</body>
</html>
*/

?>

