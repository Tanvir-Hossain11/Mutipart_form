<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style type="text/css">
#second,#third,#fourth,#fifth,#sixth,#result{
	display: none;
}

.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu  main main main right right'
    'menu footer footer footer footer footer';
  gap: 2px;
  background-color: #2196F3;
  padding: 10px;
}
.grid-container > div.item1 {
  background-color: rgb(225, 225, 255);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.grid-container > div.item3 {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 80px 0;
  font-size: 30px;
}
.grid-container > div.item2 {
  background-color: rgb(238, 132, 130);
  text-align: center;
  padding: 80px 0:
  padding-right: 90px;
  font-size: 30px;
}
.grid-container > div.item4 {
  background-color: rgb(238, 132, 130);
  text-align: center;
  padding: 80px 0;
  font-size: 30px;
}
.grid-item3 {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 60px;
  text-align: center;
}
    </style>
<body class="bg-dark">


	 
	 <div class="grid-container">
  <div class="item1">Ticket Reservation System</div>
  <div class="item2"></div>
  <div class="item3"><div class="container"> 
<div class="row justify-content-center">
    <div class="col-md-6 bg-light p-4 rounded" >
        <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result"> gello </h5>
		<div class="progress mb-3" style="height:40px;">
<div class="progress-bar bg-danger" role="progressbar" style="width:20%" id="progressBar">
<b class="lead' id="progressText">Steps</b>

</div>
</div>
<form action="action.php" method="post" id="form-data"> 
<div id="first">
   <h2>Step 1</h2>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required >
    
	<b class="form-text text-danger" id="nameerr1"> </b>
	</div>
	
	<br>
 <div class="form-group">
    <label for="exampleInputgender">Gender:(optional)</label>
	<br>
	            Male <input type="radio"   name="gender" value="Male" id="male"    />
		            Female <input type="radio"   name="gender" value="Female" id="female" /> 
    
	 </div>
	 
    <div class="form-group">
	<a href="#" class="btn btn-danger" id="next-1" onclick="store()"> next </a>
   
     </div>
   
  </div>
   
  <div id="second">
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
  <b class="form-text text-danger" id="nameerr2"> </b>
  </div>
  </div>
  <br><br>
    
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
  <b class="form-text text-danger" id="nameerr3"> </b>
  </div>
  </div> 
  <br>
  <br>
  <br>
  <div class="form-group" >
  <a href="#" class="btn btn-danger" id="prev-2"> Previous </a>
	<a href="#" class="btn btn-danger" id="next-2" onclick="store1()" > next </a>
   
  </div>
  </div>
   
  <div id="third">
    <h2> Step 3</h2>
     <div class="form-group">
     <label for="DATE">Date:</label>
	 <br>
      
	  <input type="date" id="DATE" name="DATE" value="<?= date('Y-m-d') ?>" required>
    <b class="form-text text-danger" id="nameerr4"> </b>
	</div>
	
    <div class="form-group">
       <label for="Time">Time</label>
	  <br>
     </div>
	 
	 <div class="form-group">
	    <input type="time" name="time1" placeholder="Enter start time" required id="time1" /> </td>
 <b class="form-text text-danger" id="nameerr5"> </b>
 <!-- <h3 id="time"> </h3> -->
    </div>
	
	<div class="form-group">
	<a href="#" class="btn btn-danger" id="prev-3"> Previous </a>
	<a href="#" class="btn btn-danger" id="next-3" onclick="store2()"> next </a>
   
   </div>
 
 </div>
  
  <div id="fourth">
    <h2> Step 4</h2>
    <div class="form-group">
    <label for="amount">Amount</label>
   
	<input type="number" name="amount" maxlength="8" id="amount"  min="0" step="0.01" placeholder="Enter Amount" p="[0-9]{4}" style="color:#888;" required />
	<b class="form-text text-danger" id="nameerr6"> </b>
    </div>
   <div class="form-group">
	<a href="#" class="btn btn-danger" id="prev-4"> Previous </a>
	<a href="#" class="btn btn-danger" id="next-4" onclick="store3()">> next </a>
   
   </div>
  </div>
  <div id="fifth">
    <h2> Step 5</h2>
    <div class="form-group">
    <label for="Note">Note</label>
   
	<input type="textarea" name="Note" id="Note" value="Report before 15 Minutes of the Departure.Good Luck" required >
	<b class="form-text text-danger" id="nameerr7"> </b>
    </div>
   
   <div class="form-group">
	<a href="#" class="btn btn-danger" id="prev-5"> Previous </a>
	<a href="#" class="btn btn-danger"  onclick ="store4() ; displayItem();" id="next-5"> next </a>
    
   </div>
  </div>
 <div id="sixth">
    <h2>Step 6: </h2>
	
    <div class="form-group">
    <label for="note1">Note</label>
    
	<input type="text" name="note1" id="note1" class="form-control" id="mob" placeholder="Enter Note" required>
    <b class="form-text text-danger" id="nameerr8"> </b>
	</div>
     <div class="form-group">
	<a href="#" class="btn btn-danger" id="prev-6"> Previous </a>
	
 <input type="submit" name="submit" value="submit" onclick ="deleteItem()" class="btn btn-success">
   </div>
</div>
</form>
</div>
</div>
     </div></div>  
  <div class="item4"></div>
  
</div>
<div>
<?php include('message.php') ?>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#next-1").click(function(e) {
		e.preventDefault();
		$("#nameerr1").html('');
		if($("#name").val()== ''){
			$("#nameerr1").html('* name is Required.');
			return false;
		}
		else {
		$("#second").show();;
		$("#first").hide();
		$("#progressBar").css("width","40%");
		$("#progressText").html("Step - 2");
		}
		
	});
	$("#next-2").click(function(e){
e.preventDefault();
		$("#third").show();
		$("#second").hide();
		$("#progressBar").css("width","60%");
		$("#progressText").html("Steps");
		
	});
	$("#next-3").click(function(e){
		e.preventDefault();
		$("#nameerr5").html('');
		if($("#time1").val()== ''){
			$("#nameerr5").html('* time is Required.');
			return false;
		}
		else{
		$("#fourth").show();
		$("#third").hide();
		$("#progressBar").css("width","70%");
		$("#progressText").html("Steps");
		}
	}); 
	$("#next-4").click(function(e){
		e.preventDefault();
		
		$("#nameerr6").html('');
		if($("#amount").val()== ''){
			$("#nameerr6").html('* Amount is Required.');
			return false;
		}
		else {
		$("#fifth").show();
		$("#fourth").hide();
		$("#progressBar").css("width","80%");
		$("#progressText").html("Steps");
		}
	});
	$("#next-5").click(function(e){
		e.preventDefault();
		
		$("#nameerr7").html('');
		if($("#Note").val()== ''){
			$("#nameerr7").html('* Note is Required.');
			return false;
		}else{
		$("#sixth").show();
		$("#fifth").hide();
		$("#progressBar").css("width","90%");
		$("#progressText").html("Steps");
		}
	});
	$("#prev-2").click(function(){
		$("#second").hide();
		$("#first").show();
		$("#progressBar").css("width","20%");
		$("#progressText").html("Steps");
		
	});
	$("#prev-3").click(function(){
		$("#third").hide();
		$("#second").show();
		$("#progressBar").css("width","40%");
		$("#progressText").html("Steps");
		
	});
	$("#prev-4").click(function(){
		$("#fourth").hide();
		$("#third").show();
		$("#progressBar").css("width","60%");
		$("#progressText").html("Steps");
		
	});
	$("#prev-5").click(function(){
		$("#fifth").hide();
		$("#fourth").show();
		$("#progressBar").css("width","70%");
		$("#progressText").html("Steps");
		
	});
	$("#prev-6").click(function(){
		$("#sixth").hide();
		$("#fifth").show();
		$("#progressBar").css("width","80%");
		$("#progressText").html("Steps");
		
	});
});
</script>

<script>

 function store(){
     var inputEmail= document.getElementById("name");
     localStorage.setItem("name", inputEmail.value);
    }
</script>
<script>
function store1(){
var gender = $('#gender').val();
var place = $('#splace').val();
var toplace = $('#eplace').val();
localStorage.setItem("gender", gender);
localStorage.setItem("splace", place)
localStorage.setItem("eplace", toplace);
}
function store2(){
var date = $('#DATE').val();
var time = $('#time1').val();
localStorage.setItem("DATE", date);
localStorage.setItem("time1", time);}

function store3(){
var amount = $('#amount').val();

localStorage.setItem("amount", amount);

}

function store4(){
var Note = $('#Note').val();

localStorage.setItem("Note", amount);
var storedValue = localStorage.getItem("name");

}
let string=JSON.stringify(encrypt);
 const secret="llll"
 let encrypted=CrytoJS.AES.encrypt(string,secret),toString();
 let bytes=CryptoJS.AES.decrypt(encrypted,secret);
 bytes.toString(CryptoJS.enc.Utf8);
 
 console.log(JSON.parse(data));

function displayItem() {
  var x = localStorage.getItem("name");
  document.getElementById("demo").innerHTML = x;
  var x1 = localStorage.getItem("gender");
  document.getElementById("demo").innerHTML = x1;
  var x2 = localStorage.getItem("splace");
  document.getElementById("demo").innerHTML = x2;
}

function deleteItem() {
 
  localStorage.removeItem("name",name),
 localStorage.removeItem("gender",gender) ,
 localStorage.removeItem("splace",splace),
 localStorage.removeItem("eplace",eplace),
 localStorage.removeItem("DATE",DATEname),
 localStorage.removeItem("time1",time1) ,
 localStorage.removeItem("Note",Note),
 localStorage.removeItem("note1",note1);
}
</script>
</body>
</html>