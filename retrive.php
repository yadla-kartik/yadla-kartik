
<?php
session_start();
include_once 'connection.php';

$result = mysqli_query($con,"SELECT * FROM form");

?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
     <link rel="stylesheet" type="text/css" href="style.css">

 </head>
<body>
    <main class="table" id="customers_table">
	        <section class="table__header">
			<h2>USER DETAILS</h2>
      <div class="input-group">
                <input type="text" type="search" placeholder="Search Data..."onclick="location.href='index4.php';"/>
                <img src="images/search.png" alt="">
            </div>
			</section>
      <section class="table__body">

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  <thead>

                    <tr>
                        <th> id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> user_id <span class="icon-arrow">&UpArrow;</span></th>  
						<th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th>  Password <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Update <span class="icon-arrow">&UpArrow;</span></th>
                        <th> delete <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
        <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["user_id"]; ?></td>
		<td><?php echo $row["Name"]; ?></td>
		<td><?php echo $row["Email"]; ?></td>
		<td><?php echo $row["Password"]; ?></td>
		<td class="thead"><a href="update_process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
	<td class="thead"><a href="delete_process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

 </body>
</html>