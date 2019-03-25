<!DOCTYPE html>
<html lang="en">
<head>
<title>Team - The Goat</title>
<?php
    include_once 'header.php';
?>
    <style type="text/css">
:root {
  --container-bg-color: #333;
  --left-bg-color: rgba(223, 39, 39, 0.7);
  --left-button-hover-color: rgba(161, 11, 11, 0.3);
  --right-bg-color: rgba(43, 43, 43, 0.8);
  --right-button-hover-color: rgba(92, 92, 92, 0.3);
  --hover-width: 75%;
  --other-width: 25%;
  --speed: 1000ms;
}

html, body {
  padding:0;
  margin:0;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  margin: 0px;
}
h1 {
  font-size: 4rem;
  color: #fff;
  position: absolute;
  left: 50%;
  top: 20%;
  transform: translateX(-50%);
  white-space: nowrap;
}

.button {
  display: block;
  position: absolute;
  left: 50%;
  top: 40%;
  width: 15rem;
  text-align: center;
  color: #fff;
  border: #fff solid 0.2rem;
  font-size: 1rem;
  font-weight: bold;
  text-transform: uppercase;
  text-decoration: none;
  transform: translateX(-50%);
}

.split.left .button:hover {
  background-color: var(--left-button-hover-color);
  border-color: var(--left-button-hover-color);
}

.split.right .button:hover {
  background-color: var(--right-button-hover-color);
  border-color: var(--right-button-hover-color);
}

.container-fluid team{
  position: relative;
  width: 100%;
  height: 100%;
  background: var(--container-bg-color);
  padding: 0px;
  margin: 0px;
}

.split {
  position: absolute;
  width: 50%;
  height: 100%;
  overflow: hidden;
}

.split.left {
  left:0;
  background: url('https://image.ibb.co/m56Czw/designer.jpg') center center no-repeat;
  background-size: cover;
}

.split.left:before {
  position:absolute;
  content: "";
  width: 100%;
  height: 100%;
  background: var(--left-bg-color);
}

.split.right {
  right:0;
  background: url('https://image.ibb.co/m3ZbRb/programmer.png') center center no-repeat;
  background-size: cover;
}

.split.right:before {
  position:absolute;
  content: "";
  width: 100%;
  height: 100%;
  background: var(--right-bg-color);
}

.split.left, .split.right, .split.right:before, .split.left:before {
  transition: var(--speed) all ease-in-out;
}

.hover-left .left {
  width: var(--hover-width);
}

.hover-left .right {
  width: var(--other-width);
}

.hover-left .right:before {
  z-index: 2;
}


.hover-right .right {
  width: var(--hover-width);
}

.hover-right .left {
  width: var(--other-width);
}

.hover-right .left:before {
  z-index: 2;
}

@media(max-width: 800px) {
  h1 {
    font-size: 2rem;
  }

  .button {
    width: 12rem;
  }
}

@media(max-height: 700px) {
  .button {
    top: 70%;
  }
}

    </style>
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
                                <a href="team.php" class="selected">Team</a>
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
    <div class="container-fluid team">
            <div class="split left">
              <h1>The Designer</h1>
              <a href="sonam-tenzi.php" class="button">Read More</a>
            </div>
            <div class="split right">
              <h1>The Programmer</h1>
              <a href="about.php" class="button">Read More</a>
            </div>
    </div>

    
    <script src="js/functions.js"></script>
</body>
</html>