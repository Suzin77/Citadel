<div class="container">
	<p>jestem view of index</p>
	<h2>Co juz mamy</h2>
    <span> 
	    <button type="button"><a href="<?php echo URL . 'admin/updateUser/' . $exampleToCheck[0]['steam_id']; ?>">aktualizuj</a>
	    </button>
    </span>	
       
    </p>
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
	echo "You encounter: </br> ";
	echo "- ".$encounter["qty"]." x ".$encounter["name"];

	?>	
	</p> 

</div>