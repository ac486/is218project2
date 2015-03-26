<html>
<p>test</p>
<?php
  /*$CSVfp = fopen("hd2013.csv","r");
   if($CSVfp !== FALSE){
      while(! feof($CSVfp)){
         $data = fgetcsv($CSVfp,1000, ",");
	 print_r($data);
      }
   }
   fclose($CSVfp);*/
   function readCSV($csvFile){
   	$file_handle = fopen($csvFile, 'r');
		while (!feof($file_handle) ) {
				$line_of_text[] = fgetcsv($file_handle, 1024);
					}
						fclose($file_handle);
							return $line_of_text;
							}


							// Set path to CSV file
							$csvFile = 'hd2013.csv';

							$csv =
							readCSV($csvFile);
							echo '<pre>';
							print_r($csv);
							echo '</pre>';


?>
</html>
