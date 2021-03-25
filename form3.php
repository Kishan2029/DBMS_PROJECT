
<?php include "data.php"; ?>
<?php include "Allfunction.php"; ?>
<?php
{
	session_start();
	$_SESSION['MovieTime']=$_POST['Movie_Time'];
	

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
        <form action="form4.php" method="post">
        <table align="center" cellpadding="10">

            <tr>
				<td>SELECT SEAT TYPE:</td>
                <td>
				<select name="Seat_Type" >
				  <option value=300>SILVER</option>
                <option value=400>GOLD</option>
                <option value=500>DIAMOND</option>
				</td>
				
            </tr>
			  <tr>
				<td>SELECT NO of SEAT:</td>
                <td>
				<select name="Total_Seat" >
				 <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
				 <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
				</td>
				
            </tr>
			


                    <!----- Submit and Reset ------------------------------------------------->
                    
                   <tr> <td colspan="2" align="center"><input type="submit" name="submit4" value="next" >
				   
                    </td></tr>

				
        </table>
    </form>
        </div>
        

    </body>
    </html>