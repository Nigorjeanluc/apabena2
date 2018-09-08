<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="img/logo1.png" />
<title>Coming soon | APABENA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

</head>
<body>


<div id="wrapper">
	<!-- start header -->
	<header>
		<div class="text-center margintop50">
			<a href="#"><img style="height:160px" src="img/logo1.png" alt="" width="199" /></a>
		</div>

	</header>
	<!-- end header -->

	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
                    <h2>This website is still in developement, it will be launched soon and the remaining host period is:</h2>
                    <div id="countdown"></div>
				</div>
		</div>
		</div>
	</div>
	</section>

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <div class="widget">
                        <h4>Get in touch with us</h4>
                        <address>
                        <strong>APABENA</strong><br>
                        Kigali suite room V124, DB 91<br>
                        Someplace on Earth </address>
                        <p>
                            <i class="fa fa-phone"></i> +250 788 304 817 or +250 788 675 276 <br>
                            <i class="fa fa-envelope-o"></i> apabena2020@hotmail.fr
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="widget">
                        <h4>Information</h4>
                        <ul class="link-list">
                            <li><a href="#">Social rehabilitation</a></li>
                            <li><a href="#">Gender promotion</a></li>
                            <li><a href="#">Child rights protection</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="widget">
                        <h4>Pages</h4>
                        <ul class="link-list">
                            <li><a href="#">Administration</a></li>
                            <li><a href="#">Bakery</a></li>
                            <li><a href="#">Carpentry</a></li>
                            <li><a href="#">Accomodation facilities</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-sm-3 col-lg-3">
                    <div class="widget">
                        <h4>Newsletter</h4>
                        <p>Fill your email and sign up for monthly newsletter to keep updated</p>
                        <div class="form-group multiple-form-group input-group">
                            <input type="email" name="email" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                            </span>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>&copy; APABENA - All Right Reserved | <a href="admin/">admin</a></p>
                            <div class="credits">
                                Developed by <a href="https://www.facebook.com/spartacus.amphoteric" target="_blank" rel="nofollow">Eng. Igor Jean-Luc NDIRAMIYE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</footer>
	</div>
	
</div>

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
<script src="js/jquery.countdown.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
  $('#countdown').countdown('2017/10/17', function(event) {
    $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
  });
</script>
<script type="text/javascript">
/*  function printTime(){
    var d = new Date();
    var hours = d.getHours();
    var mins = d.getMinutes();
    var secs = d.getSeconds();
    if(hours<10){
        hours= "0"+d.getHours();
    }

    if(mins<10){
        mins= "0"+d.getMinutes();
    }
    
    if(secs<10){
        secs= "0"+d.getSeconds();
    }
    document.getElementById("kbs").innerHTML="<h1>"+"Time: "+hours +":"+mins +":"+secs+"</h1>";
}
setInterval(printTime,1000);*/
</script>

	
</body>
</html>