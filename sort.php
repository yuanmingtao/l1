<?php

	$i = 0;
	$input = array();
	$input[0] = 0;
	$MR = array();
	while($i++ < 1000000)
	{
		$input[$i] = rand(10,99);
		// echo $input[$i]." ";
	}
	
	$start = microtime();
	ShellInsert($input);
	$end = microtime();
	print_time($start, $end);
	
	// DirectInsert($input);
	// ShellInsert($input);
	// BubbleSort($input);
	// QuickSort($input,1,1000);
	// SelectSort($input);
	// HeapSort($input);
	// MergeSort($input, $MR, 10);
	// var_dump($input);
	function ShellInsert(&$input)
	{
		$dt = [100029,9009,3037,502,19,1];
		$k  = 0;
		for ($k = 0; $k< count($dt); $k++)
			for($i = $dt[$k] + 1; $i < count($input); $i++)
				if ($input[$i] < $input[$i - $dt[$k]])
				{
					$input[0] = $input[$i];
					$j = $i - $dt[$k];
					while ($j > 0 && $input[0] < $input[$j])
					{
						$input[$j + $dt[$k]] = $input[$j];
						$j = $j -$dt[$k];
					}
					$input[$j + $dt[$k]] = $input[0];
				}
	}
	function DirectInsert(&$input)
	{
		for($i = 2; $i < count($input); $i++)
			if ($input[$i] < $input[$i - 1])
			{
				$input[0] = $input[$i];
				$j = $i - 1;
				while ($j > 0 && $input[0] < $input[$j])
				{
					$input[$j + 1] = $input[$j];
					$j = $j - 1;
				}
				$input[$j + 1] = $input[0];
			}
	}
	function print_time($start, $end)
	{
		echo "\n execution time\n";
		echo "start:".$start."\n";
		echo "end:".$end."\n";
	}
	function BubbleSort(&$input)
	{
		$flag = 0;
		for ($i = 1; $i < count($input); $i++)
		{
			$flag = 0;
			for ($j = count($input) - 1; $j >= $i + 1; $j--)
				if ($input[$j] <$input[$j-1])
				{
					$input[0]      = $input[$j-1];
					$input[$j - 1] = $input[$j];
					$input[$j]     = $input[0];
					$flag = 1;
				}
			if ($flag == 0) break;
		}	
	}
	
	function QuickSort(&$input, $low, $high)
	{
		$p = 0;
		if ($low < $high)
		{
			$p = Partition($input, $low, $high);
			QuickSort($input, $low, $p - 1);
			QuickSort($input, $p + 1, $high);
		}		
	}
	function Partition(&$input, $i, $j)
	{
		$data = $input[$i];
		while($i < $j)
		{
			while($i < $j && $input[$j] >= $data)
				$j--;
			if ($i < $j)
			{
				$input[$i] = $input[$j];
				$i++;
			}
			while($i < $j && $input[$i] <= $data)
				$i++;
			
			if ($i < $j)
			{
				$input[$j] = $input[$i];
				$j--;
			}
		}
		$input[$i] = $data;
		return $i;
	}
	
	function SelectSort(&$input)
	{
		for($i = 1; $i < count($input); $i++)
		{
			$k = $i;
			for($j = $i + 1; $j < count($input); $j++)
				if ($input[$j] < $input[$k])
					$k = $j;
			if ($k != $i)
			{
				$input[0]  = $input[$i];
				$input[$i] = $input[$k];
				$input[$k] = $input[0];
			}
		}
	}
	
	function Sift(&$input, $i, $h)
	{
		$data = $input[$i];
		$j = 2 * $i;
		while($j <= $h)
		{
			if ($j < $h && $input[$j] < $input[$j + 1])
				$j++;
			if($data >= $input[$j])
				break;
			$input[$i] = $input[$j];
			$i = $j;
			$j = 2 * $i;
		}
		$input[$i] = $data;
	}
	
	function HeapSort(&$input)
	{
		for ($i = intval(count($input)/2); $i > 0; $i--)
			Sift($input, $i, count($input) - 1);
		for($i = count($input) - 1; $i >= 1; $i--)
		{
			$input[0]  = $input[1];
			$input[1]  = $input[$i];
			$input[$i] = $input[0];
			Sift($input, 1, $i - 1);
		}
	}
	
	function Merge(&$input, &$MR, $low, $m, $high)
	{
		$i = $low;
		$j = $m + 1;
		$k = $low;
		while($i <= $m && $j <= $high)
		{
			if ($input[$i] <= $input[$j])
				$MR[$k++] = $input[$i++];
			else
				$MR[$k++] = $input[$j++];
			while($i <= $m)
				$MR[$k++] = $input[$i++];			
			while($j <= $high)
				$MR[$k++] = $input[$j++];
		}
	}
	function MergePass(&$input, &$MR, $len, $n)
	{ 
		for($i = 1; $i + 2*$len - 1 <= $n; $i = $i + 2*$len)
			Merge($input, $MR, $i, $i + $len - 1, $i + 2*$len - 1);
		if (($i + $len - 1) < $n )
			Merge($input, $MR, $i, $i + $len - 1, $n);
		else
			for ($j = $i; $j <= $n; $j++)
				$MR[$j] = $input[$j];
	}
	
	function MergeSort(&$input, &$MR, $n)
	{
		$len = 1;
		while($len < $n)
		{
			MergePass($input, $MR, $len, $n);
			$len = $len * 2;
			MergePass($MR, $input, $len, $n);
			$len = $len * 2;
		}
	}

?>
