<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Info230</title>
</head>
<body>
<h1>PHP SuperBowl</h1>
<p>Welcome to the greatest PHP review there ever was. In honor of this weekend's game, put the team on yo back and fill out the missing (or incomplete) PHP code to fix the form and display lists of the players on each team. </p>
</body>

<form action="section1.php" method="POST">	
	<input type="text" name="newPlayer" />
	<select name="newTeam">
		<option value="Baltimore Ravens">Baltimore Ravens</option>
		<option value="San Francisco 49ers">San Francisco 49ers</option>
	</select>
	<input type="submit" name="submit" value="Add Player" />
</form>

<?php

//the current associative array of players; don't edit
$players = array(	'Ed Reed' => 'Baltimore Ravens',
					'Colin Kaepernick' => 'San Francisco 49ers',
					'Ray Lewis' => 'Baltimore Ravens',
					'Joe Flacco' => 'Baltimore Ravens',
					'Vernon Davis' => 'San Francisco 49ers'
			);
			
//First down: Fix the if statement so that when submit has been clicked, you get and store the POST values. What PHP function do you know that does this? How about: isset.
if(true){

	/*uncomment when you have fixed if-statement above
	$newPlayer=$_POST['newPlayer'];		
	$newTeam=$_POST['newTeam'];	
	*/
		
	//Second down: if newPlayer and newTeam are set and newPlayer matches the regular expression, then add it to the array to be printed	
	if(
		isset($newPlayer) && 
		isset($newTeam) && 
		preg_match(/*allow only letters (either case) or spaces, remember that there are two arguments for preg_match: the pattern and the string to test*/)
		){
			//Now add the new player to the $players array
			//$players[] = ;
	}
	else{
		echo '<h3>Please enter a valid player name for it to be added!</h3>';
	}
}
?>

<p>Print the list of players using a foreach loop</p>

<?php
echo '<ul>';
/* Third and goal: Fill in the foreach parameters and the if statement, then uncomment this block
foreach( ){  
	echo '<li>';  //Print out the key and value, as in "Ed Reed plays for the Baltimore Ravens". We've gotten you started by adding <li>.
	echo '<img src="';
	if(){ //Fix the if statement so that the appropriate logo prints. (Looking at the next line you'll realize that the if should check if the team is Baltimore.)
		echo 'bal.gif';
		}
	else{
		echo 'sf.gif';
		}
	echo '" width="25" alt="team logo" />';
	echo '</li>';
}*/
echo '</ul>';

//Touchdown! If there's time left, go for the two-point conversion.
?>


<p>Recreate the above using a function</p>

<?php

//Two point conversion: define function here -- there should be two arguments.
function printName(){  
	//Take function content from foreach above, but NOT the actual loop. That will be called below.
}

echo '<ul>';

/*Call the function using a foreach (similar setup to before) loop
foreach( ){
	
}
*/

echo '</ul>';

//Great job! You scored a TD and punched the two-point conversion in. Enjoy the Super Bowl this weekend!
?>


</html>
