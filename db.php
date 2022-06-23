<?php
session_start();
   // Database configuration    
   $hostname = "localhost"; 
   $username = "root"; 
   $password = ""; 
   $dbname   = "ticker_reserve";
    
  //  Create database connection 
   $con=new mysqli($hostname, $username, $password, $dbname); 
    
  