<!DOCTYPE html>
<html>
<body>


<!--<select id="mySelect" onchange="myFunction()">
  <option value="Audi" text="audi"></option>
  <option value="BMW">BMW</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Volvo">Volvo</option>
</select>-->

<?php
//      echo '<select id="mySelect" onchange="myFunction()">';
$user = 'John';
require_once "connect.php";

try
   {
   	$polaczeniePDO = new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password);
   	
//$polaczeniePDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);nie wiem do czego to to
       echo 'Połączenie nawiązane!';
       $stmt = $polaczeniePDO->query('SELECT id, login FROM admins');
echo "<select id='mySelect' onchange='myFunction()'>";
  		while($row = $stmt->fetch())
      {
      	 echo "<option value='".$row["id"]."'>".$row["login"]."</option>";
      };
 //      echo "<option value='3' label='"'>"."</option>";
 
      echo "</select>";
}
   catch(PDOException $e)
   {
      echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
   };
      $stmt->closeCursor();
?>
<p id="demo">Przemo</p>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>

</body>
</html>
