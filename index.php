<html>
<p>test</p>
<?php
   echo'<a href="?page=php">PHP Menu</a></br>';

   $obj = new $REQUEST['page'];
   class page{
      function __contruct(){
         echo 'I am the' . $_REQUEST['page'],'page';
      }
   }

   class php extends page {
      function __construct(){
         echo 'This is an object:',$_REQUEST['page'],'page';
      }
      
   }










?>
</html>
