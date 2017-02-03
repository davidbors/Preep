<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Process</title>
  </head>
  <body>

  </body>
</html>
<?php
  #ro obtinerea datelor din form-ul de login
  #en extract the uername and the password from the login form
  $username = $_POST['username'];
  $password = $_POST['password'];

  #ro mysql injection preventing
  #en mysql injection preventing
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);

  #ro conectarea la server
  #en connecting to the server
  mysql_connect("localhost", "root", "");
  mysql_select_db("Preeplogin");

  #ro verificare aka the big deal
  #en checking if input data is correct aka the big deal
  $result = mysql_query("select * from usernamesandpasswords where username = '$username' and password = '$password' ");
      
  $row = mysql_fetch_array($result);
  if($row['username'] == $username && $row['password'] == $password){
    echo "Bine ai venit, " . $row['username'] . " !";
  } else {
    echo "Username/Parola gresita! Mai incearca o data!";
  }

 ?>
