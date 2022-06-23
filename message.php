<?php 
 if (isset($_SESSION['message'])) 
{ 

 ?>
 
  
   <strong> Hi! </strong> <?= $_SESSION['message']; ?>
           
           
        


<?php
  unset($_SESSION['message']);
}
?>




