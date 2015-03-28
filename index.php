<html>
<head><title>IS218 Project 1</title></head>
<body>
<p>test1</p>
<?php
class csvfile{
   public $csv;
   public $column_headings;

   public function readcsv($csv,$column_headings){
      ini_set('auto_detect_line_endings',TRUE);
      if(($handle = fopen($csv,"r")) !== FALSE){
         while(($row=fgetcsv($handle,",")) !== FALSE){
	    if($column_headings == TRUE){
	       $column_heading = $row;
	       $column_headings = FALSE;
	    }
	    else{
	       $record = array_combine($column_heading,$row);
	       $records[] = $record;
	    }
	 }
      fclose($handle);
      }
   
   if(empty($_GET)){
      foreach($records as $record){
	 $i++;
	 $record_num = $i - 1;
	 echo '<a href='.'"https://web.njit.edu/~ac486/is218project/index.php?record='.$record_num.'"'.'>University'.$i.'</a>';
	 echo'</p>';
       }
    }

    $record = $records[$_GET['record']];
    echo"<table border='1'>";

    foreach($record as $key => $value){
       echo"<tr>";
       echo"<th>$key</th><td>$value</td>";
       echo"</tr>";
    }

    echo"</table>";
  }//close function
}//close class

$newfile = new csvfile();
$newfile->readcsv("hd2013.csv",TRUE);




?>
</body>
</html>
