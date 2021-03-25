
	<?php
	
		$connection=mysqli_connect('localhost','root','','online_movie_ticket');
		if(!$connection)
		{
			echo "We are not connected";
			die("Database connection failed");
		}
		else
		{
			echo "We are connected";
		}

	?>