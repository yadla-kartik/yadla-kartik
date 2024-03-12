<?php 
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    	$Name = $_POST['Name'];
       $Password = $_POST['Password'];

		if(!empty($Name) && !empty($Password) && !is_numeric($Name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "select * from form where Name = '$Name' limit 1";
			$result = mysqli_query($con, $query);

          if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $Password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: product.html");
						die;
					}
				}
			}
           echo "wrong username or password!";
		}
		else
		{
			echo "wrong username or password!";
		}
	}

?>

