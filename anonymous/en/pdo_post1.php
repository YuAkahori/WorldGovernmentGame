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

<<<<<<< HEAD
    print('Successfully connected. <br>');
=======
    print('Successfully connected.<br>');
>>>>>>> f3ac5158d475fea1a3857629cdd2fb5acb1e000a
    $dbh->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = 'select * from wgg_comm_sc.wgg_comm_anonymous_tb';
    foreach ($dbh->query($sql) as $row) {
        print('id='.$row['id']);
        print((';comment='.$row['communication']).'<br>');
    }
}catch (PDOException $e){
    print('You do not have permission to connect.');
    die();
}


$dbh = null;

?>

</body>
</html>
