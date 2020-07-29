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
?>
<html>
<head>
<title>
</title>
<?php include 'links.php' ?>
<style>
*{margin:0;
padding:0;
}
.heading{
	width:100%;
	line-height:80px;
	font-size:1.4rem;
	background: -webkit-linear-gradient(top, #0072ff, #8811c5);
	font-family: 'Raleway', sans-serif;
}
.center-div{
	position: absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%)
}
form{
width:400px;	
	
}
.admin-form{
	
}
</style>
</head>
<body>
<header>
<div class="container center-div shadow ">
<div class="heading text-center mb-5 text-uppercase text-white">Admin login Page</div>
<div class="container row d-flex flex-row justify-content-center mb-5">
<div class="admin-form shadow p-3">
<form action="logcheck.php" method="POST">
<div class="form-group">
<label>Email ID</label>
<input type="text" name="user" value="" class="form-control" autocomplete="off">
</div>

<div class="form-group">
<label>Password</label>

<input type="text" name="pass" value="" class="form-control" autocomplete="off">
</div>

<input type="submit" class="btn btn-success" name="submit" />
</form>
</div>
</div>
</header>
</body>


