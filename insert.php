<?php
  $username = "username";
  $password = 'password';

  $database = "CompanyDB";
  mysql_connect(localhost,$username,$password);
  @mysql_select_db($database) or die( "Unable to select database"); // Don't use die too often.
  
  $query = "SELECT * FROM tablename";
  $result = mysql_query($query);
  $num = mysql_numrows($result);
  mysql_close();
  echo "<b>
  <center>DB Output</center>
  </b>
  <br>
  <br>";
    $i = 0;
    while ($i < $num) {
      $field-name = mysql_result($result, $i, "field-name");
      $field2-name=mysql_result($result,$i,"field2-name");
      $field3-name=mysql_result($result,$i,"field3-name");
      $field4-name=mysql_result($result,$i,"field4-name");
      $field5-name=mysql_result($result,$i,"field5-name");
      echo "<b>
      $field1-name $field2-name2</b>
      <br>
      $field3-name<br>
      $field4-name<br>
      $field5-name<hr>
      <br>";
      $i++;
    }
?>
