<html>
<head><title>PHP TEST</title></head>
<body>

<?php

function convert_enc($str){
    $from_enc = 'utf8';
    $to_enc = 'utf8';

//    return mb_convert_encoding($str, $to_enc, $from_enc);
}

include('login_header.php');
try{
    $dbh = new PDO($dsn, $user, $password);

    print('接続に成功しました。<br>');
    $dbh->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = 'select * from comm';
    foreach ($dbh->query($sql) as $row) {
        print($row['id']);
        print(($row['communication']).'<br>');
    }
}catch (PDOException $e){
    print('public.commの検索許可がありません。');
    die();
}


$dbh = null;

?>

</body>
</html>
