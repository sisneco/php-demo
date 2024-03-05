<!DOCTYPE html>
<html>

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

        <section class="wrapper">
            <h2 class="h-2">どんな予定を立てますか？</h2>
            <input type="text" name="todo-text" class="input-default input-text">
            <h2 class="h-2">いつまでに解決しましょう？</h2>
            <div class="wrapper-date">
                <input type="number" name="year" class="input-default input-number">
                <span>年</span>
                <input type="number" name="month" class="input-default input-number" min="1" max="12">
                <span>月</span>
                <input type="number" name="day" class="input-default input-number" min="1" max="31">
                <span>日</span>
            </div>
            <button class="button-default button-add">追加</button>
        </section>

        <section class="wrapper">
            <section class="wrapper-todo">
                <p>風呂掃除</p>
                <p>2024/03/24</p>
                <p>OK</p>
            </section>
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
        padding: 2.5vh 5vw;
        display: flex;
        flex-direction: column;
        row-gap: 20px;
    }

    .wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        row-gap: 20px;
        border-bottom: 1px solid gray;
        padding-bottom: 20px;
    }

    .wrapper-date {
        display: flex;
        width: 100%;
        align-items: center;
        column-gap: 20px;
    }

    .wrapper-todo {}

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
</style>