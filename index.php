<!DOCTYPE html>
<html lang="en">
<head>
<title>Home - The Goat</title>
<?php
    include_once 'header.php';
?>
</head>
<body>
<div class="goat-wrapper">  
    <script>
    $('body').bind('touchstart', function() {});
    </script>
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
                                <a href="index.php" class="selected">Home</a>
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

        <header class="bird-box">
                <div class="back-bird"></div>
                <div class="logo"></div>
            <div class="fore-bird"></div>
        </header>
        
        <section class="content">
        <article>
            <h1>THE GOAT</h1>
            <hr>
            <p>Today I'd like to introduce everyone to my new company, GOAT. Here we will help you accomplish your dreams by making you very own website that looks amazing and actually works. Our focus will be on web development, but will be expanding our services much further by getting into developing mobile applications, Artificial Intelligent, Augmented and Virtual Reality.</p>
            <hr>
            <br>
            <div class="clothes-pics">
                <div class="row img-row">
                    <figure class="four columns">
                        <img src="img/1.jpg" width>
                        <figcaption>Develop Brand Strategy - <strong>01</strong></figcaption>
                    </figure>
                    <figure class="four columns">
                        <img src="img/2.jpg">
                        <figcaption>Avoid Web Design Mistakes - <strong>02</strong></figcaption>
                    </figure>
                    <figure class="four columns">
                        <img src="img/3.jpg">
                        <figcaption>Premium, Free Or Freemium - <strong>03</strong></figcaption>
                    </figure>
                </div>
                <div class="row img-row">
                    <figure class="four columns">
                        <img src="img/4.jpg">
                        <figcaption>Increase Website Traffic - <strong>04</strong></figcaption>
                    </figure>
                    <figure class="four columns">
                        <img src="img/5.jpg">
                        <figcaption>Make Site Sticky  - <strong>05</strong></figcaption>
                    </figure>
                    <figure class="four columns">
                        <img src="img/6.jpg">
                        <figcaption>Killer SEO - <strong>06</strong></figcaption>
                    </figure>
                </div>
                <div class="row img-row">
                    <figure class="four columns">
                        <img src="img/7.jpg">
                        <figcaption>Generate Revenue - <strong>07</strong></figcaption>
                    </figure>
                    <figure class="four columns">
                        <img src="img/8.jpg">
                        <figcaption>Show Advertisers - <strong>08</strong></figcaption>
                    </figure>
                    <figure class="four columns">
                        <img src="img/9.jpg">
                        <figcaption>Social Media Strategy - <strong>09</strong></figcaption>
                    </figure>
                </div>
            </div>
            <h1>BE THE GOAT</h1>
            <hr>
            <p>I like to keep it simple. I'm a developer, so I know how to create your website to run across devices using the latest technologies available. If you have a project that you want to get started, think you need my help with something or just fancy saying hey, then get in touch. I'll help you be the GOAT.
            </p>
            <hr>
                <div class="large-window" style="overflow-x:hidden;">
                    <div class="window-tint" style="overflow-x:hidden;">
                        <div class="promo-text">
                            Be The Goat<strong><span>from</span> $99</strong><a href="connect.php" class="window-cta">Get Started</a>
                        </div>
                    </div>
                </div>
            <h1>PROJECTS</h1>
            <hr>
            <p>Below you can see some projects we have been working on lately.</p>
            <hr>
            
            <div class="blog-posts row">
                <div class="post columns four post-1">
                    <div class="overlay">
                        <a href="http://alpinelodge.ga/" target="_blank">VIEW PROJECT</a>
                    </div>
                </div>
                <div class="post columns four post-2">
                        <div class="overlay">
                            <a href="#">COMING SOON</a>
                        </div>
                
                </div>
                <div class="post columns four post-3">
                        <div class="overlay">
                            <a href="https://smp.com.np/" target="_blank">VIEW PROJECT</a>
                        </div>
                </div>
            </div>

        </article>
    </section>
    <!--- Footer -->
    <?php
        include_once 'footer.php';
    ?>
</div>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/functions.js"></script>
<script>
     window.sr= ScrollReveal();
     sr.reveal('.nav-wrapper', {
          duration: 2000,
          origin:'bottom',
          mobile:false,
          reset:false
        });
    sr.reveal('.icon', {
        duration: 2000,
        origin:'bottom'
    });
    sr.reveal('.logo', {
          duration: 2000,
          delay: 1500,
          origin:'bottom'
        });
    sr.reveal('.content h1', {
        duration: 2000,
        origin:'left',
        viewfactor:0.2
    });
    sr.reveal('.content p', {
        duration: 2000,
        origin:'bottom',
        viewfactor:0.2
    });
</script>
</body>
</html>