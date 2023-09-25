<?php
include_once('infop.php');
if(isset($_POST['varanasi'])) {
	$que="SELECT * FROM `information` WHERE pname='varanasi'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['ayodhya'])) {
	$que="SELECT * FROM `information` WHERE pname='ayodhya'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['search_p'])) {
	$search = $_POST['search_p'];
	$que="SELECT * FROM `information` WHERE pname='$search'";
	$result = mysqli_query($db, $que);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/info.css">
	<title>Information</title>
</head>
<body>
	<div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="index.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
	        <div class="search">
                <form method="POST" action="infoin.php">
                  <input type="text" name="search_p" placeholder="Search.." size="50">
              
                  <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
                </form>
            </div>
	      </ul>
	      <ul class="list2">
	        <li><a href="newhome.html">Home</a></li>
	        <li><a id="long" href="destinationin.html">Destination</a></li>
	        <li><a href="galleryin.html">Gallery</a></li>
	        <li><a href="feedbackin.html">Feedback</a></li>
            <li><a href="logout.html">Log Out</a></li>
	      </ul>
	    </ul>
	</div>
	<div class="hedder">
		<h1>Place Information</h1>
	</div>
	<div class="container">
		<div class="description-container">
			<div class="box1">
				<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
				<img src="<?php echo $rows['pi_main']; ?>" alt="Taj Mahal Image" style="width: auto;height: 302px;">
			</div>
			<div class="description">
				<h1><?php echo $rows['pname']; ?><h1>
				<p style="text-align: justify;"><?php echo $rows['pdescription']; ?></p>
				<p style="color:blue; top: -10px;text-align:right;" >Package: <?php echo $rows['package']; ?> Rs</p>
			</div>
			<a href="booking.html" style="top: 20px; float: right; margin-right: 27%;">Book Tour</a>
		</div>
	        	<?php
					}
				?>
		</div>
	</div>
</body>
</html>