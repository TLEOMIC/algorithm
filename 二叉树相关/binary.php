<?php

class Binary
{
    private $executions = 0;
    private $type = '';
    //二分查找法
    public function binSearch($arr, $search)
    {
        $this->type = '非递归二分查找法';
        $height = count($arr)-1;
        $low = 0;
        while ($low <= $height) {
            $this->executions++;
            $mid = floor(($low + $height) / 2);//获取中间数
            if ($arr[$mid] == $search) {
                return $mid;//返回
            } elseif ($arr[$mid] < $search) {//当中间值小于所查值时，则$mid左边的值都小于$search，此时要将$mid赋值给$low
                $low = $mid + 1;
            } elseif ($arr[$mid] > $search) {//中间值大于所查值,则$mid右边的所有值都大于$search,此时要将$mid赋值给$height
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
}
$binary = new Binary;
