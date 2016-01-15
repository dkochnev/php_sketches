

<?php
	
	

	echo "<strong>Our Array consists of: </strong><br />";


	// array with syllables

	$parts = array ("ing", "er", "a", "on", "po", "i", 
		"re", "tion", "con", "de", "sta", "tle", "li", 
		"sion", "day", "dis", "lo", "el", "gen", "mon", 
		"ro", "den", "os", "si");

	// adding space and comma to show the array 
	for ($i = 0; $i < count($parts); $i++) {
	echo $parts[$i].", ";
	}

	echo "<br />";
	echo "<br />";
	echo "<strong>Getting a random word that consists of 1, 2 or 3 syllables: </strong><br />";


   function getWord ($parts)  {
  		//getting number of array elements
   		$result = count($parts)-1;
					
		$x = mt_rand(0, $result);
		$y = mt_rand(0, $result);
		$z = mt_rand(0, $result);

		 $oneSyl = $parts[$x];
		 $twoSyl = $parts[$x].$parts[$y];
		 $threeSyl = $parts[$x].$parts[$y].$parts[$z];
		
		//creating an array of 1,2,3 syllable words
		 $newWord = array ($oneSyl, $twoSyl, $threeSyl);
	
		// getting a number from 0 to 2	
		 $randLength = mt_rand(0, 2);
	
		echo $newWord[$randLength];

  		}

		  function getWordUpp ($parts)  {
  		//getting number of array elements
   		$result = count($parts)-1;
					
		$x = mt_rand(0, $result);
		$y = mt_rand(0, $result);
		$z = mt_rand(0, $result);

		 $oneSyl = $parts[$x];
		 $twoSyl = $parts[$x].$parts[$y];
		 $threeSyl = $parts[$x].$parts[$y].$parts[$z];
		
		//creating an array of 1,2,3 syllable words
		 $newWord = array ($oneSyl, $twoSyl, $threeSyl);
	
		// getting a number from 0 to 2	
		 $randLength = mt_rand(0, 2);
	
		echo ucfirst($newWord[$randLength]);
		
  		}	


  	getWord($parts);



  	echo "<br /> <br />";	
  	echo "<strong>Getting a Sentence that consists of 4, 5, 6, 7 or 8 words: </strong><br />";

  	

  	//Generating sentence function
  	
  	function getSentence($parts){
  		$randLength = mt_rand(2, 6);	
  		  	
  		 //first wrd with uppercase 			
  		getWordUpp($parts);
  				echo " ";
  		//calling  functions 4 to 8 times
  		for($i=0; $i< $randLength ; $i++){
    			getWord ($parts);
  				echo " ";
  			}

  		getWord($parts);
  			echo ". ";
  	}



  	getSentence($parts);

	echo "<br /> <br />";	
  	echo "<strong>Getting a Sentence multiple times to make up a text: </strong><br />";

  	function getTexter($parts){
  		$randLength = mt_rand(25, 35);
  		for($i=0; $i< $randLength ; $i++){
  			getSentence($parts);
  		}

  	}
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  		getTexter($parts);


echo "<br/><input type='submit' name='submitAdd' value='Reload' onclick='window.location.reload(true);'><br/><br/>";



?>
