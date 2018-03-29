<?php
class monsterModel
{	
	
}



class MonsterStats extends monsterModel
{
	public $name;
	
	
	function __construct($name){
		$stats = $this ->getMonster($name);
		//var_dump($stats);
		$this-> name = $name;
		$this-> rv = $stats['RV'];
		$this-> nv = $stats['NV'];
		$this-> cb = $stats['CB'];
		$this-> hp = $stats['HP'];
		$this-> weapon = $stats['Weapon'];
		$this-> treasure = $stats['Treasure'];
		$this-> spells = $stats['Spells'];
		$this-> special = $stats['Special'];

	}

	/* Tablica z danymi o potworach
	RV > Resistance Value.
	NV > Negotiation Value.
	Weapon - Czy wróg ma broń.
	Spells - Czy ma czary.
	Treasure - Posiadny skarb.
	Special - czy posiada specjalen zdlonosci.
	WP - Wound Points - punkty życia.(może zmienić na HP)
	Combat bonus - wartość modyfikatora używanego do okreslenia takau w walce.

	 */ 
	function getMonster($name)
	{
		$monsterStats = array('Chimaera'      => array('RV'=>2, 'NV' =>7, 'CB'=>7, 'HP'=>(rand(1,6)+rand(1,6)+2), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=> 'i','Special'=>'Firebreath'),
                              'Cronk'     => array('RV'=>1, 'NV' =>9,'CB'=>4, 'HP'=>(rand(1,6)+1), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=> 'e/b','Special'=>'Stench'),
                              'Demon'     => array('RV'=>4, 'NV' =>'none', 'CB'=>4, 'HP'=>(rand(1,6)+2), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=> 'd','Special'=>'see 16.0'),
                              'Dire Wolf' => array('RV'=>1, 'NV' =>9, 'CB'=>1, 'HP'=>(rand(1,3)+1), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=> 'a','Special'=>0),
                              'Evil Hero' => array('RV'=>2, 'NV' =>5, 'CB'=>5, 'HP'=>(rand(1,6)+4), 'Weapon'=> '+1D6 Sword', 'Spells' => 0, 'Treasure'=>'j/c','Special'=>0),
                              'Evil Mage' => array('RV'=>3, 'NV' =>3, 'CB'=>4, 'HP'=>(rand(1,6)+3), 'Weapon'=> 'Dagger', 'Spells' => 'Lighting', 'Treasure'=>'j/c','Special'=>0),
                              'Gargoyle'  => array('RV'=>3, 'NV' =>4, 'CB'=>9, 'HP'=>(rand(1,6)+rand(1,6)+rand(1,6)+1), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'g','Special'=>0),
                              'Harpy'     => array('RV'=>1, 'NV' =>5, 'CB'=>0, 'HP'=>rand(1,3), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'a','Special'=>0),
                              'Hydra'     => array('RV'=>3, 'NV' =>7, 'CB'=>0, 'HP'=>(rand(1,6)+rand(1,6)+3), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'j','Special'=>'see 15.6'),
                              'Medusa'    => array('RV'=>2, 'NV' =>5, 'CB'=>2, 'HP'=>(rand(1,6)+rand(1,6)),'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'g','Special'=>'Flesh/Stone'),
                              'Minotaur'  => array('RV'=>3, 'NV' =>7, 'CB'=>10, 'HP'=>(rand(1,6)+rand(1,6)+4),'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'j/c','Special'=>0),
                              'Ogre'      => array('RV'=>2, 'NV' =>2, 'CB'=>5, 'HP'=>(rand(1,6)+2),'Weapon'=> 'Hammer', 'Spells' => 0, 'Treasure'=>'j/e','Special'=>0),
                              'Orc'       => array('RV'=>1, 'NV' =>0,'CB'=>3, 'HP'=>rand(1,6), 'Weapon'=> 'Sword', 'Spells' => 0, 'Treasure'=>'h/b','Special'=>0),
                              'Skeleton'  => array('RV'=>1, 'NV' =>9,'CB'=>2, 'HP'=>(rand(1,6)+1), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'f/a','Special'=>0),
                              'Troll'     => array('RV'=>3, 'NV' =>4,'CB'=>6, 'HP'=>(rand(1,6)+rand(1,6)+3), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'j','Special'=>'Regenerate'),
                              'Vampire'   => array('RV'=>4, 'NV' =>6,'CB'=>11, 'HP'=>(rand(1,6)+rand(1,6)+rand(1,6)), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'j','Special'=>'Charm'),
                              'Warg'      => array('RV'=>1, 'NV' =>6,'CB'=>3, 'HP'=>(rand(1,3)+2), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'a','Special'=>0),
                              'Wight'     => array('RV'=>2, 'NV' =>4,'CB'=>6, 'HP'=>(rand(1,6)+rand(1,6)), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'h','Special'=>0),
                              'Wraith'    => array('RV'=>1, 'NV' =>2,'CB'=>3, 'HP'=>(rand(1,6)+3), 'Weapon'=> 0, 'Spells' => 0, 'Treasure'=>'i/d','Special'=>0),
                              'X Unknown' => array('RV'=>4, 'NV' =>'none','CB'=>5, 'HP'=>(rand(1,6)+6),'Weapon'=> 'Sword', 'Spells' => 'Lt', 'Treasure'=>'l','Special'=>0)

	);
	return $monsterStats[$name];	
	}


}
?>