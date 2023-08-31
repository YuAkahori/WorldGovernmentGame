<html>

<?php

require_once "post_math_basic1.php";
$num=$num;
$ans=$ans;
$ansbefore=$ansbefore;

  // 2回目以降の訪問


if(isset($_SESSION['ansbefore'])) {
  echo '訪問回数:' . $_SESSION['ansbefore'];}
  else {print( "batubatu");};


print("回答は");
print("前の解答は".$ansbefore);
print("問題番号".$num);
print("解答番号".$ans."<br><br>");
if ($ans==1)
{
print ("正解");
}else{
print("不正解");
}

?>


</html>
