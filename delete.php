<?php

include_once 'connection.php';

$result = mysqli_query($con,"SELECT * FROM form");

?>

<!DOCTYPE html>
<html>
<head>
<title>Delete form data</title>
</head>
<body>

<table>
	<tr>
	    <td>id</td>
	    <td>user_id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
	</tr>
	
	<?php
	       $i=0;
	     while($row = mysqli_fetch_array($result)) {
	?>
	
	<tr class="<?php if(isset($classname)) echo $classname;?>">
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["user_id"]; ?></td>
		<td><?php echo $row["Name"]; ?></td>
		<td><?php echo $row["Email"]; ?></td>
		<td><?php echo $row["Password"]; ?></td>

	<td><a href="delete_process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	
	<?php
	$i++;
	}
	?>

</table>
</body>
</html>