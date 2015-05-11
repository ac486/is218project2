<html>
<head>
<title>IS218 Project 2</title>
<!--<link rel="stylesheet" href="css/main.css">-->
</head>
<body>
<h2>IS218 Project 2</h2>

<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include 'pages.php';

if(isset($_GET['page'])){
  $qry = new $_GET['page'];
  } else{
  echo '<a href="?page=sql1">1. Colleges with the highest percentage of women
  students</a>';
  echo "</br></br>";
  echo '<a href="?page=sql2">2. Colleges with the highest percentage of male
  students</a>';
  echo "</br></br>";
  echo '<a href="?page=sql3">3. Colleges with the largest endowment overall</a>';
  echo "</br></br>";
  echo '<a href="?page=sql4">4. Colleges with the largest enrollment of
  freshman</a>';
  echo "</br></br>";
  echo '<a href="?page=sql5">5. Colleges with the highest revenue from tuition</a>';
  echo "</br></br>";
  echo '<a href="?page=sql6">6. Colleges with the lowest non zero tuition
  revenue</a>';
  echo "</br></br>";
  echo '7. The top 10 colleges by region for the following
  statistics:';
  echo '<ol><li><a href="?page=sql7">Endowment</a></li>
            <li><a href="?page=sql8">Total Current Assests</a></li>
	    <li><a href="?page=sql9">Total current liabilities</a></li>
	    <li><a href="?page=sql10">Lowest non-zero tuition</a></li>
	    <li><a href="?page=sql11">Highest Tuition</a></li></ol>';
  echo "</br></br>";
}

/*
class csvfile{
   public $csv;
   public $headings;

   public function readfile($csv,$headings){
   //creating function here
      ini_set('auto_detect_line_endings',TRUE);
      //use ini_set as a sanity check
      if(($handle = fopen($csv,"r")) !== FALSE){
         while(($row=fgetcsv($handle,",")) !== FALSE){
	    if($headings == TRUE){
	       $heading = $row;
	       $headings = FALSE;
	    }
	    else{
	       $record = array_combine($heading,$row);
	       $records[] = $record;
	       $name[] = $row[1]; //creates array for university names
	    }
	 }
      fclose($handle);
      }
   
   if(empty($_GET)){
      foreach($records as $record){
	 $i++;
	 $record_num = $i - 1;
	 echo '<a
	 href='.'"https://web.njit.edu/~ac486/is218project/index.php?record='.$record_num.'"'.'>'.$name[$record_num].'</a>';
	 echo'</p>';
       }
    }

    $record = $records[$_GET['record']];
    
    echo '<a href='.'"https://web.njit.edu/~ac486/is218project/"'.'>'."Go
    Back>>".'</a>';//home button
    echo"<table align=center>";//table for records

    foreach($record as $key => $value){
       echo"<tr>";
       echo"<th>$key</th>";
       echo"<td>$value</td>";
       echo"</tr>";
    }
    
    echo"</table>";
  }//close function
}//close class

$newimport = new csvfile();//creating class
$newimport->readfile("hd2013_edit.csv",TRUE); //running function
*/



?>
</body>
</html>
