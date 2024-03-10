<!DOCTYPE html>
<html>

<?php
include "../db/db_util.php";

// 新しいPDOオブジェクトを作成し、MySQLデータベースに接続
$db = connect();
// SQL　文を実行
$stmt = $db->prepare('SELECT * FROM todos');
$stmt->execute();

$fetchResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
</head>

<body>
    <header class="header">
        <h1 class="h-1">TODO APP</h1>
    </header>

    <div class="container">

        <form class="wrapper" action="add.php" method="post">
            <h2 class="h-2">どんな予定を立てますか？</h2>
            <input type="text" name="todo-text" class="input-default input-text" autocomplete="off" placeholder="楽しい1日を！">
            <h2 class="h-2">いつまでに解決しましょう？</h2>
            <div class="wrapper-date">
                <input type="number" name="year" class="input-default input-number" value="<?= date('Y') ?>">
                <span>年</span>
                <input type="number" name="month" class="input-default input-number" min="1" max="12" value="<?= date('m') ?>">
                <span>月</span>
                <input type="number" name="day" class="input-default input-number" min="1" max="31" value="<?= date('d') ?>">
                <span>日</span>
            </div>
            <input class="button-default button-add" type="submit" value="追加">
        </form>

        <section class="wrapper">

            <?php foreach ($fetchResult as $result) : ?>
                <section class="wrapper-todo">
                    <div>
                        <p>
                            <?= $result['text'] ?>
                        </p>
                        <p>
                            <?= $result['limit_date'] ?>
                        </p>
                    </div>
                    <div class="wrapper-todo-button">
                        <form action="switch.php" method="post">
                            <input type="hidden" name="id" value="<?= $result['id'] ?>">
                            <button class="button-default button-ok">
                                <?php
                                if (!$result["is_complate"]) {
                                    echo "OK";
                                } else {
                                    echo "元に戻す";
                                }
                                ?>
                            </button>
                        </form>

                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $result['id'] ?>">
                            <button class="button-default button-delete">削除</button>
                        </form>
                    </div>
                </section>
            <?php endforeach; ?>

        </section>
    </div>
</body>

</html>

<style>
    .header {
        padding: 10px;
        background-color: aqua;
        display: flex;
        align-items: center;
        background: gray;
        color: white;
    }


    .container {
        width: 100vw;
        height: 100vh;
        padding: 2.5vh 10vw;
        display: flex;
        flex-direction: column;
        row-gap: 20px;
    }

    .wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        row-gap: 20px;
        padding-bottom: 20px;
    }

    .wrapper-date {
        display: flex;
        width: 100%;
        align-items: center;
        column-gap: 20px;
    }

    .wrapper-todo {
        display: flex;
        flex-direction: row;
        align-items: center;
        border-bottom: 1px solid gray;
        padding-bottom: 20px;
    }

    .wrapper-todo-button {
        margin-left: auto;
        display: flex;
        column-gap: 15px;
    }

    .wrapper-date span {
        font-size: 1.5em;
    }

    .h-1 {
        font-size: 3em;
        font-weight: bold;
    }

    .h-2 {
        font-size: 2em;
    }

    .input-default {
        background: white;
        font-size: 1.5em;
        border: 1px solid black;
        padding: 15px 10px;
    }

    .input-text {
        width: 100%;
    }

    .input-number {
        width: 10%;
        text-align: right;
    }

    .button-default {
        background: gray;
        text-align: center;
        padding: 15px;
        font-size: 2em;
        font-weight: bold;
        color: white;
    }

    .button-ok {
        font-size: 1.5em;
        padding: 15px 25px;
        background-color: blue;
    }

    .button-delete {
        font-size: 1.5em;
        padding: 15px 25px;
        background-color: red;
    }
</style>