<?php
require_once('connect.php');

$sql = "SELECT * FROM `tbl_contact` WHERE 1=1";

$result = mysqli_query($con, $sql);

$totalitems = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
<style>
	.alb {
			width: 50px;
			height: 400px;
			padding: 5px;
		}
		.alb img {
			width: 40%;
			height: 40%;
		}
	a.hello:link{
		background-color:powderblue;
		border-radius: 40px;
		text-decoration: none;
		display: flex;
		justify-content: center;
		align-items:center ;
		width: 150px;
			margin-left: 500px;
			padding: 20px;
			font-size: 15x;

	}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container" style="width:1124px; margin:0 auto;">
<div class="py-5 text-center">
        
        <h2>Edit All Records</h2>
        
      </div>
	  
<?php

if($totalitems > 0)
{
	
	$rowheading = '<hr/><div class="row" style="font-weight:bold">
	<tr>
    <th>Sl.</th>
    <th>Image</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Role</th>
    <th>Action</th>
  </tr>
</div>'; 

$rowstring = ''; // for storing HTML plus database records

/* Run the while loop and create a string of your records */
while($row = mysqli_fetch_assoc($result)) {
  /* Assign each database field records to variables */
  $id = $row['Id'];
  $fldName = $row['fldName'];
  $imagePath = $row['img'];
  $fldEmail = $row['fldEmail'];
  $fldPhone = $row['fldPhone'];
  $fldMessage = $row['fldMessage'];
  $fldGender = $row['fldGender'];

  /* Create a table row (tr) with 7 columns */
  $rowstring .= '<tr>
    <td>' . $id . '</td>
    <td>
      <img src="uploads/' . $imagePath . '" width="50" height="50">
    </td>
    <td>' . $fldName . '</td>
    <td>'.$fldGender.'</td>
    <td style="width: 20%;">' . $fldEmail . '</td>
    <td>' . $fldPhone . '</td>
    <td>' . $fldMessage . '</td>
    <td>
      <a href="update.php?id=' . $id . '">Update</a> | 
      <a href="delete.php?id=' . $id . '">Delete</a>
    </td>
  </tr>';
}

// Wrap the table row in a table structure
$table = '<table>' . $rowheading . $rowstring . '</table>';

// Output the table
echo $table;

}
else
{
	echo "There is no records in our database ?";
	
}
?>
<div class="d-flex justify-content-center " style="background-color: powderblue; border-radius: 40px; width: 150px; margin-left: 500px; padding: 20px;">
  <a href="navigation.html" class="" style="text-decoration: none; font-size: 15px;">Home</a>
</div>




</div>
</body>
</html>
