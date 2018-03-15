<?php
class GameTables
{
	static function setTrap(){
		$traps = array(1=>"Arrow", 2=>"Poisoned Arrow", 3=>"Poison Gas",4=>"Exposion", 5=>"Flaming Oil", 6=>"RollTwice");
		return $traps;
	}

	static function setWeaponBonus(){
		$weapons = array(1=>1,2=>2,3=>2,4=>3,5=>3,6=>"RollTwice");
		return $weapons;
	}

	static function setJewels()
	{
		$jewels = array(2=>1,3=>5,4=>10,5=>15,6=>20,7=>25,8=>35,9=>50,10=>75,11=>100,12=>150);
		return $jewels;
	}

	static function getTraps()
	{
		$trapsCount = self::roll();
		$traps = self::setTrap();
		for ($i=1;$i<=$trapsCount;$i++){
			$result[]=$traps[rand(1,5)];			
		}	
		return $result;
	}

	static function getResult($table, $result=array()){

	}

	static function roll($count=1){
		for($n=1;$n<=$count;$n++){
			if(rand(1,6)== 6){
				$count++;
				echo "inner count: ".$count."</br>";
				return self::roll($count);
			}
		}
		echo "outer count: ".$count."</br>";	
		return $count;
	}

	
}
?>