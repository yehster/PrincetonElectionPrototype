<html>
 <head>
<link rel="stylesheet" type="text/css" href="pr.MyStylePlain.css" />
  <title>Election</title>
 </head>
 <body style="background-color: #F3E2A9">
 <?php
 include "SaveElection.php";
 connect();
 
 echo "<center><h1>Enter Results</h1><h2> District: {$_POST['district']},  Machine: {$_POST['machine']}</h2></center>";
 echo "<form action = './saveInputs.php'  method ='post'>";
  
 
 //get categories
 $categoriesResult = getCategories();
 $count = 0;
 while ($category = mysql_fetch_array($categoriesResult)){
  //get candidates
  $id = $category['category_id']; //echo " ID = {$id} ";
  
  $candidates = getCandidates($id);
  echo "<h1> {$category['category_name']}</h1>";
  
  
  while ($candidate = mysql_fetch_array($candidates)){
    
    $hidden = "candidateID" . $count++;
    echo "{$candidate['candidate_name']}: <input type = 'text' name = '{$candidate['candidate_id']}'><br>";
    echo "<input type = hidden name = $hidden METHOD = 'POST' value = '{$candidate['candidate_id']}'>";
  }
 }
 //$count--;
 
 
 
 //echo "<h1>US Senate</h1>";
 ////for loop over the candidates
 //echo "Corey Booker: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate two: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate three: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate four: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //
 //echo "<h1>Representative 12th district</h1>";
 //echo "Corey Booker: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate two: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate three: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate four: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //
 //echo "<h1>Sheriff</h1>";
 //echo "Corey Booker: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate two: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate three: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 //echo "Republican Candidate four: <input type = 'text' name = 'district_01' value = {$repCandidate_01}><br>";
 
  echo "<INPUT type = hidden name = 'district' METHOD = 'POST' value = '{$_POST['district']}'>";
  echo "<INPUT type = hidden name = 'machine' METHOD = 'POST' value = '{$_POST['machine']}'>";
  echo "<input type = hidden name = 'maxCount' METHOD = 'POST' value = '{$count}'>";
 echo "<br><br><input type=submit value=' Save '>";
 ?>
 
 </form>
 </body>
</html>