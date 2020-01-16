<?php
// https://leetcode-cn.com/problems/rotate-array/
class Solution
{

//输入: [1,2,3,4,5,6,7] 和 k = 3
//输出: [5,6,7,1,2,3,4]
//解释:
//向右旋转 1 步: [7,1,2,3,4,5,6]
//向右旋转 2 步: [6,7,1,2,3,4,5]
//向右旋转 3 步: [5,6,7,1,2,3,4]

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */

    function rotate(&$nums, $k)
    {
        $count = count($nums);
        $k = fmod($k, $count);
        $this->reverse($nums, 0, $count - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $count - 1);
    }

    function reverse(&$nums, $start, $end)
    {
        while ($start < $end) {
            $tmp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $tmp;
            $start++;
            $end--;
        }
    }

//    public function rotate(&$nums, $k)
//    {
//        $k = $k % count($nums);
//        $count = 0;
//        for ($start = 0; $count < count($nums); $start++) {
//            $current = $start;
//            $prev = $nums[$start];
//            do {
//                $next = ($current + $k) % count($nums);
//                $temp = $nums[$next];
//                $nums[$next] = $prev;
//                $prev = $temp;
//                $current = $next;
//                $count++;
//            } while ($start != $current);
//        }
//        return $nums;
//    }

}
?>