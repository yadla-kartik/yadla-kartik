<?php

include_once 'connection.php';

$result = mysqli_query($con,"SELECT * FROM form");

?>
<!DOCTYPE html>
<html>
 <head>
   <title> form data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>

<tr>
	    <td>id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
	  </tr>
	  
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	 <tr>
	    <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["Name"]; ?></td>
		<td><?php echo $row["Email"]; ?></td>
		<td><?php echo $row["Password"]; ?></td>

		
		
		<td><a href="update_process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}

?>
 </body>
</html>
