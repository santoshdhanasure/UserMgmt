<?php
// database connection
// Added 1
// Added 2
// Added 3

include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 // variables for input data
 // sql query for inserting data into database
 
 //SELECT * FROM `users` WHERE first_name="Carol" and last_name="Pereira"
 $sql_query = "SELECT * FROM users WHERE first_name='$first_name' and last_name='$last_name'";
 // sql query for inserting data into database
 $result_set=mysql_query($sql_query);
 if($result_set)
 {
	 if(mysql_num_rows($result_set) > 0){
		//foreach (mysql_fetch_assoc($result_set) as $key => $value) {
		//	echo "Key: $key; Value: $value\n";
		//}
		?>
		<script type="text/javascript">
			//alert('Login Successfull');
			window.location.href='list_user.php';
		</script>
		<?php
	 }
	 else{
		 ?>
	  <script type="text/javascript">
	  //alert('Wrong Credentials.');
	  </script>
	  <?php
	 }
 }
 else{
	 ?>
  <script type="text/javascript">
  //alert('error occured while inserting your data');
  </script>
  <?php
 }
}

// This is just testing
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Management System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>User Management System</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="user_signup.php">Signup Page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    
    <tr>
    <td><button type="submit" name="btn-save"><strong>Login</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>