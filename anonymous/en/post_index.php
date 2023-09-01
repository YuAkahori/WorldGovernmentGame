<?php



//2 登録aa
    $result = "";
    if (isset($_POST['bt_add'])) {
        header("Location:post_register2.php");
    }
//1 接続テスト
    elseif (isset($_POST['bt_connect'])) {
        header("Location:pdo_post1.php");
        }
//5 削除
    elseif (isset($_POST['bt_remove'])){
        header("Location:post7.php");
        }
//３　国内地図
elseif (isset($_POST['bt_country'])){
        header("Location:post_myinfo_co.php");
        }
//４　リスト表示
elseif (isset($_POST['bt_list'])){
        header("Location:post_register1.php");
        }

//5 現在位置        
elseif (isset($_POST['bt_mylocation'])){
        header("Location:post_myinfo1.php");
        }
//6 画像       
elseif (isset($_POST['bt_canvas'])){
        header("Location:post_canvas2.php");
        }
// 戻る       
elseif (isset($_POST['bt_back'])){
        header("Location:post_index.php");
        }

elseif (isset($_POST['bt_country1'])){
        header("Location:post_myinfo1_co.php");
        }

elseif (isset($_POST['bt_country3'])){
        header("Location:post_myinfo3_co.php");
        }
elseif (isset($_POST['bt_math_basic'])){
        header("Location:post_math_basic1.php");
        }
elseif (isset($_POST['bt_cards'])){
        header("Location:post_cards1.php");
        }
elseif (isset($_POST['bt_person'])){
        header("Location:post_person_info1.php");
        }
elseif (isset($_POST['bt_japa'])){
        header("Location:post_myinfo6_co.php");
        }
elseif (isset($_POST['bt_world_law'])){
        header("Location:post_law_world1.php");
        }
elseif (isset($_POST['bt_japa_info'])){
        header("Location:post_law_co81.php");
        }
elseif (isset($_POST['bt_warp'])){
        header("Location:post_warp1.php");
        }
elseif (isset($_POST['bt_exchange'])){
        header("Location:post_exchange1.php");
        }
elseif (isset($_POST['bt_japa1'])){
        header("Location:post_myinfo8_co.php");
        }
elseif (isset($_POST['bt_sizooka'])){
        header("Location:post_myinfo1_pr.php");
        }
elseif (isset($_POST['bt_miya'])){
        header("Location:post_myinfo1_ci.php");
        }
elseif (isset($_POST['bt_owner1'])){
        header("Location:post_owner1.php");
        }
elseif (isset($_POST['bt_owner2'])){
        header("Location:post_owner_result2.php");
        }
elseif (isset($_POST['bt_owner3'])){
        header("Location:post_owner_result1_1.php");
        }


















echo $result;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>World Government Game</title>
    </head>
    <body>
        <form action="post_index.php" method="post">
<style>
button {
  width:15%;
  font-size:30px;
  color:#FFFFFF;
  text-align:center;
  display:inline-block;
  padding:40px 0 40px;
  background:#6BCBF6;
  border-radius: 20px;
}
</style>


            <button type="submit" name="bt_connect" >List comments</button>
            <button type="submit" name="bt_add">Write your impressions</button>
            <button type="submit" name="bt_country">国内地図</button>
            <button type="submit" name="bt_list">リスト表示</button>
            <button type="submit" name="bt_remove">削除する</button>
            <button type="submit" name="bt_mylocation">世界地図</button>
            <button type="submit" name="bt_canvas">画像</button>
 <button type="submit" name="bt_person">個人情報</button>
 <button type="submit" name="bt_country1">国内地図２</button>
 <button type="submit" name="bt_country3">国内地図３</button>
 <button type="submit" name="bt_math_basic">算数基礎</button>
 <button type="submit" name="bt_cards">全カード</button>
 <button type="submit" name="bt_japa">JAPA国地図</button>
 <button type="submit" name="bt_world_law">世界情報</button>
 <button type="submit" name="bt_japa_info">ジャパ国情報</button>
 <button type="submit" name="bt_warp">ワープ</button>
 <button type="submit" name="bt_exchange">通貨両替</button>
<button type="submit" name="bt_japa1">ジャパ国１</button>
<button type="submit" name="bt_sizooka">シゾーカ県</button>
<button type="submit" name="bt_miya">ミヤ市</button>
<button type="submit" name="bt_japa1">住民登録</button>
<button type="submit" name="bt_owner1">オーナー検索</button>
<button type="submit" name="bt_owner2">オーナー一覧</button>
<button type="submit" name="bt_owner3">オーナー一覧１度</button>
<button type="submit" name="bt_japa1">住民登録</button>








<button type="submit" name="bt_back">戻る</button>


</form>
</form>
    </body>
</html>
