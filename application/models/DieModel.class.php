<?php
class DieModel
{	
	static function roll($sides)
	{	
		return rand(1,$sides);
	}

	static function manyRoll($sidesNumber, $timesToRoll)
	{
	  $sum=0;
	  for($i=1;$i<=$timesToRoll;$i++){
	  	$sum+=self::roll($sidesNumber);
	  }
	  return $sum;
	}

	static function randomGrid($x, $y)
	{
		$grid = array();
		for($i=1; $i<=$x;$i++){
			for($j=1;$j<=$y;$j++){
				$grid[$i][$j] = rand(1,6);
			}
        }
        return $grid;
	}


}
?>