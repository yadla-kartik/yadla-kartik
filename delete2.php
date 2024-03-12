
<?php
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

$result = mysqli_query($con,"SELECT * FROM form");

?>

<!DOCTYPE html>
<html>
<head>
<title>Delete form data</title>
	<style>
	.a:hover
	{
		text-align: center;
	    color:red;
	}  
table, th, td {  
    border: 1px solid black;  
    border-collapse: collapse;  
}  
th, td {  
    padding: 10px;  
}  
table#alter tr:nth-child(even) {  
    background-color: #eee;  
}  
table#alter tr:nth-child(odd) {  
    background-color: #fff;  
}  
th {  
    color: white;  
    background-color: lightgray;  
}  

	</style>
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

	
	<tr class="<?php if(isset($classname)) echo $classname;?>">
		<td><?php echo $user_data["id"]; ?></td>
		<td><?php echo $user_data["user_id"]; ?></td>
		<td><?php echo $user_data["Name"]; ?></td>
		<td><?php echo $user_data["Email"]; ?></td>
		<td><?php echo $user_data["Password"]; ?></td>

	<td><a href="delete2_process.php?id=<?php echo $user_data["id"]; ?>">Delete</a></td>
	</tr>

</table>
</body>
</html>