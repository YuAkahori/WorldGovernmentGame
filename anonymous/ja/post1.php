<?php
//$dbconn = pg_connect("dbname=wgg_db");
// "mary"という名前のデータベースに接続

//$dbconn2 = pg_connect("host=153.127.39.194 port=5432 dbname=wgg_db");
// "localhost"のポート"5432"にて"mary"という名前のデータベースに接続

$dbconn3 = pg_connect("host=153.127.39.194 port=5432 dbname=wgg_db user=wgg_dbmaster password=adgj1192");
// ユーザー名とパスワードを指定してホスト"sheep"上の"mary"という名前のデータベースに接続

//$conn_string = "host=sheep port=5432 dbname=test user=lamb password=bar";
//$dbconn4 = pg_connect($conn_string);
// ユーザー名とパスワードを指定してホスト"sheep"上の"test"という名前のデータベースへ接続

//$dbconn5 = pg_connect("host=localhost options='--client_encoding=UTF8'");
// "localhost" のデータベースに接続する際に、エンコーディングを UTF-8 に指定
?>
