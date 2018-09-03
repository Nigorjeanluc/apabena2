<?php session_start(); ?>
<?php
include("connect.php");
	if(isset($_POST['poo'])){
		$username = mysqli_real_escape_string($dbcon,htmlentities($_POST['user']));
        $password = mysqli_real_escape_string($dbcon,htmlentities($_POST['pass']));
		$sql= 'SELECT * FROM staff WHERE (Username=\''.$username.'\' OR Email=\''.$username.'\') AND Password=\''.$password.'\'';
		$res= mysqli_query($dbcon,$sql);
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			echo "<meta http-equiv='refresh' content='0;url=admin/index.php'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login | APABENA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3425570132933671",
    enable_page_level_ads: true
  });
</script>

</head>
<body>


<div id="wrapper">
	<!-- start header -->
	<?php include('header.php');?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i> APABENA</a><i class="icon-angle-right"></i></li>
					<li class="active">Login</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
    <section id="content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <?php
                    $yes=isset($_REQUEST['yes']);
                    if($yes){
                    echo'
                    <div align="center" class="box">
                        <p>Wrong username or password, retry again or return <a href="index.php">Home</a>.</p>
                    </div>
                    ';
                    }
                    $no=isset($_REQUEST['no']);
                    if($no){
                    unset($_SESSION['admin']);
                    echo'
                    <div align="center" class="box">
                        <p>Thanks for your participation login again or return <a href="index.php">Home</a>.</p>
                    </div>
                    ';
                    }
                    if(isset($_SESSION['admin'])){
                        echo "<meta http-equiv='refresh' content='0;url=admin/index.php'>";
                    }
                ?>
					<form role="form" class="register-form" method="post">
						<h2>Sign in <small>as administrator</small></h2>
						<hr class="colorgraph">

						<div class="form-group">
							<input type="text" name="user" id="email" class="form-control input-lg" placeholder="Username or Email Address" tabindex="4">
						</div>
						<div class="form-group">
							<input type="password" name="pass" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
						</div>
						
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"><input type="submit" name="poo" value="Sign in" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    <?php include('footer.php'); ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/custom.js"></script>
<script>
$(document).ready(function( $ ) {
    
    //Google Map
    var get_latitude = $('#google-map').data('latitude');
    var get_longitude = $('#google-map').data('longitude');

    function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize_google_map);
    
});
</script>

<script src="contactform/contactform.js"></script>
	
</body>
</html>