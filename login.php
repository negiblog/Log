<?php
session_start();
if(!isset($_session['user'])){
header('location:userlog.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
.center-div{
	
	position: absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%)
}
.heading{
	width:100%;
	line-height:80px;
	font-size:1.4rem;
	background: -webkit-linear-gradient(top, #0072ff, #8811c5);
	font-family: 'Raleway', sans-serif;
}
</style>
<?php include 'links.php'?>
</head>

<body>
<div class="container center-div shadow">
<div class="heading text-center text-uppercase text-white mb-5">Guys, share with your friend <?php echo $session['user'];?> Negi:)</div>
<a href="logout.php" class="btn btn-danger">Logout</a>

</div>
</body>
</html>