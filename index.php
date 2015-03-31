<html>
<head>
<title>IS218 Project 1</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<h2>Integrated Post Secondary Educational Data System</h2>

<?php
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




?>
</body>
</html>
