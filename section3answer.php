<?php
  $delimiter = "||"; //set this in one place, don't hardcode it everywhere!
  //check if the guestbook was signed
  if(isset($_POST['submit'])){
    //open the guest.txt file for appending data.
    $file = fopen("guests.txt", 'a+');
    
    if (!$file) {
      die("There was a problem opening the guests.txt file");
    }
    
    //get the guest's name and location
    $name = $_POST['name'];
    $location = $_POST['location'];
    
    //write the guest's name and location to the file. Use the format "name from place\n"
    fputs($file, "$name$delimiter$location\n");
    
    //close the text file
    fclose($file);
  }
  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Guestbook</title>
    </head>
</html>

<body>
  <h1>Info 2300 Guestbook</h1>
  
  <h3>Sign the guestbook</h3>
  <form action="section3answer.php" method="post">
    What is your name? <input type="text" name="name" />
    Where are you from? <input type="text" name="location" />
    <input type="submit" name="submit" value="Save" />
  </form>
  
  <h3>List of Guests</h3>
  
  <ol>
  <?php
    //get the contents of the text file as an array
    $guests = file("guests.txt");
    
    //loop through each guest
    foreach($guests as $guest){
      
      //print the html for each guest as a list
      list($name, $location) = explode($delimiter, $guest);
      print "<li>$name from $location</li>";
    }
    
  ?>
  </ol>
</body>

</html>
