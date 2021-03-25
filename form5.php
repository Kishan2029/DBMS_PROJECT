<?php include "data.php"; ?>
<?php
{
	session_start();
	$MID=$_SESSION['Movieid'];
	$TID=$_SESSION['Theatreid'];
	$NoSeat=$_SESSION['NoSeat'];
	$SeatType=$_SESSION['SeatType'];
	$Time=$_SESSION['MovieTime'];
	$CID=$_SESSION['id'];
	$CardNo=$_POST['Credit_card_number'];
	$Exp_month=$_POST['Expiry_Month'];
	$Exp_year=$_POST['Expiry_Year'];
	$price=$NoSeat*$SeatType;
	$Mname=$_SESSION['MovieName'];
	$Tname=$_SESSION['TheatreName'];
	if(isset($_POST['submit5']))
	{
		global $connection;
		$query1="INSERT INTO tickets (TheatreID, TicketID, MovieID, Time, Seat_Type, Seat_No) VALUES ($TID, NULL, $MID, '$Time', '$SeatType', '$NoSeat')";
		$result1=mysqli_query($connection,$query1);
		if(!$result1)
		{
			die("Query failed");
		}
		$query2="INSERT INTO credit_card (Cardno, CustomerID, Exp_month, Exp_year) VALUES ('$CardNo', '$CID', '$Exp_month', $Exp_year)";
		$result2=mysqli_query($connection,$query2);
		if(!$result2)
		{
			die("Query failed");
		}
		$query3="Select TicketID from tickets where TheatreID=$TID and (MovieID=$MID and Time='$Time')";
		$result3=mysqli_query($connection,$query3);
		if(!$result3)
		{
			die("Query failed");
		}
		$row=mysqli_fetch_assoc($result3);
		$Ticketid=$row['TicketID'];
		
		$query4="INSERT INTO customer_ticket (CustomerID, TicketID) VALUES ('$CID', $Ticketid)";
		$result4=mysqli_query($connection,$query4);
		if(!$result4)
		{
			die("Query failed");
		}
		
		$query5="Select Name from signup where CustomerID='$CID'";
		$result5=mysqli_query($connection,$query5);
		if(!$result5)
		{
			die("Query failed");
		}
		$row1=mysqli_fetch_assoc($result5);
		$Name=$row1['Name'];
		
		$query6="Select Language from movie where MovieID=$MID";
		$result6=mysqli_query($connection,$query6);
		if(!$result6)
		{
			die("Query failed");
		}
		$row2=mysqli_fetch_assoc($result6);
		$Language=$row2['Language'];
		
		$query7="Select Location from theatres where TheatreID=$TID";
		$result7=mysqli_query($connection,$query7);
		if(!$result7)
		{
			die("Query failed");
		}
		$row3=mysqli_fetch_assoc($result7);
		$Location=$row3['Location']; 
	}
} 
 ?>
<html>
	<head>
		<style>
		div {
		  background-color: #0099ff;
		  width: 400px;
		  border: 5px groove green;
		  padding: 20px 30px 20px;
		  margin: 20px;

		}
		h3{
		 background-color: white;
		  width: 300px;
		  border: 1px groove green;
		  border-radius: 5px;
		  padding: 10px;
		  margin: 10px;
		}
		</style>
	</head>
<body>
	<h2 align="center"> <font face="cursive" size="5">HELLO, <?php echo $Name; ?></font></h2>
	<h2 align="center"> <font face="cursive" size="5">Your Ticket is booked</font></h2>
	<div>
	
	TICKET ID:<?php echo $Ticketid; ?><br>
	MOVIE NAME:<?php echo $Mname; ?><br>
	LANGUAGE:<?php echo $Language; ?><br>
	TIME:<?php echo $Time; ?><br>
	NO OF SEATS:<?php echo $NoSeat; ?><br>
	PRICE OF EACH SEAT:<?php echo $SeatType; ?><br>
	TOTAL PRICE:<?php echo $price; ?><br>
	THEATRE NAME:<?php echo $Tname; ?><br>
	LOCATION:<?php echo $Location; ?><br>
		
	</div>


</body>
</html> 