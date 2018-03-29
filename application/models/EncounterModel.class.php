<?php
class Encounter
{
    /*
    Encounter class
    Obiekst posiada informację o potworach w spotkaniu.
    */
	function __construct()
	{
		$monsters = GameTables::roomMonsterTable(rand(1,6),rand(1,6));

		$this-> monsters = $monsters;
		$this-> monsterName = $monsters['name'];
		//$this-> monsterData = new MonsterStats($this->monsterName);
		$this-> amount = $monsters['qty'];
		$this-> enemy = $this->enemy();

	}

	function getAmount(){
		return $this-> amount;
	}

	public function enemy($enemy=array())
	{
		for($i=1;$i<=($this-> amount);$i++){
			$enemy["monster".$i] = new MonsterStats($this->monsterName);
		}
		return $enemy;
	}


}

?>