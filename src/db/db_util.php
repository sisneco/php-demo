<?php
$host = 'mysql'; // MySQLコンテナのサービス名
$dbname = $_ENV['MYSQL_DATABASE'];
$username = 'root';
$password = $_ENV['MYSQL_ROOT_PASSWORD'];

function connect(): object
{
    global $host, $dbname, $username, $password;

    // 新しいPDOオブジェクトを作成し、MySQLデータベースに接続
    return new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
}
