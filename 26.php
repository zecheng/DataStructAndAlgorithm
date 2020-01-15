<?php
	class Solution
	{
		/**
		 * 删除排序数组中的重复项
		 * @param int[] $nums
		 *
		 * @return int
		 */
		  function removeDuplicates(&$nums) {
				$count = count($nums);
				if ($count <= 0) {
					return $count;
				}
				
				$number = $nums[0];
				for ($i=1; $i<$count; $i++) {
					if ($number != $nums[$i]) {
						$number = $nums[$i];
					} else {
						unset($nums[$i]);
					}
				}
				return count($nums);
			}
	}
	
//	$nums = [1, 1, 2,2,2,4, 4];
//	$c= (new Solution())->removeDuplicates($nums);
?>