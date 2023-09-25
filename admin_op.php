<?php

$con=mysqli_connect('localhost','root','','travel');



if(isset($_POST['de-submit-c']))
{
	$id=$_POST['id'];
	$firstname=$_POST['fname'];
	$lastname=$_POST['lanme'];

	$sql="DELETE FROM `customer` WHERE id=$id and fname='$firstname' and lname='$lastname'";
	$result = mysqli_query($con,$sql);
	header('location:admin.php');
}

if(isset($_POST['ins-submit-p']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pcity=$_POST['pcity'];

	$sql3="INSERT INTO `places`(`pid`,`pname`,`pcity`) VALUES ($pid,'$pname','$pcity')";
	$result = mysqli_query($con,$sql3);
	header('location:admin.php');
}

if(isset($_POST['de-submit-p']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];

	$sql4="DELETE FROM `places` WHERE pid=$pid and pname='$pname'";
	$result = mysqli_query($con,$sql4);
	header('location:admin.php');
}

if(isset($_POST['add_pd']))
{
	$pname=$_POST['pname'];
	$pdescription=$_POST['pdescription'];
	$pi_main=$_POST['pi_main'];
	$pi1=$_POST['pi1'];
	$pi2=$_POST['pi2'];
	$pi3=$_POST['pi3'];
	$package=$_POST['package'];
	$sql6="INSERT INTO `information`(`pname`,`pdescription`,`pi_main`,`pi1`,`pi2`,`pi3`,`package`) VALUES ('$pname','$pdescription','$pi_main','$pi1','$pi2','$pi3','$package')";
	$result = mysqli_query($con,$sql6);
	if ($result) {
		header('location:admin.php');
	}
}
?><?php

$con=mysqli_connect('localhost','root','','travel');



if(isset($_POST['de-submit-c']))
{
	$id=$_POST['id'];
	$firstname=$_POST['fname'];
	$lastname=$_POST['lanme'];

	$sql="DELETE FROM `customer` WHERE id=$id and fname='$firstname' and lanme='$lastname'";
	$result = mysqli_query($con,$sql);
	header('location:admin.php');
}


if(isset($_POST['ins-submit-p']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pcity=$_POST['pcity'];

	$sql3="INSERT INTO `places`(`pid`,`pname`,`pcity`) VALUES ($pid,'$pname','$pcity')";
	$result = mysqli_query($con,$sql3);
	header('location:admin.php');
}

if(isset($_POST['de-submit-p']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];

	$sql4="DELETE FROM `places` WHERE pid=$pid and pname='$pname'";
	$result = mysqli_query($con,$sql4);
	header('location:admin.php');
}

if(isset($_POST['add_pd']))
{
	$pname=$_POST['pname'];
	$pdescription=$_POST['pdescription'];
	$pi_main=$_POST['pi_main'];
	$pi1=$_POST['pi1'];
	$pi2=$_POST['pi2'];
	$pi3=$_POST['pi3'];
	$package=$_POST['package'];
	$sql6="INSERT INTO `information`(`pname`,`pdescription`,`pi_main`,`pi1`,`pi2`,`pi3`,`package`) VALUES ('$pname','$pdescription','$pi_main','$pi1','$pi2','$pi3','$package')";
	$result = mysqli_query($con,$sql6);
	if ($result) {
		header('location:admin.php');
	}
}
?>