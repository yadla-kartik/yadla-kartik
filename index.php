<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Hello <?php echo $user_data['Name']; ?></h1>
        </section>
        <section class="table__body">
            <table>
                <thead>

                    <tr>
                        <th> id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> user_id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th>  Password <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Update <span class="icon-arrow">&UpArrow;</span></th>
                        <th> delete <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
         
<tr>
   <td> <?php echo $user_data['id']; ?></td>
   <td> <?php echo $user_data['user_id']; ?></td>
   <td> <?php echo $user_data['Email']; ?></td>
   <td> <?php echo $user_data['Password']; ?></td>
   	<td><a  class="a" href="update2_process.php">Update</a></td>
	<td><a class="a" href="delete2_process.php?id=<?php echo $user_data["id"]; ?>">Delete</a></td>
</tr>
<tr>
   	<td colspan="7"><a class="a" href="logout.php">logout</a></td>
</tr>
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>

</body>

</html>