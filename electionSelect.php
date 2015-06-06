<html>
 <head>
<link rel="stylesheet" type="text/css" href="pr.MyStylePlain.css" />
  <title>Election</title>
 </head>
 <body style="text-align: center; background-color: #F3E2A9">
    <br><br>
    <h1>Choose Election District and Machine</h1>
 <?php



echo "Select the district: ";
echo "<form action = './electionSpecificInput.php' name='choices' method ='post'> ";
echo "<select name='district'>";

$number_of_districts = 22;
for ($i=1; $i<=$number_of_districts; $i++){
echo '<OPTION VALUE="' . $i . '">' . $i ;
}

echo "</select><br><br>Select the machine: ";
echo "<select name='machine'>";


$maximum_number_machines = 3;
for ($i=1; $i<=$maximum_number_machines; $i++){
echo '<OPTION VALUE="' . $i . '">' . $i ;
}

echo "</select>";



?>
<br>
<p><input type=submit></p>
</form>
 </body>
</html>