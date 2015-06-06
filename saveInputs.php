<html>
 <head>
<link rel="stylesheet" type="text/css" href="pr.MyStylePlain.css" />
  <title>Save grades</title>
 </head>
 <body style="text-align: center; background-color: #F3E2A9">
 <?php
 //echo '<center><h1>Save Input</h1></center>'; 
include "SaveElection.php";
connect();
$maxCount = $_POST['maxCount'];
for ($i=0; $i<$maxCount; $i++){
    $hidden = "candidateID" . $i;
    $candidateID = $_POST[$hidden];
    $votes = $_POST[$candidateID];
saveElectionResults($_POST['district'], $_POST['machine'], $candidateID, $votes);
}



?>
<br><br><br><br><br><br><br>
<h1>Results Saved!</h1>
</body>
</html>