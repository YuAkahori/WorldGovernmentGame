<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$input_data = $_GET['text1'];
print('入力した値は'.$input_data.'<br>');
print('帰ってきた値の型は'.gettype($input_data));
?>
</body>
</html>
