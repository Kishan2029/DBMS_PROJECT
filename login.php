<?php include "data.php"; ?>
<?php include "Allfunction.php"; ?>
<?php 
{
	session_start();
	Login();
	
}
?>

<h1>Login</h1>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<input type="text" name="id" value="" placeholder="ID" required>
	<input type="password" name="password" value="" placeholder="Password" required>
	<button type="submit" name="submit">Submit</button>
</form>