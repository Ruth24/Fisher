<?php 
if(isset($_POST['submit'])){
    $to = "ruth@csu.fullerton.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $business_name = $_POST['business_name'];
    $manager_name = $_POST['manager_name'];
    $email = $_POST['email'];
    $promotion_name = $_POST['promotion_name'];
    $order_quantity = $_POST['order_quantity'];
    $delivery_date = $_POST['delivery_date'];
    $street_number = $_POST['street_number'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $comment = $_POST['comment'];
    $subject = "New Order from: " .$business_name;
   // $subject2 = "Copy of your form submission";
   $message = '
<html>
<body>
  <h2><strong>You got a new order!</strong></h2>
    <h3><strong>Your Business Information</strong></h3>
  <p><strong>Business Name: ' .$business_name. '</strong></p>
  <p>Manager Name: ' .$manager_name. '</p>
  <p>Email: ' .$email. '</p>
  <p>Promotion Name: ' .$promotion_name. '</p>
  <p>Order Quantity: ' .$order_quantity. '</p>
  <p>Delivery Date: ' .$delivery_date. '</p>
      <h3><strong>Delivery Information</strong></h3>

  <p>Street Number: ' .$street_number. '</p>
  <p>City: ' .$city. '</p>
  <p>State: ' .$state. '</p>
  <p>Zip: ' .$zip. '</p>
  <p>Country: ' .$country. '</p>
      <h3><strong>Special Notes</strong></h3>

  <p>Comment: ' .$comment. '</p>
  <br><br>
  <p>Thank you.</p>
</body>
</html>';
   // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "Fisher";
   // $headers2 = "From:" . $to;
    $headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<script>alert('Your Order Was Successfully Placed. Click to dismiss')</script>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Fisher Order Form</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery-ui.css" type='text/css' />
<link rel="stylesheet" href="css/smoothbox.css" type='text/css' >
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

</head>
<body>
<script src="js/jquery.vide.min.js"></script>
	<div data-vide-bg="video/srix">
		<div class="center-container">
			<div class="navigation">
				<div class="container">
					<div class="logo">
						<h1><a href="index.html">Fisher</a></h1>
					</div>
					<div class="navigation-right">
						<span class="menu"><img src="images/menu.png" alt=" " /></span>
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
								<li><a data-hover="Home" href="index.html">Home</a></li>
								<li class="active"><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>
							</ul>
						</nav>
							<!-- script-for-menu -->
								<script>
								   $( "span.menu" ).click(function() {
									 $( "ul.nav1" ).slideToggle( 300, function() {
									 // Animation complete.
									  });
									 });
								</script>
							<!-- /script-for-menu -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="w3ls_banner_info">
				<div class="container">
					<div class="w3l_banner_logo">
						<h2>F</h2>
					</div>
								<div id="snackbar">Your Order was submitted successfully!!</div>

					<h3>Simple. Efficient. Results.</h3>
					<h4 style="color:white;padding-bottom: 10px;">That's more than a tagline—it's the experience we deliver. Fisher is a print and digital advertising provider located in Chicago and Los Angeles.</h4>
					<div class="more">
						<a href="#" class="hvr-underline-from-center" data-toggle="modal" data-target="#myModalHorizontal">Place Order Here !!</a>
					</div>
						
						<!-- Modal -->
						<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
							 aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content" style="padding-left: 20px;padding-right: 20px;">
									<!-- Modal Header -->
									<div class="modal-header">
										<button type="button" class="close" 
										   data-dismiss="modal">
											   <span aria-hidden="true">&times;</span>
											   <span class="sr-only">Close</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">
											ORDER FORM
										</h4>
									</div>
									
									<!-- Modal Body -->
									<div class="modal-body">
										<strong></strong><h5>Your Business Information</h5></strong><br>
										<form class="form-horizontal" id="idForm" role="form" method="post" action="" >
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">Business Name</label>
											<div class="col-sm-9">
												<input type="text" name="business_name" class="form-control" 
												id="inputEmail3" placeholder="Business Name" required/>
											</div>
										  </div>
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">Manager Name</label>
											<div class="col-sm-9">
												<input type="text" name="manager_name" class="form-control" 
												id="inputEmail3" placeholder="Manager Name" required/>
											</div>
										  </div>
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">Contact Email</label>
											<div class="col-sm-9">
												<input type="email" name="email" class="form-control" 
												id="inputEmail3" placeholder="Contact Email" required/>
											</div>
										  </div>
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">Promotion Name</label>
											<div class="col-sm-9">
												<input type="text" name="promotion_name" class="form-control" 
												id="inputEmail3" placeholder="Promotion Name" required/>
											</div>
										  </div>
										  <div class="form-group">
                                          <label for="example-number-input" class="col-sm-3 control-label">Order Quantity</label>
                                          <div class="col-sm-9">
                                            <input class="form-control" name="order_quantity" type="number" value="1">
                                          </div>
                                        </div>
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">Delivery Date</label>
											<div class="col-sm-9">
												<input type="text" name="delivery_date" class="form-control" 
												id="inputEmail3" placeholder="mm/dd/yyyy" required/>
											</div>
										  </div>
										  <div class="form-group">
											<label class="col-sm-3 control-label"
												  for="inputPassword3" >Password</label>
											<div class="col-sm-9">
												<input type="password" class="form-control"
													id="inputPassword3" placeholder="Password"/>
											</div>
										  </div>
										  	<strong></strong><h5>Delivery Information</h5></strong><br>
										  	<div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">Street Number</label>
											<div class="col-sm-9">
												<input type="text" name="street_number" class="form-control" 
												id="inputEmail3" placeholder="Street Number" required/>
											</div>
										  </div>
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">City</label>
											<div class="col-sm-9">
												<input type="text" name="city" class="form-control" 
												id="inputEmail3" placeholder="city" required/>
											</div>
										  </div>
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">State</label>
											<div class="col-sm-9">
												<input type="text" name="state" class="form-control" 
												id="inputEmail3" placeholder="state" required/>
											</div>
										  </div>
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">Zip Code</label>
											<div class="col-sm-9">
												<input type="text" name="zip" class="form-control" 
												id="inputEmail3" placeholder="Eg: 92831" required/>
											</div>
										  </div>
										  <div class="form-group">
											<label  class="col-sm-3 control-label"
													  for="inputEmail3">Country</label>
											<div class="col-sm-9">
												<input type="text" name="country" class="form-control" 
												id="inputEmail3" placeholder="mm/dd/yyyy" required/>
											</div>
										  </div>
										  <strong></strong><h5>Delivery Information</h5></strong><br>
                                            <div class="form-group">
  <label class="col-sm-3 control-label" for="comment">Comment:</label>
  <div "col-sm-9">
  <textarea class="form-control" name="comment"></textarea>
</div>
</div>
										  <input type="submit" name="submit" value="Submit" class="btn btn-primay"
												 />
												
										</form>
										
										
										
										
										
										
									</div>
									
									<!-- Modal Footer -->
									<div class="modal-footer">
									
									</div>
								</div>
							</div>
						</div>
						
					<!--modal-video-->
					<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									Schooling
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script>
function myFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>

<!-- //here ends scrolling icon -->
</body>
</html>
<style>


#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}



	</style>
	
