<?php
require 'binary_tree.php';
$data = [ // 模拟MySQL数据
    ["id" => 2,"name" => "aaa","age" => 13,"sex" => 1],
    ["id" => 4,"name" => "ccc","age" => 30,"sex" => 0],
    ["id" => 3,"name" => "bbb","age" => 20,"sex" => 1],
    ["id" => 5,"name" => "xxx1","age" => 12,"sex" => 1],
    ["id" => 7,"name" => "xxx1","age" => 12,"sex" => 1],
    ["id" => 10,"name" => "xxx1","age" => 12,"sex" => 1],
    ["id" => 8,"name" => "xxx1","age" => 12,"sex" => 1],
    ["id" => 21,"name" => "xxx1","age" => 12,"sex" => 1],
    ["id" => 20,"name" => "xxx1","age" => 12,"sex" => 1],
    ["id" => 11,"name" => "xxx1","age" => 12,"sex" => 1],
    ["id" => 13,"name" => "xxx1","age" => 12,"sex" => 1],
    ["id" => 0,"name" => "xxx1","age" => 12,"sex" => 1],
];
// 思路 - 简化 N 级别 操作
// 1. 获取值
// 2. 根据值建立树
// 3. 保存着树
/* 索引存储结构以数组方式代替
建立好的树
[
  "file_name" => [
      [
        "value" => "索引值",
        "site" => "数据的位置"
      ],
      [
        "value" => "索引值",
        "site" => "数据的位置"
      ],
      [
        "value" => "索引值",
        "site" => "数据的位置"
      ],
  ]
]
*/
// echo json_encode($binarytree->getTree());
// echo $binarytree->getTree();

// $binarytree->createTree($data, "id"); // alter
// echo $binarytree->select("id", 0);

// $arr=array(5, 11, 19, 22, 33, 44, 41, 10, 55, 7, 51, 1);
// $binary->binSearch($arr, 7);
// var_dump();
// // echo $binary->seqSearch($arr, 1).'<br/>';
// // echo $binary->recSearch($arr, 5, 55, 33).'<br/>';
//
// echo "\n".$binarytree->getCount();
// echo interval('adfad');

// echo floor(9/2);

// echo $binary->binSearch2($arr,0,4,4).'<br/>';
// echo $binary->seqSearch($arr,4).'<br/>';
// echo in_array(4,$arr).'<br/>';
// echo array_search(4,$arr);
