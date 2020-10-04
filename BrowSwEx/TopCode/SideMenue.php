<?php 
class SideMenue{
	
public $side;

function construct(){
	
$addto = ""; // $_SESSION['addto'];
	
$this->side =  '<div class="sidebar">
  
      <img style="border-bottom: solid #ff0000" src="'.$addto.'images/backgrounds/2015-07-13_1234.png" alt="" width="200" height="136" />
    <p></p>
	<p align="center">BrowSwEx v0.1 BETA</p><br />';
	
$this->side .=	
   "<p>&nbsp;</p>";
	
//$this->side =  <hr style="height: '10'; text-align: 'left'; color: '#FF0000'; width: '30%'" />
$this->side .=  
    "
    <div id='cssmenuR'>
      <ul>
        <li class='has-subR '><a href='Index.php'><span>WhatsApp Web Analyzer</span></a></li>
      </ul>
    </div>";
	
/*	*/


	
	
	
$this->side .=	
   "<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
    <p>&nbsp;</p>";

   } // function consstruct
	
function endd(){$this->side .= "</div>";} // function endd
} // class  
?>