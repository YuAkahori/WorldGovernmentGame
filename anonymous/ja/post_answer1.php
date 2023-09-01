

<html>
<head><title>TEST ANSWER</title></head>
<body>
<script>
const music1 = new Audio('sound/answer.mp3');
const music2 = new Audio('sound/wrong.mp3');


</script>





<?php

//require_once "post_math_basic1.php";
//$num=$num;
//$ans=$ans;
//$ansbefore=$ansbefore;

  // 2回目以降の訪問


//if(isset($_SESSION['ansbefore'])) {
//  echo '訪問回数:' . $_SESSION['ansbefore'];}
//  else {print( "batubatu");};


$input_data1 = $_GET['text1'];
$input_data = $_GET['bt1'];

print("答えは");
print ($input_data1);
print ("<br>");
print ("回答は");
print ($input_data);
print ("<br>");

if ($input_data==$input_data1)
{print ("正解");

echo <<<EOM
<script type="text/javascript">
music1.play();

</script>
EOM;
}
else
{
print("不正解");
echo <<<EOM

<script type="text/javascript">
music2.play();


</script>
EOM;
}

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


<form action="./post_math_basic1.php" method="get">

<br>
<input type = "submit"name='bt1'value ="次へ" ></input>

 <br>
</form>



</body>
</html>


