<div class="container">
	<p>jestem view of index</p>
	<h2>Co juz mamy</h2>
    <p><button type="button"><a href="<?php echo URL . 'admin/updateMany/40'; ?>">aktualizuj 10 na raz</a>
	    </button></p>

	<?php if (isset($die)){
		$sum = 0;
		for($i =0; $i<5; $i++){
			$result = $die->roll(6);
			$sum += $result;
			echo "wypadło: ".$result."</br>";
		}
		echo "Suma to : ".$sum."</br>"; 

		if(isset($grid)){
			foreach($grid as $row ){
				var_export($row); echo "</br>";
			}
		}

		if(isset($grid)){
			foreach($grid as $row ){
				foreach($row as $col){
				    echo $col;
				}
			echo "</br>";
			}
		}
	}		
	?> 
	<p><?php if(isset($monsterExample)){
		echo "name: ".$monsterExample->name."</br>";
		echo "RV: ".$monsterExample->rv."</br>";
		echo "nv: ".$monsterExample->nv."</br>";
		echo "CB: ".$monsterExample->cb."</br>";
		echo "HP: ".$monsterExample->hp."</br>";
		echo "treasure: ".$monsterExample->treasure."</br>";
		
	}; ?></p>
	<p>
	<?php 
	foreach($trap as $key => $value){
		echo "nr: ".($key+1)." to ".$value."</br>";
	}

	//var_export($encounter);
	//echo "You encounter: </br> ";
	//echo "- ".$encounter["qty"]." x ".$encounter["name"];
	//echo "<p>Nowe spotaknie to ".$en->amount." x ".$en->monsterName."</p>";


    //$die->arrayIterator($en);
	//var_export($en);
    echo "<pre>".var_export($encounter,true)."</pre>";
    echo "<pre>".var_export($encounter->enemy['monster1']->hp,true)."</pre>";
	?>	
	</p> 

    <?php 
    $monsterDiv="";
    for($i=1;$i<=$encounter->amount;$i++){
        
    }

    foreach ($encounter->enemy as $monster=>$value){
        echo "Potwór ".$monster." o imieniu".$value->getStat('name')."</br>".
             " HP: ".$value->getStat('hp')."</br>".
             "Skarb: ".$value->getStat('treasure')." o wartości : ".$value->getStat('gold')." monet złota</br>";
             foreach($value->getStat('jewels') as $jewel =>$jewelValue){
                echo " Kamyk wartości: ".$jewelValue; 
             }
    }
    echo "Metoda get stats to : ".$encounter->enemy["monster1"]->getStat('name');
    ?>

    <div>
        <p>
            <?php
                echo $encounter->monsterName." x ".$encounter->amount."</br>";
                
             ?>
        </p>
    </div>
    <?php
        require 'application/views/_templates/encounter.php';
     ?>
    <div class = "monster">
        <h6><?php echo $encounter->monsterName ?></h6>
        <p>HP 5</p>
        <p>Atak</p>
        <p>Combat Bonus</p>
        <p>Treasure type: <?php echo $encounter->enemy['monster1']->treasure ?></p>

    </div>


</div>