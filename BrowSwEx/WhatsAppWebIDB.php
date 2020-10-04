 <?php

function ExtractInfo(){

// ************************* IndexedDB File ***********************
$filename = 'input.log';
if (file_exists($filename)) { echo("<p>IndexedDB file exists, passing extractions <br><br></p>"); }
else{

// get the file list
$somePath = "/Users/furka/AppData/Local/Google/Chrome/User Data/Default/IndexedDB/https_web.whatsapp.com_0.indexeddb.leveldb/*";
$dirs = array_filter(glob($somePath));


// Move the .log file to root folder
$currentFilePath = $dirs[0];
$newFilePath = 'C:\wamp\www\BrowSwEx\input.log';
MoveFile($currentFilePath, $newFilePath);
// Move the .log file to root folder
} // end of else - the log file does not exist.
// ************************* IndexedDB File ***********************

}
 
function EntireOutputList(){
 
$file = fopen("input.log","r");

while(! feof($file))
  {
	  // Get one line from input
	  $oneLine = fgets($file);
	  
	  //First find the lines that have date and time in them. 
	  $regExTime = '/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/';
      preg_match($regExTime, $oneLine, $Timeresult);
      if($Timeresult != NULL){ // If the line includes date and time,
	  
	  // ***************************************************
	  // ****** This is the function call section **********
	  // ***************************************************
	  
	  // ************* Message Sent and Received ************* 
	  // action,message,chat filter 
	  $regExChat = '/action,message,chat/i';
	  preg_match($regExChat, $oneLine, $Chatresult);
	  if($Chatresult != NULL){ //echo $oneLine. "<br />";
	  	  
	  // sent message (Check if the line contains send)
	  $regExChatSend = '/send: /i';
	  preg_match($regExChatSend, $oneLine, $ChatSendresult);
	  if($ChatSendresult != NULL){ echo("<li>".$Timeresult[0]." Message Sent<br></li>");}
	  } // end of if action,message,chat
	  
	  
	  // action,msg,relay,chat
	  $regExChatR = '/action,msg,relay,chat/i';
	  preg_match($regExChatR, $oneLine, $ChatresultR);
	  if($ChatresultR != NULL){ //echo $oneLine. "<br />";
	  
	  // receive message
	   $regExChatReceive = '/recv: /i';
	   preg_match($regExChatReceive, $oneLine, $ChatReceiveresult);
	   if($ChatReceiveresult != NULL){ echo("<li>".$Timeresult[0]." Message Received<br></li>");}
	  } // end of if action,msg,relay,chat
	  // ************* Message Sent and Received ************* 
	  
	  
	  // *** NetworkStatus online ***
	  $regExStatusOnline = '/NetworkStatus online/i';
	  preg_match($regExStatusOnline, $oneLine, $StatusOnline);
	  if($StatusOnline != NULL){ echo("<li>".$Timeresult[0]." User is Online<br></li>");}
	  // *** NetworkStatus online ***
	  
	  
	  
	  
	  // *** Action User Unavailable ***
	  $regExActionUnavailable = '/action,presence,unavailable/i';
	  preg_match($regExActionUnavailable, $oneLine, $ActionUnavailable);
	  if($ActionUnavailable != NULL){ echo("<li>".$Timeresult[0]." User is away from computer<br></li>");}
	  // *** Action User Unavailable ***
	  
	  // *** Action User Available ***
	  $regExActionAvailable = '/action,presence,available/i';
	  preg_match($regExActionAvailable, $oneLine, $ActionAvailable);
	  if($ActionAvailable != NULL){ echo("<li>".$Timeresult[0]." User is near the computer<br></li>");}
	  // *** Action User Available ***
	  
	  
	  
	  
	  // *** User Loads a Media ***
	  $regExVideoLoad = '/video.onloadeddata/i';
	  preg_match($regExVideoLoad, $oneLine, $VideoLoad);
	  if($VideoLoad != NULL){ echo("<li>".$Timeresult[0]." User has accessed a video file<br></li>");}
	  // *** User Loads a Media ***
	  
	  
	  
	  // *** User is on a Call ***
	  $regExVideoCall = '/Call, .../i';
	  preg_match($regExVideoCall, $oneLine, $VideoCall);
	  if($VideoCall != NULL){ echo("<li>".$Timeresult[0]." User is on a call<br></li>"); //  echo $oneLine. "<br />";
	 }
	  // *** User is on a Call ***
	  
	  
	  // ***************************************************
	  // ****** This is the function call section **********
	  // ***************************************************
	  }
  }
  
fclose($file);
} // End of function EntireOutputList



function ChatOutputList(){
 
$file = fopen("input.log","r");

while(! feof($file))
  {
	  // Get one line from input
	  $oneLine = fgets($file);
	  
	  //First find the lines that have date and time in them. 
	  $regExTime = '/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/';
      preg_match($regExTime, $oneLine, $Timeresult);
      if($Timeresult != NULL){ // If the line includes date and time,
	  
	  
	  
	  // action,message,chat filter 
	  $regExChat = '/action,message,chat/i';
	  preg_match($regExChat, $oneLine, $Chatresult);
	  if($Chatresult != NULL){ //echo $oneLine. "<br />";
	  	  
	  // sent message (Check if the line contains send)
	  $regExChatSend = '/send: /i';
	  preg_match($regExChatSend, $oneLine, $ChatSendresult);
	  if($ChatSendresult != NULL){ echo("<li>".$Timeresult[0]." Message Sent<br></li>");}
	  } // end of if action,message,chat
	  
	  
	  // action,msg,relay,chat
	  $regExChatR = '/action,msg,relay,chat/i';
	  preg_match($regExChatR, $oneLine, $ChatresultR);
	  if($ChatresultR != NULL){ //echo $oneLine. "<br />";
	  
	  // receive message
	   $regExChatReceive = '/recv: /i';
	   preg_match($regExChatReceive, $oneLine, $ChatReceiveresult);
	   if($ChatReceiveresult != NULL){ echo("<li>".$Timeresult[0]." Message Received<br></li>");}
	  } // end of if action,msg,relay,chat

	  
	  
	  }
  }
  
fclose($file);
} // End of function ChatOutputList



function PresenceOutputList(){
 
$file = fopen("input.log","r");

while(! feof($file))
  {
	  // Get one line from input
	  $oneLine = fgets($file);
	  
	  //First find the lines that have date and time in them. 
	  $regExTime = '/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/';
      preg_match($regExTime, $oneLine, $Timeresult);
      if($Timeresult != NULL){ // If the line includes date and time,
	  
	  // *** NetworkStatus online ***
	  $regExStatusOnline = '/NetworkStatus online/i';
	  preg_match($regExStatusOnline, $oneLine, $StatusOnline);
	  if($StatusOnline != NULL){ echo("<li>".$Timeresult[0]." User is Online<br></li>");}
	  // *** NetworkStatus online ***
	  
	  // *** Action User Unavailable ***
	  $regExActionUnavailable = '/action,presence,unavailable/i';
	  preg_match($regExActionUnavailable, $oneLine, $ActionUnavailable);
	  if($ActionUnavailable != NULL){ echo("<li>".$Timeresult[0]." User is away from computer<br></li>");}
	  // *** Action User Unavailable ***
	  
	  // *** Action User Available ***
	  $regExActionAvailable = '/action,presence,available/i';
	  preg_match($regExActionAvailable, $oneLine, $ActionAvailable);
	  if($ActionAvailable != NULL){ echo("<li>".$Timeresult[0]." User is near the computer<br></li>");}
	  // *** Action User Available ***
	  }
  }
  
fclose($file);
} // End of function PresenceOutputList


// 
function MediaAccessOutputList(){
 
$file = fopen("input.log","r");

while(! feof($file))
  {
	  // Get one line from input
	  $oneLine = fgets($file);
	  
	  //First find the lines that have date and time in them. 
	  $regExTime = '/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/';
      preg_match($regExTime, $oneLine, $Timeresult);
      if($Timeresult != NULL){ // If the line includes date and time,
	  
	  // *** User Loads a Media ***
	  $regExVideoLoad = '/:MediaLoad:video.onloadeddata/i';
	  preg_match($regExVideoLoad, $oneLine, $VideoLoad);
	  if($VideoLoad != NULL){ echo("<li>".$Timeresult[0]." User has accessed a video<br></li>");}
	  // *** User Loads a Media ***
	  
	  }
  }
 fclose($file);
} // End of function MediaAccessOutputList 
  
  
  function VideoCallOutputList(){
 
$file = fopen("input.log","r");

while(! feof($file))
  {
	  // Get one line from input
	  $oneLine = fgets($file);
	  
	  //First find the lines that have date and time in them. 
	  $regExTime = '/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/';
      preg_match($regExTime, $oneLine, $Timeresult);
      if($Timeresult != NULL){ // If the line includes date and time,
	  
	  
	  // *** User is on a Call ***
	  $regExVideoCall = '/Call, .../i';
	  preg_match($regExVideoCall, $oneLine, $VideoCall);
	  if($VideoCall != NULL){ echo("<li>".$Timeresult[0]." User is on a call<br></li>"); //  echo $oneLine. "<br />";
	 }
	  // *** User is on a Call ***
	  
	  }
  }

fclose($file);
} // End of function VideoCallOutputList


// Function to move files
function MoveFile($currentFilePath, $newFilePath){
	
//Move the file using PHP's rename function.
$fileMoved = rename($currentFilePath, $newFilePath);
} // end of function
?> 