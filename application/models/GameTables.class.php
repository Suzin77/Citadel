<?php
namespace GameTables;

class GameTables
{
	static function setTrap(){
		$traps = array(1=>"Arrow", 2=>"Poisoned Arrow", 3=>"Poison Gas",4=>"Exposion", 5=>"Flaming Oil", 6=>"RollTwice");
		return $traps;
	}

	static function roomMonsterTable($row,$col)
	{
		$roomMonsterTable = array(1=>array(1=>array("name"=>"Evil Mage","qty"=>1),
										   2=>array("name"=>"Evil Hero","qty"=>1),
										   3=>array("name"=>"Cronk","qty"=>rand(1,6)),
										   4=>array("name"=>"Gargoyle","qty"=>1),
										   5=>array("name"=>"Chimaera","qty"=>1),
										   6=>array("name"=>"Medusa","qty"=>1)),
								  2=>array(1=>array("name"=>"Orc","qty"=>rand(1,3)),
								  		   2=>array("name"=>"Troll","qty"=>1),
								  		   3=>array("name"=>"Vampire","qty"=>1),
								  		   4=>array("name"=>"Harpy","qty"=>(rand(1,3)+2)),
								  		   5=>array("name"=>"Ogre","qty"=>1),
								  		   6=>array("name"=>"Minotaur","qty"=>1)),
								  3=>array(1=>array("name"=>"Dire Wolf","qty"=>rand(1,6)),
								  		   2=>array("name"=>"Wight","qty"=>1),
								  		   3=>array("name"=>"Warg","qty"=>rand(1,3)),
								  		   4=>array("name"=>"Evil Mage","qty"=>1),
								  		   5=>array("name"=>"Evil Hero","qty"=>1),
								  		   6=>array("name"=>"Cronk","qty"=>(rand(1,6)+1))),
								  4=>array(1=>array("name"=>"Gargoyle","qty"=>2),
								  		   2=>array("name"=>"Chimaera","qty"=>2),
								  		   3=>array("name"=>"Medusa","qty"=>1),
								  		   4=>array("name"=>"Orc","qty"=>(rand(1,6)+1)),
								  		   5=>array("name"=>"Hydra","qty"=>1),
								  		   6=>array("name"=>"Vampire","qty"=>1)),
								  5=>array(1=>array("name"=>"Harpy","qty"=>(rand(1,6)+2)),
								  		   2=>array("name"=>"Ogre","qty"=>2),
								  		   3=>array("name"=>"Minotaur","qty"=>1),
								  		   4=>array("name"=>"Dire Wolf","qty"=>rand(1,6)),
								  		   5=>array("name"=>"Wight","qty"=>2),
								  		   6=>array("name"=>"Warg","qty"=>rand(1,6))),
								  6=>array(1=>array("name"=>"Skeleton","qty"=>rand(1,3)),
								  		   2=>array("name"=>"Wraith","qty"=>rand(1,3)),
								  		   3=>array("name"=>"Skeleton","qty"=>rand(1,6)),
								  		   4=>array("name"=>"Wraith","qty"=>(rand(1,3)+2)),
								  		   5=>array("name"=>"Troll","qty"=>1),
								  		   6=>array("name"=>"Hydra","qty"=>1))
								  			
								  );
		return $roomMonsterTable[$row][$col];
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

	static function roll($count=1){
		for($n=1;$n<=$count;$n++){
			if(rand(1,6)== 6){
				$count++;
				return self::roll($count);
			}
		}	
		return $count;
	}

	
}
?>