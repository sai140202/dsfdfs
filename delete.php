<?php
/* Include your connection file  */
require_once('connect.php');
/* Check if is set the post variable txtName  */
if(isset($_GET['id']))
{
	/* Update your posted data in your database - insert SQL code. */

	$sql = "DELETE FROM `tbl_contact` WHERE `tbl_contact`.`Id` =  ".$_GET['id'];

	/* Run insert query in database.  */
	$rs = mysqli_query($con, $sql);

	/* Check records is updated  or not. */
	if($rs)
	{
		echo "<h1>Contact Records Deleted</h1>";
	}
	
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
<br/>
<a href="select.php">Go to list page</a>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			background-image: linear-gradient(to bottom right, blue , white);
		}
		@keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    /* Apply the animation to the h1 tag */
    h1 {
      animation-name: fadeIn;
      animation-duration: 2s;
    }
		h1{
			text-align:center ;
			padding-top: 300px;
		}
		a:link{
			text-decoration: none;
			display: flex;
			justify-content: center;
			background-color: powderblue;
			border-radius: 20px;
			align-items: center;
			width: 150px;
			margin-left: 620px;
			padding: 20px;
			font-size: 20px;
		}
		a:hover{
			background-color: grey;
		}
	</style>
</head>
<body>

</body>
</html>