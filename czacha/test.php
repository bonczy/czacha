<!DOCTYPE html>
<html>
<body>
  <p id="demo">fdfd</p>
<?php
$name = 'John';
require_once "connect.php";
   try
   {
   	$polaczeniePDO = new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password);

//$polaczeniePDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //     echo 'Połączenie nawiązane!';
      $stmt = $polaczeniePDO->query('SELECT id, login FROM admins');
      
      
      echo '<select id="mySelect" onchange="myFunction()">';
  while($row = $stmt->fetch())
      {
      echo '<option value="'.$row['id'].'">'.$row['login'].'</option>';
     // 	echo $row['id'];
      	
        //  echo '<option id=\"'.$row['id'].'\"><'.$row['login'].'</option>';
      }
      $stmt->closeCursor();

       }
   catch(PDOException $e)
   {
      echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
   };
   echo''
   ?>
 
    <script>
function myFunction() {

  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "You selected: " + x;
  
  //alert(document.getElementById("mySelect").value);
}
</script>

   </body>
</html>
   