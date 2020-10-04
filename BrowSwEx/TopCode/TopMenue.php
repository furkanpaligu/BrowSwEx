<?php 

class TopMenue{
	
public $top;

function construct(){
	
$user = "User"; // $_SESSION['username'];
$userTypeName =  "userTypeName"; //  $_SESSION['typeName'];
$userType =  "userType"; //  $_SESSION['type'];
$NewMessages = "NewMessages"; //  $_SESSION['NewMessages'];

$addto =  ""; // $_SESSION['addto'];	

$this->top =  "<div id='cssmenu'>
         <ul>
         <li><a href='Index.php'><span>Main</span></a></li>";
	  
  
  
// Everybody has these *** *** *** *** *** *** *** *** ***		 
$this->top .=  " </div>";
// Everybody has these *** *** *** *** *** *** *** *** ***

} // function consstruct
     

} // class  
?>
