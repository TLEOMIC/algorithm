<?php

class BinaryTree
{
    private $executions = 0;
    private $type = 'B+tree';
    private $tree = [];
    /**
     * 创建对应的二叉树
     * @param  array $arr   数据
     * @param  string $index 索引字段
     */
    public function createTree($arr, $index)
    {
        $this->tree[$index] = $this->sortIndex($this->getIndex($arr, $index));
        file_put_contents("index.txt", json_encode($this->tree, true));
    }
    // 获取索引数据
    public function getIndex($arr, $index)
    {
        $return = [];
        foreach ($arr as $key => $value) {
            $return[] = [
                'value' => $value[$index],
                'site' => $key
            ];
        }
        return $return;
    }
    // 排序
    public function sortIndex($arr)
    {
        $len = count($arr);
        for ($i=0; $i < $len; $i++) {
            for ($j=$i + 1; $j < $len; $j++) {
                if ($arr[$i]['value'] > $arr[$j]['value']) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }
    // 查询的时候
    public function select($file, $value, $arr= null)
    {
        $tree = $this->getTree($file);
        if (empty($tree)) {
           return $this->binSearch($tree, $value);
        } else {
           return $this->seqSearch($arr, $k);
        }
    }
    //二分查找法
    public function binSearch($arr, $search)
    {
        $height = count($arr) - 1;
        $low = 0;
        while ($low <= $height) {
            $this->executions++;
            $mid = floor(($low + $height) / 2);//获取中间数
            if ($arr[$mid]["value"] == $search) {
                return $arr[$mid]["site"];//返回
            } elseif ($arr[$mid]["value"] < $search) {//当中间值小于所查值时，则$mid左边的值都小于$search，此时要将$mid赋值给$low
                $low = $mid + 1;
            } elseif ($arr[$mid]["value"] > $search) {//中间值大于所查值,则$mid右边的所有值都大于$search,此时要将$mid赋值给$height
                $height = $mid-1;
            }
        }
        return "查找失败";
    }
    //顺序查找
    public function seqSearch($arr, $k)
    {
        $this->type = '顺序查找';
        foreach ($arr as $key => $val) {
            $this->executions++;
            if ($val == $k) {
                return $key;
            }
        }
        return "查找失败";
    }

    public function getCount()
    {
        return $this->type.' 执行了 '.$this->executions.'  次';
    }

    public function getTree($file = null)
    {
        $tree = ($this->tree == []) ? json_decode(file_get_contents("index.txt"), true) : $this->tree;
        return ($file == null) ? $tree : $tree[$file];
    }
}
$binarytree = new BinaryTree;
$binarytree->createTree(['1,2,3'],'A');
