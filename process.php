<?php 
include_once'connection.php';
    if(isset($_POST['send']))
    {
		$Name = $_POST['Name'];
    	$Phone = $_POST['Phone'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Message = $_POST['Message'];
	   
	   $sql = "INSERT INTO contact(Name,Phone,Email,Subject,Message) 
	values ('$Name','$Phone','$Email','$Subject','$Message')";
	
    if(mysqli_query($conn,$sql))
      {
         echo"New record created sucessfull!";
	     header("Location:contact.php");
	  }
    else
      {
	     echo "Error:" .mysqli_error($conn);
      }
    
	mysqli_close($conn);
}
?>
Create Working Contact Form Using H...
