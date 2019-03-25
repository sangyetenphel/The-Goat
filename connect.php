<?php
//define variables and set to empty values
$success="";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'sangyetenphel@gmail.com';
	$subject = "Client";
	$body = '
					<h2>Message </h2>
					<hr>
					<p>Name:<br>'.$name.'</p>
					<p>Email:<br>'.$email.'</p>
					<p>Message:<br>'.$message.'</p>
	';
//headers
	$headers = "MIME-Version: 1.0" ."\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
	$headers .= "From: ".$name."<".$email.">"."\r\n";
	$headers .= "Reply-To:" .$email. "\r\n";
	$headers .= "X-Mailer:PHP/" . phpversion();
	$headers .= "X-Priority: 1"."\r\n";
	
//send
$send = mail($to, $subject, $body, $headers);
if($send){
	echo '<script language="javascript">';
	echo 'alert("Thank you! Your message has been sent successfully.")';
	echo '</script>';
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Connect - The Goat</title>
<?php
    include_once 'header.php';
?>
 </head>
<body>

        <!-- Navigation -->
    <div class="main-nav">
        <nav>
              <input type="checkbox" id="nav" class="hidden">
              <label for="nav" class="nav-btn">
                    <i></i>
                    <i></i>
                    <i></i>
              </label>
              <div class="icon">
                <ahref="#"><img src="img/logo.png"></a>
              </div>
              <div class="nav-wrapper">
                    <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                            <li>
                                <a href="team.php">Team</a>
                            </li>
                            <li>
                                <a href="resume.php">Resume</a>
                            </li>
                            <li>
                                <a href="connect.php"  class="selected">Connect</a>
                            </li>
                            <li>
                                <a href="more.php">More</a>
                            </li>
                        </ul>
              </div>
        </nav>
  </div>
<!--Image background-->
<section id="showcase-connect">
	<div class="showcase-inner"> 
        <h2>Reach out and send me a friendly hello</h2>
        <br>
		<h1 class="display-2">LET'S HAVE A CHAT</h1>
	</div>
</section>



<!-- 3 Modals -->
<div class="container-fluid padding">
	<div class="row connect padding">
		<div class="col-md-4">
			 <div class="card">
			 	<div class="card-body">
			 		<h2 class="card-title">Web Developer</h2>
			 		<p>If you ever wanted to have your own personal website, be it a blog or for business, a startup just like mine. Then you've come to the right place.</p>
			 		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">Know More</button>
			 	</div>
			 </div>
		</div>

		<div class="col-xs-12 col-md-4">
			 <div class="card">
			 	<div class="card-body">
			 		<h2 class="card-title">Graphic Designer</h2>
			 		<p>Are you looking for a Graphic designer? To design your logo, flyers, etc. Or even maybe a professional Disc Jockey (DJ). We got it all. Just say hello.</p>
			 		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">Say Hello</button>
			 	</div>
			 </div>
		</div>
		<div class="col-md-4">
			 <div class="card">
			 	<div class="card-body">
			 		<h2 class="card-title">General Questions</h2>
			 		<p>Feel free to reach out to me if you have any questions or comments about the services I offer. Also, you could always just send me a friendly hello.</p>
			 		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">Send Inquiry</button>
			 	</div>
			 </div>
		</div>
	</div>

	<!-- Modal Form-->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">				
					<h1 class="modal-title" style="font-family: proxima-nova;">We will get back to you shortly!</h1>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="font-size: 14px;font-family: proxima-nova;">
						<div class="form-group">
								<p>Full Name</p>
								<input type="text" class="form-control" name="name" required="required">	
						</div>
						<div class="form-group">
								<p>Email Address</p>
								<input type="email" class="form-control" name="email" required="required">
						</div>
						<div class="form-group">
								<p>Your Message</p>
								<textarea class="form-control"  name="message" required="required"></textarea>
						</div>
							<div class="text-center">
                                <button type="submit"class="btn" style="color:white;  background-color:#272727;">Send Message</button>
                                <div class="success"><?= $success; ?></div>
							</div>
					</form>
				</div>
			</div>
	</div>
</div>     
	<hr class="my-4">
</div>

<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="https://www.facebook.com/sangyetenphel"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="mailto:sangyetenphel@gmail.com"><i class="fab fa-google-plus-g"></i></a>
			<a href="https://www.instagram.com/sangyetenphel"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>

<!--- Footer -->
<?php
    include_once 'footer.php';
?>
</body>
</html>