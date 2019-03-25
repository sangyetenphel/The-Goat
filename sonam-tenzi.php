<?php
//define variables and set to empty values
$success="";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'polaxkhandro@gmail.com';
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
 <title>Sonam-Tenzi - The Goat</title>
     <?php
        include_once 'header.php';
    ?>
 </head>
<body>
        
<header class="v-header container-fluid">
		<div class="sonam-image">
            <!-- Navigation -->
    <div class="main-nav">
        <nav>
              <input type="checkbox" id="nav" class="hidden">
              <label for="nav" class="nav-btn" style="background-color:white;">
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
                            <a href="connect.php">Connect</a>
                        </li>
                        <li>
                            <a href="more.php">More</a>
                        </li>
                    </ul>
              </div>
        </nav>
  </div>
		</div>
		<div class="sonam-content text-md-center me">
		</div>
</header>
<br>
 <section class="sonam-section">
        <h2>Sonam Tenzin</h2>
        <p>This project is a personal bio website for the co-founder of The Goat. The site showcases his passion and journey of becoming the leading Graphic Designer and DJ in Kathmandu Nepal.</p>
	 </section>

<section id="showcase-sonam">
    <div class="container-sonam">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="showcase-sonam-left">
                    <img src="img/sonam1.png" alt="">
                </div>   
            </div>  
            <div class="col-md-6 col-sm-6">
                <div class="showcase-sonam-right">
                <img src="img/sonam2.png" alt="">
                <div>
                    <br>
            </div> 
        </div>  
    <div>     
</section>
<section id="testimonial">
    <div class="container-sonam">
        <p>"My vision became a reality. Clean, fast, and well put together website that allows for our prospects and clients to communicate and see what they need and want."</p>
        <p class="customer">- Sonam Tenzin</p>
    </div>
</section>
<section id="info1">
    <div class="container-sonam">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-left">
                    <img src="img/sonam3.png" alt="">
                </div>
             </div>   
             <div class="col-md-6 col-sm-6">
                 <div class="info-right">
                    <img src="img/sonam4.png" alt="">
                 </div>
             </div> 
         </div>
    </div>
</section>
<hr>
<section id="info2">
    <div class="container-sonam">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-left">
                    <img src="img/sonam5.png" alt="">
                </div>
             </div>   
             <div class="col-md-6 col-sm-6">
                 <div class="info-right">
                    <img src="img/sonam7.png" alt="">
                 </div>
             </div> 
         </div>
    </div>
</section>
<section id="contact-sonam">
    <div id="container-sonam">
        <div class="row">
            <div class="col-md-5 col-sm-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="form-group">
                <label>Name: </label>
                <input class="form-control" type="text" name="name" value="" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label>Email: </label>
                <input class="form-control" type="text" name="email" value="" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label>Message: </label>
                <textarea class="form-control" name="" value="message" placeholder="Enter Message"></textarea>
              </div>
              <button class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-md-7 col-sm-7">

            </div>
        </div>
    </div>
</section>
<!--- Footer -->
 <?php
    include_once 'footer.php';
?>
<script>
    window.sr= ScrollReveal();
    sr.reveal('.icon', {
        duration: 2000,
        delay:1000,
        origin:'bottom'
    });
    sr.reveal('.sonam-content', {
        duration: 2000,
        origin:'bottom'
    });
    sr.reveal('.sonam-section', {
        duration: 2000,
        origin:'right'
    });
    sr.reveal('.showcase-sonam-left',{
        duartion:3000,
        origin:'top',
        distance:'300px'
    });
    sr.reveal('.showcase-sonam-right',{
        duartion:3000,
        origin:'right',
        distance:'300px'
    });
    sr.reveal('#testimonial div',{
        duartion:3000,
        origin:'bottom'
    });
    sr.reveal('.info-left',{
        duartion:3000,
        origin:'left',
        distance:'300px',
        viewFactor:0.2
    });
    sr.reveal('.info-right',{
        duartion:3000,
        origin:'right',
        distance:'300px',
        viewFactor:0.2
    });
</script>
</body>
</html>



