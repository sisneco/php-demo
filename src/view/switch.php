<?php
include "../db/db_util.php";

$id = $_POST["id"];

// 新しいPDOオブジェクトを作成し、MySQLデータベースに接続
$db = connect();
// SQL　文を実行
$stmt = $db->prepare('UPDATE todos SET is_complate = if(is_complate = true,false,true) WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
