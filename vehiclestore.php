<?php
session_start();
include("header.php");
		if(isset($_SESSION["empid"]))
	{
		header("Location: empaccount.php");
	}

include("sidebar.php");
include("dbconnection.php");
$sql = mysqli_query($db,"select * from vehiclestore where status != 'Sold'");
?>
						
		<div id="main">
	    <h3>Vehicle store</h3>
        
		<div id="wrapper">
        <?php
		   while($row = mysqli_fetch_array($sql))
        {
		?>
        <div id="products">
        <table align="center" width="497" border="1" >
        <tr>
        <td align="center"><img src="upload/<?= $row['images']; ?>" width="122" height="95" align="left" /><strong>Vehicle Name:</strong> <?= $row['vehname']; ?><br />
        <strong>Model:</strong> <?= $row['model']; ?> <br />
        <strong>              Brand:</strong><?= $row['brand']; ?><br />
              <strong>Estimated price: </strong>Rs.<?= $row['estprice']; ?><br />
              <strong>              <?php echo "<br><a href='testdrive.php?vahicleidnum=$row[vehicleid]'>Test Drive&gt;&gt;</a>  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <a href='vehiclestoremore.php?vahicleid=$row[vehicleid]'>More&gt;&gt;</a></strong><br />"; ?>
              <br />
            </p>
        </td></tr></table>
        </div>
         <?
		}
		?>
        </div>
       
<!-- wrap ends here -->
</div>
		
<?php }
include("footer.php");
?>
