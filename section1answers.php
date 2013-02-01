<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Info230</title>
</head>
<body>
<h1>Section 1 -- PHP Review</h1>
<p>Welcome to the greatest PHP review there ever was. In honor of this weekend's game, put the team on yo back and fill out the missing (or incomplete) PHP code to fix the form.</p>
</body>

<form action="section1answers.php" method="POST">	
	<input type="text" name="newPlayer" />
	<select name="newTeam">
		<option value="Baltimore Ravens">Baltimore Ravens</option>
		<option value="San Francisco 49ers">San Francisco 49ers</option>
	</select>
	<input type="submit" name="submit" value="Add Player" />
</form>

<?php

//print the given array by filling out the missing parts of the code
$players = array(	'Ed Reed' => 'Baltimore Ravens',
					'Colin Kaepernick' => 'San Francisco 49ers',
					'Ray Lewis' => 'Baltimore Ravens',
					'Joe Flacco' => 'Baltimore Ravens',
					'Vernon Davis' => 'San Francisco 49ers'
			);
			
//if submit is clicked, then get the POST values
if(isset($_POST['submit'])){ /*replace true with isset */

	$newPlayer=$_POST['newPlayer'];		
	$newTeam=$_POST['newTeam'];	
		
	//if newPlayer and newTeam are set and newPlayer matches the regular expression, then add it to the array to be printed	
	if(
		isset($newPlayer) && 
		isset($newTeam) && 
		preg_match('/^[a-zA-Z\s]+$/',$newPlayer)
		){
			$players[$newPlayer] = $newTeam;
	}
	else{
		echo '<h3>Please enter a valid player name for it to be added!</h3>';
	}
}
?>

<p>Print the list of players using a foreach loop</p>

<?php
echo '<ul>';
//fill in the foreach parameters and the if statement, then uncomment this block
foreach($players as $player=>$team){  
	echo '<li>'.$player .' plays for the '.$team.'.';  //print out key and value
	echo '<img src="';
	if($team == 'Baltimore Ravens'){ //check if the team is Baltimore Ravens so the appropriate logo prints
		echo 'bal.gif';
		}
	else{
		echo 'sf.gif';
		}
	echo '" width="25" alt="team logo" />';
	echo '</li>';
}
echo '</ul>';


?>

<p>Recreate the above using a function</p>

<?php

function printName($player,$team){  
	echo '<li>'.$player .' plays for the '.$team.'.';  //print out key and value
	echo '<img src="';
	if($team == 'Baltimore Ravens'){ //check if the team is Pittsburgh Steelers so the appropriate logo prints
		echo 'bal.gif';
		}
	else{
		echo 'sf.gif';
		}
	echo '" width="25" alt="team logo" />';
	echo '</li>';
}

echo '<ul>';

//call the function inside of the foreach
foreach($players as $player => $team){
	printName($player, $team);
}

echo '</ul>';

?>


</html>
