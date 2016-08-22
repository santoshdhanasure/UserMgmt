<?php
class UserOperations{	
	public function add_user($test){
					// variables for input data


		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city_name = $_POST['city_name'];
					// variables for input data d
					// sql query for inserting data into database
		$sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
					// sql query for inserting data into database
		if ($test) return array($first_name,$last_name,$city_name);
					// sql query execution function
		if(mysql_query($sql_query))
		{		
			return true;
		}
		else
		{
			return false;
		}
					// sql query execution function
	}
	
	public function edit_user($test){
					// variables for input data
		 $first_name = $_POST['first_name'];
		 $last_name = $_POST['last_name'];
		 $city_name = $_POST['city_name'];
					// variables for input data
		if ($test) return array($first_name,$last_name,$city_name);
					// sql query for update data into database
		 $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
					// sql query for update data into database
		 
					// sql query execution function
		 if(mysql_query($sql_query))
		 {
		   return true;
		 }
		 else
		 {
		  return false;
		 }			
	}
	
	public function get_user($test){	
		$sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
		
		if ($test) return array($_GET['edit_id']);
		
		$result_set=mysql_query($sql_query);
		return mysql_fetch_array($result_set);
	}
	
	public function delete_user($test){
		$sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
		
		if ($test) return array($_GET['delete_id']);
		
		mysql_query($sql_query);
	}
	
}


?>