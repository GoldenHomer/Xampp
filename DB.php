<?php

  $link = mysqli_connect("localhost", "cl54-firstdb-2oe", "9DuSsSk_4MjNFEk", "cl54-firstdb-2oe"); // connecting to localhost, username of DB, password, name of db in cpanel at ecowebhosting.co.uk. Don't forget to always use a secure password.

  if (mysqli_connect_error()) {
  	die("Could not connect to the date") // Recall die will kill the php script if called upon.
  }

  //$query = "INSERT INTO 'users' ('name', 'email','password') VALUES('Ian', 'ian@mail.com', 'haggis1234')"; //Should get an entry in my users DB with this info everytime I refresh page.

  $query = "UPDATE 'users' SET 'email'='ian@hotmail.com' WHERE 'name'='Ian' LIMIT 1";

  $query = "SELECT * FROM users";

  if ($result=mysqli_query($link, $query)) {

  	while ($row = mysqli_fetch_array($result)) {
  	  print_r($row);
  	}
  }
  else {
  	echo "It failed.";
  }
?>