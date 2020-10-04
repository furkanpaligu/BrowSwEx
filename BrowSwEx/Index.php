<?php 
require_once ('Factory/every.php'); // Get the side menue
require_once ('TopCode/SideMenue.php'); // Get the side menue
require_once ('TopCode/TopMenue.php');  // Get the top menue
require_once ('WhatsAppWebIDB.php');  // Get the logic function
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BrowSwEx</title>

<link rel="icon" type="image/png" href="/images/logo.png" />
<link href="mainCSS.css" rel="stylesheet" type="text/css" />
<link href="scottdarby/stylish-select.css" rel="stylesheet" type="text/css" />
<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="menu_assets/stylesR.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<script src='SpryAssets/SpryCollapsiblePanel.js' type="text/javascript"></script>
<script src="/js/jquery-1.7.1.js"></script>
<script> 	

function ViewImageBar()
{
   var el = document.getElementById("Br");
   var el2 = document.getElementById("Pr");
   el.disabled = false;
   el2.disabled = false;
   
   var el3 = document.getElementById("ibut");
   el3.src = "images/New/Download-alt-2-icon - Copy.png";
   el3.onclick = "return ViewImageBarIki()"
   return false;
} 

function ViewImageBarIki(){} 

</script>

 <body>
 
<div class="container">
<?php 
    // Top menue
    $Top = new TopMenue();
    $Top->construct();
    echo($Top->top); 
	
	echo('<div class="container">');
	
	// Side menue
    $Side = new SideMenue();
    $Side->construct();
    $Side->endd();
    echo($Side->side);
	
	echo('<div class="content">');
?>
    
    
 
    <p><br />
  </p>
  <form name="userSec" action="userSecSubmit.php" method="POST">
  <?php echo('
<table width="850" border="0">
  <tr>
    <td width="30" height="85">&nbsp;</td>
    <td width="820"><table width="812" border="0">
      <tr>
	  <td width="70"></td>
        <td width="588"></td>
        <td width="214">&nbsp;</td>
      </tr>
      <tr>
	   <td width="70"><img src="images/logo.png" width="70" height="58" /></td>
        <td><span style="font-weight: bold; font-size: large;">&nbsp;BrowSwEx IndexedDB Analyzer - WhatsApp Web </span></td>
        <td><table width="210" border="0">
        ');
        ?>
        </table>
          </td>
      </tr>
    </table>
      <hr style="height: '10'; text-align: 'left'; color: '#FF0000'; width: '30%'" /></td>
  </tr>
</table>
</form>
<br />
<?php 
ExtractInfo();
 ?>
<table width="850" height="93" border="0">
    <tr>
        <td width="24" height="89">&nbsp;</td>
        <td width="755"><div id="CollapsiblePanel4" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Entire Output Timeline Lisiting</div>
          <div class="CollapsiblePanelContent">
            <ul>
             <p><br />This section presents <em><strong>all the activities</strong></em> collected from the input file.</p>
                  <?php EntireOutputList(); ?>
				  </ul></div>
          </div>
		  
		  
		  
          <div id="CollapsiblePanel1" class="CollapsiblePanel">
            <div class="CollapsiblePanelTab" tabindex="0">Chat History Outout Listing </div>
         <div class="CollapsiblePanelContent">
            <ul>
             <p><br />This section presents <em><strong>user's chatting information</strong></em> collected from the input file.</p>
                  <?php ChatOutputList(); ?>
				  </ul></div>
          </div>
		  
		  
          <div id="CollapsiblePanel5" class="CollapsiblePanel">
            <div class="CollapsiblePanelTab" tabindex="0">User Presence Listing</div>
         <div class="CollapsiblePanelContent">
            <ul>
             <p><br />This section presents <em><strong>user presence information</strong></em> collected from the input file.</p>
                  <?php PresenceOutputList(); ?>
				  </ul></div>
          </div>
		  
		  
		  <div id="CollapsiblePanel9" class="CollapsiblePanel">
            <div class="CollapsiblePanelTab" tabindex="0">Media Access Listing</div>
         <div class="CollapsiblePanelContent">
            <ul>
             <p><br />This section presents <em><strong>user's access to media files</strong></em> collected from the input file.</p>
                  <?php MediaAccessOutputList(); ?>
				  </ul></div>
          </div>
		  
		  
		 <div id="CollapsiblePanel3" class="CollapsiblePanel">
            <div class="CollapsiblePanelTab" tabindex="0">Video/Voice Call Listing</div>
         <div class="CollapsiblePanelContent">
            <ul>
             <p><br />This section presents <em><strong>user's access to media files</strong></em> collected from the input file.</p>
                  <?php VideoCallOutputList(); ?>
				  </ul></div>
          </div>
		  
		
        </div></td>
</tr>
      <tr> </tr>
    </table>
   
   
<!-- A Group End It -->   
<p align="left" class="block" style="font-weight: bold; font-size: large; font-family: Verdana, Arial, Helvetica, sans-serif;">&nbsp;</p>
  </div>
  <div class="footer" style="color: #CCC"><!-- end .footer -->
    <div align="center">1905 University Ave, Huntsville, TX 77340</div>
  </div>
<!-- end .container --></div>

<script type="text/javascript">
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5", {contentIsOpen:false});
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4", {contentIsOpen:false});
var CollapsiblePanel9 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel9", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3", {contentIsOpen:false});
</script>
</body>
</html>
