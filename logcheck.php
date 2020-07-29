<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con){
	?>
        <script>
		alert("connection success");
		</script>
	<?php
}
else{

 
?>
        <script>
		alert("connection not success");
		</script>
	<?php
}
$db = mysqli_select_db($con,'yadmin');
if(isset($_POST['submit'])){
$user =$_POST['user'];
$pass=$_POST['pass'];
$sql="select*from tadmin where user='$user' and pass='$pass'";
$query= mysqli_query($con,$sql);

$row= mysqli_num_rows($query);
	
	if($row == 1)
	{
		?>
        <script>
		alert("login sucess");
		</script>
	<?php
	$_session['user']=$user;
	header ('location: amain.php');
}
else{
	
?>
        <script>
		alert("login not sucess");
		</script>
	<?php	
	header ('location: login.php');
}
	
}
?>