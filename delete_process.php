<?php

include_once 'connection.php';

$sql = "DELETE FROM form WHERE id='" .$_GET["id"]. "'";
if (mysqli_query($con, $sql)) 
{
    echo "Record deleted successfully";
	header("Location:retrive.php");
}
 else
{
    echo "Error deleting record: " . mysqli_error($con);
    header("Location:retrive.php");
}
mysqli_close($con);
?>