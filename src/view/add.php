<?php
include "../class/form_data.php";
include "../db/db_util.php";

$instance = new FormData($_POST);


// 新しいPDOオブジェクトを作成し、MySQLデータベースに接続
$db = connect();
// SQL　文を実行
$stmt = $db->prepare('INSERT INTO todos (text,limit_date) VALUES ("' . $instance->text . '",FROM_UNIXTIME(' . $instance->createDate() . '))');
$stmt->execute();

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
