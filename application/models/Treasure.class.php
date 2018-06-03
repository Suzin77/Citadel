<?php
/*
Klasa odpowiedzialna za generowanie skarbów oraz wyliczanie wartości skarbów.

Obiekt posiada takie pola jak:
 -treasureType (string)- rodzaj skarbu oznaczony literą od A do L
 - gold (int) - ilość złota w skarbie.
 
*/
class Treasure
{

    function __construct($treasureType)
    {
        $this->treasureType = $treasureType; 
        $this->gold = $this -> getTreasureGold($treasureType);
        $this->jewelsCount = $this ->getTreasureJewel($treasureType);
        $this->jewelsWorth = $this ->setJewelsWorth($this->jewelsCount);
    }

    public function treasureTable()
    {
        
    }

    public function getTreasureGold($treasureType)
    {
        $gold = array("A"=>0,"Achance"=>0,
                      "B"=>rand(1,6),"Bchance"=>6,
                      "C"=>dieModel::manyRoll(6,3),"Cchance"=>6,
                      "D"=>dieModel::manyRoll(6,3),"Dchance"=>1,
                      "E"=>dieModel::manyRoll(6,1)*10,"Echance"=>2,
                      "F"=>dieModel::manyRoll(6,1)*5,"Fchance"=>3,
                      "G"=>dieModel::manyRoll(6,3)*5,"Gchance"=>6,
                      "H"=>dieModel::manyRoll(6,2),"Hchance"=>6,
                      "I"=>dieModel::manyRoll(6,1)*5,"Ichance"=>6,
                      "J"=>dieModel::manyRoll(6,1)*20,"Jchance"=>6,
                      "K"=>dieModel::manyRoll(6,2)*20,"Kchance"=>6,
                      "L"=>dieModel::manyRoll(6,3)*20,"Lchance"=>6);
        if (rand(1,6)<=$gold[$treasureType."chance"]){
            return $gold[$treasureType];
        }
        return 0;
    }

    public function getTreasureJewel($treasureType)
    {
        $jewels = array("A"=>0,"Achance"=>0,
                        "B"=>0,"Bchance"=>0,
                        "C"=>0,"Cchance"=>0,
                        "D"=>dieModel::manyRoll(3,1),"Dchance"=>1,
                        "E"=>dieModel::manyRoll(6,1),"Echance"=>2,
                        "F"=>dieModel::manyRoll(3,1),"Fchance"=>3,
                        "G"=>dieModel::manyRoll(6,1),"Gchance"=>3,
                        "H"=>dieModel::manyRoll(3,1),"Hchance"=>1,
                        "I"=>dieModel::manyRoll(6,1),"Ichance"=>2,
                        "J"=>dieModel::manyRoll(6,1),"Jchance"=>2,
                        "K"=>dieModel::manyRoll(6,1),"Kchance"=>3,
                        "L"=>dieModel::manyRoll(6,1),"Lchance"=>4);
        if (rand(1,6)<=$jewels[$treasureType."chance"]){
            $jewelsCount = $jewels[$treasureType];
            return $jewelsCount;
        }
        return 0;
    }

    public function setJewelsWorth($jewelsCount)
    {
        $jewels = array(2=>1,3=>5,4=>10,5=>15,6=>20,7=>25,8=>35,9=>50,10=>75,11=>100,12=>150);       
        $result = array();
        for($i=1;$i<=$jewelsCount;$i++){
            $result[]=$jewels[dieModel::manyRoll(6,2)];
        }
        return $result;
    }

    public function getMagicItemCount($tresureType)
    {

    }
}

?>