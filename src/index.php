<?php
echo '<h1>Hello World</h1>';

// 型について

// 適当に
$a_bool = true;
$a_str = "foo";
// hex -> dex
$hex = 0x2201;

if ($a_str == "foo") {
    $a_bool = "Hello";
}

// 配列
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// 配列というかjsのオブジェクト、javaのmapって感じ
$array = [
    "foo" => "bar",
    "bar" => "foo",
];


// 普通の配列の使い方もできるみたい
$array2 = [0, 1];
$array2[3] = 3;
$array2[] = 4;


foreach ($array2 as $i => $value) {
    echo $i;
}

$source_array = ['foo', 'bar', 'baz'];

[$f, $bar, $baz] = $source_array;

echo $f;    // "foo" を出力します。
echo $bar;    // "bar" を出力します。
echo $baz;    // "baz" を出力します。

$source_array = [
    [1, 'John'],
    [2, 'Jane'],
];

// こっちはよく使う書き方になりそう
foreach ($source_array as [$id, $name]) {
    // $id と $name を使うロジックをここに書きます
}
