<?php

$elements = [2,4,5,3,1];

//絞り込み $result : [4,5,3]
$where = array_filter($elements, fn($element) => $element >= 3);

// 加工 int型の配列を文字列の配列に変換
$custom = array_map(fn($element) => "{$element}", $elements);

// ソート処理はすべての要素がそろっていなければならないので
// yield文との相性が悪い。
$sort = sort($elements); //照準ソート
$rsourt = rsort($elements); //降順ソート