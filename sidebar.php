<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<div id="sidebar" >							
			
			<h1>Sidebar Menu</h1>
			<div class="left-box">
				<ul class="sidemenu">
                    <?php
				if(isset($_SESSION["custid"]))
				{
					?>
					<li><a href="account.php">Account</a></li>
                    <li><a href="sellvehicle.php">Sell Your Vehicle</a></li>
                    <li><a href="viewtestdrive.php">View Test drive request</a></li>
                      <li><a href="viewbuyvehicles.php">view purchased Vehicles</a></li>
                      <li><a href="viewbuyspareparts.php">view purchased Spareparts</a></li>
                       <li><a href="viewvehicleservicerequest.php">Vehicle Service request</a></li>
                       <li><a href="logout.php">Logout</a></li>
					<?php
				}
				else if(isset($_SESSION["empid"]))
				{
					?>
					<li><a href="empaccount.php">Employee Account</a></li>
                    <li><a href="viewemployees.php">View Employees</a></li>
                    <li><a href="viewcustomers.php">View customers</a></li>
                    <li><a href="viewservice.php">Vehicle service request</a></li>
                    <li><a href="viewcustomersellvehicle.php">Used vehicles</a></li>
                    <li><a href="viewvehiclestore.php">Vehicle Store</a></li>
                    <li><a href="viewbuyvehicles.php">Purchased vehicles</a></li>
                    <li><a href="viewtestdrive.php">Test drive</a></li>
                    <li><a href="viewspareparts.php">Spare parts</a></li>
                    <li><a href="viewbuyspareparts.php">Spare parts Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
					<?php
				}
				
				else
				{
					?>
                    <li><a href="index.php">Home</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="registration.php">Registration</a></li>
					<?php
				}
				?>
                    
				</ul>
			</div>
</div>		
		