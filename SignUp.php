<?php include "data.php"; ?>

<?php
{
	
session_start();		
	
		if(isset($_POST["submit"]))
		{
			global $connection;
			$id=$_POST['cid'];
			$pw=$_POST['pass'];
			$name=$_POST['name'];
			$sql = "INSERT INTO signup (CustomerID, Password,Name) VALUES ('$id', '$pw', '$name')";
			if(mysqli_query($connection, $sql))
			{  
				$message = "You have been successfully registered,Please Login to book ticket";
			}
			else
			{  
				$message = "Could not insert record"; 
				
			}
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

	
}
?>
<html>
<head>
		<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
		</style>
</head>
<body>
<h1>Signup</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
Enter id:<input type="text" name="cid" maxlength="16" required><br>
Password:<input type="text" name="pass" required><br>
Name:<input type="text" name="name" required><br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html> 