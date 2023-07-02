<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMPLOYEE DETAILS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
        
        <h2>Update Employee Details</h2>
        
      </div>
	  
	  <?php
/* Include your connection file  */
require_once('connect.php');

if(isset($_GET['id']))
{
$sql = "SELECT * FROM `tbl_contact` WHERE Id=".$_GET['id'];

$result = mysqli_query($con, $sql);

$totalitems = mysqli_num_rows($result);


if($totalitems > 0){
		$row = mysqli_fetch_assoc($result);
		$id=$row['Id'];
		$fldName=$row['fldName'];
		$fldEmail=$row['fldEmail'];
		$fldPhone=$row['fldPhone'];
		$fldMessage=$row['fldMessage'];
		
		
			
	
	?>

	<fieldset>
	  
	  <form name="frmContact" class="needs-validation " method="post" action="update-submit.php">
		<p>
		  <label for="Name">Your Name </label><input type="hidden" name="selectedid" value="<?php echo $id;?>" />
		  <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Name" value="<?php echo $fldName;?>" required>
		  <div class="invalid-feedback">
					  Valid first name is required.
					</div>
		</p>
		<p>
		  <label for="email">Your Email</label>
		  <input type="text"  class="form-control"  name="txtEmail" id="txtEmail" placeholder="Email" value="<?php echo $fldEmail;?>" required>
		</p>
		<p>
		  <label for="phone">Your Phone</label>
		  <input type="text"  class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone" value="<?php echo $fldPhone;?>" required>
		</p>
		<p>
		  <label for="message">Message</label>
		  <textarea name="txtMessage" class="form-control"  id="txtMessage"  placeholder="Message" required><?php echo $fldMessage;?></textarea>
		</p>
		<p>&nbsp;</p>
		<p>
		  <input type="submit" name="Submit" id="Submit" value="Click me to Update"  class="btn btn-primary btn-lg btn-block">
		</p>
	  </form>
	</fieldset>
	<?php
	}
	else
	{
		echo "There is no records of slected id in our database?";
		
	}

}
else
{
	echo "You didn't provide any record id!";
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
