<?php include "data.php"; ?>
<?php include "Allfunction.php"; ?>
<?php
{
	session_start();
	$_SESSION['SeatType']=$_POST['Seat_Type'];
	$_SESSION['NoSeat']=$_POST['Total_Seat'];

} 
 ?>
<html>
    <head>
        <link rel="stylesheet" href="external.css">
        <title>BookTicket </title>
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
    <body >
        
        <div id="example1">
        <h1 align="center"><font face="fantasy" size="20" color="#333300">Book My Show</font></h1>
        <form action="form5.php" method="post">
        <table align="center" cellpadding="10">

            <tr>
                <td>ENTER CREDIT CARD NUMBER:</td>
                <td><input type="text"  name="Credit_card_number" maxlength="12"  required/></td>
            </tr>
			<tr>
                <td>SELECT EXPIRY MONTH:</td>
				<td>
               <select  name="Expiry_Month">
                <option value="-1">Month:</option>
                <option value="January">Jan</option>
                <option value="February">Feb</option>
                <option value="March">Mar</option>
                <option value="April">Apr</option>
                <option value="May">May</option>
                <option value="June">Jun</option>
                <option value="July">Jul</option>
                <option value="August">Aug</option>
                <option value="September">Sep</option>
                <option value="October">Oct</option>
                <option value="November">Nov</option>
                <option value="December">Dec</option>
                </select>
				</td>
            </tr>
			<tr>
                <td>SELECT EXPIRY YEAR:</td>
				<td>
                <select  name="Expiry_Year">
				<option value="-1">Year:</option>
                <option value=2020>2020</option>
                <option value=2021>2021</option>
                <option value=2022>2022</option>
                <option value=2023>2023</option>
                <option value=2024>2024</option>
				</td>
            </tr>
			


                    <!----- Submit and Reset ------------------------------------------------->
                    
                   <tr> <td colspan="2" align="center"><input type="submit" name="submit5" value="next" >
				   
                    </td></tr>

				
        </table>
    </form>
        </div>
        

    </body>
    </html>