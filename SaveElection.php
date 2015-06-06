<?php

global $variables; 

$variables['username'] = "root";
$variables['password'] = "mattmark123";  
$variables['database'] = "elections";

//---------------------------------------------------------------------------------
function saveElectionResults($district, $machine_number, $candidateID, $votes){ 
    $table = "results";
    $query = "SELECT * FROM $table WHERE district = $district AND machine = $machine_number AND candidateID = $candidateID";
       // echo $query;
    $result = mysql_query($query) or die(" Find saveElectionResults query Failed!".mysql_error());
    $rows = mysql_num_rows($result);
    
 
    if ($rows == 0){
        $query = "INSERT INTO $table (district, machine, candidateID, votes) VALUES ($district, $machine_number, $candidateID, $votes)";
    }else{
        $query = "UPDATE $table SET ";
        $query .= "votes = $votes ";
        $query .= "WHERE district = $district AND machine = $machine_number AND candidateID = $candidateID";  											
    }
    //echo $query;
    $result = mysql_query($query) or die("Save saveElectionResults query failed".mysql_error());
}

//-------------------------------------------------------------------------------------------------------------
function getCandidates($category_id)
{
	$query = "SELECT * FROM `candidates` WHERE `category_id`  = {$category_id}";
	//$query .= " ORDER BY display_name"; //
        //echo $query;  
    $result = mysql_query($query) or die("Student getCandidates Failed!");
	return $result;
}

//--------------------------------------------------------------------------------------------------------------
 function connect()
{    
global $variables;

    $connection = mysql_connect("localhost", $variables['username'], $variables['password']) or die("Unable to connect to SQL server");
    mysql_select_db($variables['database']) or die("Unable to select database from connect()"); //echo "here";
    //return $connection;
}

//-------------------------------------------------------------------------------------------------------------
function getCategories(){
    $query = "SELECT * FROM categories";   //echo $query;
    $result = mysql_query($query) or die(" getCategories query Failed!"); 

    return $result;
}

//-------------------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------


?>