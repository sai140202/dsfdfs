<?php
require_once('connect.php');
if(isset($_POST['txtName']))
{
/* Get the all form field post variables. */
$id = $_POST['selectedid'];
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];


$sql = "UPDATE `tbl_contact` SET `fldName` = '$txtName', `fldEmail` = '$txtEmail', `fldPhone` = '$txtPhone', `fldMessage` = '$txtMessage' WHERE `tbl_contact`.`Id` = ".$id;


/* Run insert query in database.  */
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<h1>Contact Records updated</h1>";
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
