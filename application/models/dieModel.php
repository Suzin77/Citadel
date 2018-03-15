<?php
class dieModel extends Model
{	
	public function roll($sides)
	{	
		return rand(1,$sides);
	}

	public function randomGrid($x, $y)
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