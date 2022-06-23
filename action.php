


<?php
include('db.php');













 
if(isset($_POST['submit'])){
	
	
	
	
	
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$gender=mysqli_real_escape_string($con,$_POST['gender']);
	// $dept_code=mysqli_real_escape_string($con,$_POST['dept_code']);
	 $start_place_form=mysqli_real_escape_string($con,$_POST['splace']);
	 $end_place_to=mysqli_real_escape_string($con,$_POST['eplace']);
	 
	 $date=mysqli_real_escape_string($con,$_POST['DATE']);
	 $time=mysqli_real_escape_String($con,$_POST['time1']);
	 $amount=mysqli_real_escape_string($con,$_POST['amount']);
	 $Note=mysqli_real_escape_string($con,$_POST['Note']);
     $note1=mysqli_real_escape_string($con,$_POST['note1']);
	 $resevedkey=rand();
	 
	 
	 $_SESSION['reserve_key']=$resevedkey;
	 
	  $sql="select * from reserved_ticket where name='$name' ;";
      $res=mysqli_query($con,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

     if($name==$row['name'])
     {
           $errorMsg =' Name alredy Exists.<br> Give event user ID';
          } 
     
      }
}
	 if(!isset($errorMsg)){ 
	 
	 //$password = $con->real_escape_string(md5($_POST['password']));
	 $result=mysqli_query($con,"Insert into reserved_ticket (name,gender,start_place,end_place,date,time,amount,note,note1,reserved_key
	  )
	 values('$name','$gender','$start_place_form','$end_place_to','$date','$time','$amount','$Note','$note1','$resevedkey'
	 )" );
	 
	 }
	 if($result="true")
    {
    


 
		 $_SESSION['message']="<h2> your reservation key </h2>";
header('location:we.php');
	die();
	 
    }
    else{
      $error[] ='Failed : Something went wrong';
    } 
 
	 



?>
<?php echo "vvv"; ?>