


<?php 
 if (isset($_SESSION['reserve_key'])) 
{ 

 ?>
 
   
     <strong> Thank you. Your Reservation ID is  </strong>  <?= $_SESSION['reserve_key']; ?>
            


<?php
  unset($_SESSION['reserve_key']);
}
?>
<?php include('message.php') ?>
                     <!--       -->
                  