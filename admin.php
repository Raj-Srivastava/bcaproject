<?php
include_once('junk.php');
$que="SELECT * FROM `customer`";
$result = mysqli_query($db, $que);
$que2="SELECT * FROM `places`";
$result2 = mysqli_query($db, $que2);
$que3="SELECT * FROM `feedback`";
$result3 = mysqli_query($db, $que3);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<title>Admin Page</title>
	<style>
		.container .addp-workspace{
			width: 70vw;
			height: 80vh;
			float: right;
		}
		.container .addp-workspace .insert-pform{
			display: none; 
			width: 30vw;
			height: 50vh;
			margin: 10% 30%;
			text-align: center;
		}
		.container .addp-workspace .insert-pform input{
			margin: 20px 0px;
		}
	</style>
</head>
<body>
	<div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="index.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
	        <div class="search">
	            <form method="POST" action="info.php">
	              <input type="text" name="search_p" placeholder="Search.." size="50">
	          
	              <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
	            </form>
	        </div>
	      </ul>
	      <ul class="list2">
			<li><a href="logout.html">Log Out</a></li>
	      </ul>
	    </ul>
	</div>
	<div class="container">
		<div class="headder">
			<h1>Admin Page</h1>
		</div>
		<div class="menu-list">
			<a id="a1" href="#" onclick="myFunction(document.getElementById(this.id))">Customers</a>
			<a id="a3" href="#" onclick="myFunction(document.getElementById(this.id))">Places</a>
			<a id="a5" href="#" onclick="myFunction(document.getElementById(this.id))">Add Place Information</a>
			<a id="a6" href="#" onclick="myFunction(document.getElementById(this.id))">Back</a>
		</div>
		<div class="customer-workspace work" id="id1">
			<div class="btn-tag" id="cust-op">
				<button type="button" id="v1" onclick="showDetails(document.getElementById(this.id))">view Customer details</button>
				<button type="button" id="b1" onclick="deleteMenu(document.getElementById(this.id))">Delete customer</button>
			</div>
			<div id="tb-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 700px; line-height: 30px;">
					<tr>
						<th colspan="7"><h2>Customer Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>First name</th>
						<th>Last name</th>
						<th>Password</th>
						<th>Email</th>
						<th>City</th>
						<th>Phone</th>
					</tr>
					<?php
						while($rows = mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<td><?php echo $rows['id']; ?></td>
						<td><?php echo $rows['fname']; ?></td>
						<td><?php echo $rows['lname']; ?></td>
						<td><?php echo $rows['password']; ?></td>
						<td><?php echo $rows['email']; ?></td>
						<td><?php echo $rows['city']; ?></td>
						<td><?php echo $rows['phone']; ?></td>

					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="delete-form" id="del-form">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="id" placeholder="customer ID" required><br>
					<input type="text" name="fname" placeholder="First name" required><br>
					<input type="text" name="lanme" placeholder="Last name" required><br>
					<input type="submit" value="Delete" class="submit" name="de-submit-c">
				</form>
			</div>
		</div>
		<div class="places-workspace work" id="id3">
			<div class="btn-tag" id="plc-op">
				<button type="button" id="v3" onclick="showDetails(document.getElementById(this.id))">view place detailes</button>
				<button type="button" id="i2" onclick="insertMenu(document.getElementById(this.id))">Insert place</button>
				<button type="button" id="b3" onclick="deleteMenu(document.getElementById(this.id))">Delete place</button>
			</div>
			<div id="place-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 500px; line-height: 30px;">
					<tr>
						<th colspan="3"><h2>Place Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>Place Name</th>
						<th>City</th>
					</tr>
					<?php
						while($rows2 = mysqli_fetch_assoc($result2))
						{
					?>
					<tr>
						<td><?php echo $rows2['pid']; ?></td>
						<td><?php echo $rows2['pname']; ?></td>
						<td><?php echo $rows2['pcity']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="insert-form" id="ins-form2">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="pid" placeholder="place ID" required><br>
					<input type="text" name="pname" placeholder="Place name" required><br>
					<input type="text" name="pcity" placeholder="City" required><br>
					<input type="submit" value="Insert" class="submit" name="ins-submit-p">
				</form>
			</div>
			<div class="delete-form" id="del-form3">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="pid" placeholder="place ID" required><br>
					<input type="text" name="pname" placeholder="Place name" required><br>
					<input type="submit" value="Delete" class="submit" name="de-submit-p">
				</form>
			</div>
		</div>
		<div class="addp-workspace work" id="id5" style="display: none;">
			<div class="insert-pform" id="insp-form4">
				<form method="POST" action="admin_op.php">
					<input type="text" name="pname" placeholder="Place Name" required><br>
					<textarea class="inputTextarea" name="pdescription" rows="4" class="form-control" placeholder="Please write place description here" required></textarea><br>
					<input type="text" name="pi_main" placeholder="Enter main image" required><br>
					<input type="text" name="pi1" placeholder="Enter image1" required><br>
					<input type="text" name="pi2" placeholder="Enter image2" required><br>
					<input type="text" name="pi3" placeholder="Enter image3" required><br>
					<input type="number" name="package" placeholder="Cost" required><br>
					<input type="submit" value="Add Place Details" class="submit" name="add_pd">
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function makeNone(){
				document.getElementById("plc-op").style.display = "none";
				document.getElementById("ins-form2").style.display = "none";
				document.getElementById("del-form3").style.display = "none";
				document.getElementById("place-container").style.display = "none";

				document.getElementById("cust-op").style.display = "none";
				document.getElementById("del-form").style.display = "none";
				document.getElementById("tb-container").style.display = "none";
		}

		function myFunction(clicked){
			makeNone()
			document.getElementById('id1').style.display = "none";
			document.getElementById('id3').style.display = "none";
			document.getElementById('id5').style.display = "none";
			if (document.getElementById('a1') === clicked){
				document.getElementById('id1').style.display = "block";
				document.getElementById("cust-op").style.display = "block";
				document.getElementById("del-form").style.display = "none";
			}
			if (document.getElementById('a3') === clicked){
				document.getElementById('id3').style.display = "block";
				document.getElementById("plc-op").style.display = "block";
				document.getElementById("ins-form2").style.display = "none";
				document.getElementById("del-form3").style.display = "none";
			}
			if (document.getElementById('a5') === clicked){
				document.getElementById('id5').style.display = "block";
				document.getElementById("insp-form4").style.display = "block";
			}
		}
		function deleteMenu(clicked) {
			if (document.getElementById('b1') === clicked){
				document.getElementById("cust-op").style.display = "none";
				document.getElementById("tb-container").style.display = "none";
				document.getElementById("del-form").style.display = "block";
			}
			if (document.getElementById('b3') === clicked){
				document.getElementById("plc-op").style.display = "none";
				document.getElementById("place-container").style.display = "none";
				document.getElementById("del-form3").style.display = "block";
			}
		}
		function insertMenu(clicked){
			if (document.getElementById('i2') === clicked){
				document.getElementById("plc-op").style.display = "none";
				document.getElementById("place-container").style.display = "none";
				document.getElementById("ins-form2").style.display = "block";
			}
		}
		function showDetails(clicked){
			if (document.getElementById('v1') === clicked){
				document.getElementById("cust-op").style.display = "none";
				document.getElementById("del-form").style.display = "none";
				document.getElementById("tb-container").style.display = "block";
			}
			if (document.getElementById('v3') === clicked){
				document.getElementById("plc-op").style.display = "none";
				document.getElementById("ins-form2").style.display = "none";
				document.getElementById("del-form3").style.display = "none";
				document.getElementById("place-container").style.display = "block";
			}
		}
	</script>
</body>
</html>