<!DOCTYPE html>
<html>

  <html lang="en">
    <head>
       <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - EMS</title>
       

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	


<style type="text/css">

  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  
  
  
  </style>
		
		
    </head>
<body>



<h2>Train Ticket Reservation System</h2>


<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <form id="regiration_form" novalidate action="action.php"  method="post">
  <h2></h2>
  <fieldset>
    <h2>Step 1</h2>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required >
    </div>
	<br>
    <div class="form-group">
    <label for="exampleInputgender">Gender:(optional)</label>
	            Male<input type="radio"   name="gender" value="Male" id="male"    />
		            Female<input type="radio"   name="gender" value="Female" id="female" /> 
    
	 
    </div>
    <input type="button" name="gender" onclick="saveData()" id="save_btn"  class="next btn btn-info" value="Next" id="gender"/>
  </fieldset>
  <fieldset>
    <h2> Step 2: </h2>
    
	<div class="form-group" >
  <div class="card text-center" style="padding:20px;">
    
	 <label for="place">From:</label>
	 <br>
	 
  <select name="splace" id="splace" required >
    <option value="東京">東京</option>
    <option value="横浜">横浜</option>
    <option value="名古屋">名古屋</option>
    <option value="大阪">大阪</option>
  </select>
  </div>
  </div>
  <br><br>
    </div>
   <div class="form-group" >
  <div class="card text-center" style="padding:20px;">
    
	 <label for="place">To:</label>
	 <br>
	 
  <select name="eplace" id="eplace">
    <option value="東京">東京</option>
    <option value="横浜">横浜</option>
    <option value="名古屋">名古屋</option>
    <option value="名古屋">名古屋</option>
  </select>
  </div>
  </div>
  <br>
  <br>
  <br>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" onclick="saveData()" id="save_btn"  class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
    <h2> Step 3</h2>
    <div class="form-group">
     <label for="DATE">Date:</label>
	 <br>
  <input type="date" id="DATE" name="DATE" value="<?= date('Y-m-d') ?>" required>
    </div>
    <div class="form-group">
    <label for="Time">Time</label>
	<br>
     
	<input type="time" name="time1" placeholder="Enter start time" required id="time1" /> </td>
 
 <!-- <h3 id="time"> </h3> -->
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" onclick="saveData()" id="save_btn"  class="next btn btn-info" value="Next" />
  </fieldset>
  
  <fieldset>
    <h2> Step 4</h2>
    <div class="form-group">
    <label for="amount">Amount</label>
   
	<input type="number" name="amount" maxlength="8" id="amount"  min="0" step="0.01" placeholder="Enter Amount" p="[0-9]{4}" style="color:#888;" required />
	
    </div>
   
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" onclick="saveData()" id="save_btn"  class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
    <h2> Step 5</h2>
    <div class="form-group">
    <label for="Note">Note</label>
   
	<input type="textarea" name="Note" id="Note" value="Report before 15 Minutes of the Departure.Good Luck" required />
	
    </div>
   
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" onclick="saveData()" id="save_btn"  class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
    <h2>Step 6: </h2>
	
    <div class="form-group">
    <label for="note1">Note</label>
    <input type="text" name="note1" id="note1" class="form-control" id="mob" placeholder="Enter Note" required>
    </div>
    
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="submit" name="submit" onclick="deleteItem()" class="submit btn btn-success" value="Submit" />
  </fieldset>
  
  
  
  <?php 
 if (isset($_SESSION['reserve_key'])) 
{ 

 ?>
 <div class="alert alert-success alert-dismissible"> <span style="font-size:30px;">&#9989;</span>
   
     <strong> Thank you. Your Reservation ID is </strong>  <?= $_SESSION['reserve_key']; ?>
            
            <button type="button" class="close" data-dismiss="alert">&times;</button>
           
          </div>

<?php
  unset($_SESSION['reserve_key']);
}
?>
  </form>
  <!-- <h1 id="time"> </h1>-->
  



<script>
  



$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });

  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");  
  }
});
</script>
 

<script> 
function saveData() {
 let name,gender,splace,eplace,DATE,time1,amount,Note,note1;
 
 const user=
 {
	 name=document.getElementByID("name").value,
 gender=document.getElementById("gender").valur,
 splace=document.getElementById("splace").value,
eplace=document.getElementById("eplace").value,
 DATE=document.getElementById("DATE").value,
 time1=documet.getElementById("time1").value,

 amount=document.getElementById("amount").value,
 Note=document.getElementById("Note").value,
 note1=document.getElementById("note1").value
 }
 
 name=document.getElementByID("name").value;
 gender=document.getElementById("gender").valur;
 splace=document.getElementById("splace").value;
eplace=document.getElementById("eplace").value;
 DATE=document.getElementById("DATE").value;
 time1=documet.getElementById("time1").value;

 amount=document.getElementById("amount").value;
 Note=document.getElementById("Note").value;
 note1=document.getElementById("note1").value;
 
 localStorage.setItem("name",name)
 localStorage.setItem("gender",gender) 
 localStorage.setItem("splace",splace)
 localStorage.setItem("eplace",eplace)
 localStorage.setItem("DATE",DATEname)
 localStorage.setItem("time1",time1) 
 localStorage.setItem("Note",Note)
 localStorage.setItem("note1",note1)
}
 let string=JSON.stringify(user);
 const secret="llll"
 let encrypted=CrytoJS.AES.encrypt(string,secret),toString();
 let bytes=CryptoJS.AES.decrypt(encrypted,secret);
 bytes.toString(CryptoJS.enc.Utf8);
 
 console.log(JSON.parse(data));
 
 function deleteItem() {
  localStorage.removeItem("mytime");
  localStorage.removeItem("name",name)
 localStorage.removeItem("gender",gender) 
 localStorage.removeItem("splace",splace)
 localStorage.removeItem("eplace",eplace)
 localStorage.removeItem("DATE",DATEname)
 localStorage.removeItem("time1",time1) 
 localStorage.removeItem("Note",Note)
 localStorage.removeItem("note1",note1)
}
</script>

</body>
</html>