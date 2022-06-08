<?php  
$conn = mysqli_connect("localhost", "root", "root", "registration");

// Check if connection established 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}  
    ini_set('display_errors', '1');
    error_reporting(E_ALL);

	    $companyID = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM companies WHERE id ='$companyID'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
while ($row=mysqli_fetch_array($result)){

?>
<!doctype html>
<html lang="en">
  <head>
  	<title><?php echo $row->company_name;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><?php echo $row->$company_name;?></h2>
				</div>
			</div>
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.7087949927914!2d-2.566766948834425!3d51.46350282163316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718e4720ce0b4f%3A0x8cb31c3267b4f8c6!2s<?php echo $row->address;?> !5e0!3m2!1sen!2suk!4v1654698680906!5m2!1sen!2suk" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

							
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span>   <?php echo $row->address;?>  </p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span>  <?php echo $row->number;?>  </p>
				          </div>
			          </div>
			          </div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
           <?php } ?>  