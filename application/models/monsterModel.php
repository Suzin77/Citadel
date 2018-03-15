<?php
class monsterModel
{	
	
}

class MonsterStats extends monsterModel
{
	public $name;
	
	
	function __construct($name){
		$stats = $this ->getMonsterTable();
		//var_dump($stats);
		$this-> name = $name;
		$this-> rv = $stats[$name]['RV'];
		$this-> nv = $stats[$name]['NV'];
	}

	function getMonsterTable()
	{
		$monsterStats = array();
		return  $monsterStats = array('Chim'      => array('RV'=>2, 'NV' =>7, 'Weapon'=> 0, 'Spells' => 0, 'Tresure'=> 'i','Special'=>'Firebreath'),
                                      'Cronk'    => array('RV'=>1, 'NV' =>9, 'Weapon'=> 0, 'Spells' => 0, 'Tresure'=> 'e/b','Special'=>'Stench'),
                                      'Demon'     => array('RV'=>4, 'NV' =>'none', 'Weapon'=> 0, 'Spells' => 0, 'Tresure'=> 'd','Special'=>'16'),
                                      'Dire Wolf' => array('RV'=>1, 'NV' =>9 , 'Weapon'=> 0, 'Spells' => 0, 'Tresure'=> 'a','Special'=>'none'),
                                      'Evil Hero' => array('RV'=>2, 'NV' =>5 , 'Weapon'=> '+1D6 Sword', 'Spells' => 0, 'Tresure'=>'j/c','Special'=>'Stench')
	);
	}
}
?>