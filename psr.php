<?php
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
		<title>Home page</title>
        <link rel="stylesheet" type="text/css" href="page.css"/>
        
</head>
<body>
<div class="head">
        <img src="clubs/ruet.png">
</div> 
<ul>
<li><a  href="home.php">  Home </a></li>  
<li><a>  Ruetian Clubs</a> 
<ul>
    <li><a href="rapl.php">RAPL</a></li>
    <li><a href="IEEE.php">IEEE Ruet</a></li>
    <li><a href="RCF.php">Ruet Career Forum</a></li>
    <li><a  href="RDC.php">Ruet Debating Club</a></li>
    <li><a href="RSC.php">Robotic Society of Ruet</a></li>
    <li><a href="psr.php">Photographic Society of Ruet</a></li>
    <li><a href="onu.php">অনুরণন</a></li>
    <li><a>সমানুপাতিক</a></li>
</ul>
</li>
<li><a>Events</a>
    <ul>
        <li><a>August</a></li>
        <li><a>September</a></li>
        <li><a>October</a></li>
    </ul>
</li>
<li><a href="blogcomment.php">Blog</a></li>
<li><a href="contact.php">  Contact us</a></li>  
</ul></br></br>

    <h1>Photographic Society of RUET (PSR)</h1>

    <div class="img" style="max-width:800px">
    <img class="mySlides" src="clubs/psr3.jpg" style="width:100%">
    <img class="mySlides" src="clubs/psr2.jpg" style="width:100%">
    <img class="mySlides" src="clubs/psr.jpg" style="width:100%">
    </div>
  
    <div class="button" >
      <div class="button2">
        <button class="greyButton" id="grey1" onclick="plusDivs(-1)">❮ Prev</button>
        <button class="greyButton" id="grey2" onclick="plusDivs(1)">Next ❯</button>
      </div>
      <button class="demoButton" id="red1" onclick="currentDiv(1)">1</button> 
      <button class="demoButton" id="red2" onclick="currentDiv(2)">2</button> 
      <button class="demoButton" id="red3" onclick="currentDiv(3)">3</button>
    </div>
  
  <script>
  var slideIndex = 1;
  showDivs(slideIndex);
  
  function plusDivs(n) {
    showDivs(slideIndex += n);
  }
  
  function currentDiv(n) {
    showDivs(slideIndex = n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-red", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-red";
  }
  </script>
  
    </br></br>
    <div class="cont"><h3>History:</h3>
    <p> Photographic Society of RUET was created in 2002. This club was formed in order to deliver the best photographic potential from the students of Rajshahi Engineering University & Technology. This society is working to bring closer all the photographers of RUET. </p>
    
    <h3>Objectives:</h3>
    <p> PSR was formed to innovate the photographic potential among the engineering student. Our objective is not only throwing photo exhibition but also arranging workshop on photography. And there is a small photo exhibition in every month selecting the three best photo of the month. Organizing a Photowalk in every month is another of our objectives.</p>
    
    <h3>Membership:</h3>
    <p>The membership of the PSR is simple and easy. All the students (including Ex as well) of RUET interested in photography can join the club at their free will. Visitors are welcome to participate in our programs as well. Individuals are also welcome to participate in any of our activities. The Membership Process is offered once a year just after the joining of a new batch in the university. However, Ex-students can join with PSR any time paying the Regular Registration Fee.
    </p></div>
    
    
</body>
</html>