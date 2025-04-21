<?php

$url = '‪C:\xampp\htdocs\op\images\sparepartsorder.jpg';

?>
<?php
include("header.php");
include("sidebar.php");

if(isset($_SESSION["custid"]))
{
	header("Location: account.php");
}

?>‪C:\xampp\htdocs\op\images\sparepartsorder.jpg
		
							
		<div id="main">
	    <h3>E-workshop - Complete Auto solutions</h3>
	    <table width="537" border="0">
		    <td width="236"><a href="login.php"><img src="images/login.jpg" width="276" height="129" /></a></td>
		    <td width="285"><a href="registration.php"><img src="images/registration.png" width="277" height="138" /></a></td>
	      </tr>
		  <tr>
		    <td><p><strong> Online car servicing booking</strong><strong><a href="login.php"><img src="images/onlinevehicleservice.gif" width="276" height="131" /></a></strong></p></td>
		    <td valign="top"><a href="login.php"><img src="images/sellcar.png" width="280" height="156" /></a></td>
	      </tr>
		  <tr>
		    <td><a href="vehiclestore.php"><img src="images/buy vehicles.jpg" width="276" height="182" /></a></td>
		    <td><a href="sparepartsstore.php"><img src="images/spareparts.jpg" width="283" height="182" /></a></td>
	      </tr>
		  </table>
		</div>			
		
<!-- wrap ends here -->
</div>
		
<?php
include("footer.php");
?>