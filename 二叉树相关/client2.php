<?php
require_once 'binary.php';
// 一条数据添加之后就需要 1. 排序 

// insert 排序 主键id

// 原始数据 -> 这棵树没有建立好
// 是不是要建立树
$arr=array(5, 11, 19, 22, 33, 44, 41, 10, 55, 7, 51, 1);
// $arr = [1,2,3,4,5,6,7,8,9,10,11,12];
// 第一 8 > 6
// 7,8,9,10,11
// 第二 8 < 9
// 7,8,
// 第三  8


echo $binary->binSearch($arr, 41) ."\n";

// echo $binary->seqSearch($arr, 3).'<br/>'; // 8

// // echo $binary->recSearch($arr, 5, 55, 33).'<br/>';

echo $binary->getCount();

// echo floor(9/2);

// echo $binary->binSearch2($arr,0,4,4).'<br/>';
// echo $binary->seqSearch($arr,4).'<br/>';
// echo in_array(4,$arr).'<br/>';
// echo array_search(4,$arr);
