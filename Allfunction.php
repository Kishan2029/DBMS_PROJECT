
<?php include "data.php"; ?>

<?php
	

	function Login()
	{
			if(isset($_POST['submit']))
		{
			
			global $connection;
			$_SESSION['SUBMIT']=$_POST['submit'];
			$id = trim($_POST['id']);
			$password = trim($_POST['password']);
			$sql = "select * from signup where CustomerID = '".$id."' and Password = '".$password."'";
			$rs = mysqli_query($connection,$sql);
			$numRows = mysqli_num_rows($rs);
			
			if($numRows  == 1)
			{
				$row = mysqli_fetch_assoc($rs);
				$_SESSION['id'] = $row['CustomerID'];
				$message="Logged in successfully";
				echo "<script type='text/javascript'>alert('$message');</script>";
										header("Location:form.php");
						exit();
			}	
			else
			{
				$message= "No User found";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		
	}
	
	function Moviename()
	{
		
		global $connection;
		$query="Select Mname from movie ";
		$result=mysqli_query($connection,$query);
		if(!$result)
		{
			die("Query failed");
		}
		while($row=mysqli_fetch_assoc($result))
				{
					$id=$row['Mname'];
					echo "<option value='$id'>$id</option>";
				}
	}
		function MovieLanguage()
	{
		
	
		//if(isset($_POST["submit1"]))
		{
			global $connection;
			$name=$_POST['Movie_Name'];
			$query="Select MovieID from movie where Mname='$name'";
			$result=mysqli_query($connection,$query);
			if(!$result)
			{
				die("Query failed");
			}
		while($row=mysqli_fetch_assoc($result))
				{
					$id=$row['MovieID'];
					echo "<option value='$id'>$id</option>";
				}

			
		}


	}
		function MovieTheatre()
	{
		
		global $connection;
		if(isset($_POST["submit1"]))
		{
			$mname=$_POST["Movie_Name"];
			$_SESSION['dkc']=$mname;
			
			$query="select Tname from theatres where TheatreID IN (select TheatreID from theater_movie_time where MovieID= (Select MovieID from movie where Mname='$mname')) ";
			$result=mysqli_query($connection,$query);
			if(!$result)
			{
				die("Query failed");
			}
			while($row=mysqli_fetch_assoc($result))
					{
						$id=$row['Tname'];
						
						echo "<option value='$id'>$id</option>";
					}
					
		}
	}
?>

<?php
	function MovieTime()
	{
		if(isset($_POST["submit2"]))
		{
			global $connection;
		
			/*$name=$_POST['Movie_Name'];
			$query="Select MovieID from movie where MovieID=104";
			$result=mysqli_query($connection,$query);
			if(!$result)
			{
				die("Query failed");
			}
		while($row=mysqli_fetch_assoc($result))
				{
					$id=$row['MovieID'];
					echo "<option value='$id'>$id</option>";
				}
			*/
			
			$query="Select * from  theater_movie_time where MovieID=104";
			
			$result=mysqli_query($connection,$query);
			if(!$result)
			{
				die("Query failed");
			}
			while($row=mysqli_fetch_assoc($result))
					{
						$id=$row['Time'];
						echo "<option value='$id'>$id</option>";
					}	
		}
		
	}


	
?>