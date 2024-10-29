<?php 
    include $parentDirectory."resources/r2/comments.php";
?>
<style>
    html, body{
        margin:none;
        overflow-X: hidden;
    }
    ::-webkit-scrollbar {
  width: 12px;              /* Width of the scrollbar */
  height: 12px;   
  box-shadow: 0 0 45px #2d5940;
  background: transparent;  /* Height of the scrollbar for horizontal scrolling */
}

::-webkit-scrollbar-track {
  background: #1C1C1C;
}

::-webkit-scrollbar-thumb {
  background-color: #882d2a; /* Green color for the thumb */
  border-radius: 10px;       /* Rounded corners for the thumb */
  border: 2px solid #000000; /* Padding around the thumb to match the track */
}
    #home{
        background:url('/cycle/static/images/main.png');
        width: 100%;
        height:100vh;
        background-size:100% 100vh;
        background-repeat:no-repeat;
        margin:0;
        padding:1rem 0 0 0;
        overflow-X:hidden;
    }
    /* #nav{
        color:white;
        padding:1rem;
        width:50%;
        margin:0rem auto 0 auto;
        text-align:center;
        position: fixed;
        border-radius:100px;
        left:25%;
        z-index:100;
        opacity:1;
        background-color: rgba(31, 41, 55, 0.6);
        margin-top:1rem;
    } */
   /* General styles for all screen sizes */
#nav {
    color: white;
    padding: 1rem;
    width: 50%;
    margin: 0 auto;
    text-align: center;
    position: fixed;
    border-radius: 100px;
    left: 25%;
    z-index: 100;
    opacity: 1;
    background-color: rgba(31, 41, 55, 0.8);
    display:inline-block;
}
#logoimg{
    display:none;
    width:8rem; 
    height:6rem; 
    position:absolute; 
    top:1rem; 
    right:-10rem;
}
#logoimg2{
    display:block;
    width:10rem; 
    height:6rem; 
    position:absolute; 
    top:1rem; 
    left:80%;
}
#nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}
#nav ul li {
    display: inline;
    margin: 0 1rem;
}
#menuToggle {
    display: none; /* Hide the button on desktop */
    background-color: rgba(31, 41, 55, 1);
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1.2rem;
    border-radius: 50px;
    margin-bottom: 1rem;
    float:right;
}

.hide {
    display: none; /* For hidden menu on smaller screens */
}
#landparadiv{
    color:white;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 100%;
    justify-content:center;
    align-items:center;
    padding:10rem 10% 0 10%;
}

#landparabooknowdiv{
  width:50%;
  font-size:2.5rem;
}

.navhide {
    display: block;
}

.navshow {
    display: block;
}



    .scroll-parent {
  position: relative;
  width: 100%;
  height: 8.5rem;
  overflow-y: hidden;
  padding: 0 0 0 5rem;
}

.scroll-element {
  width: 100%;
  /* height: 4.16rem; */
  position: relative;
  left: 0%;
  top: 0%;
  animation: primary 20s linear infinite;
  font-weight:bold;
}

@keyframes primary {
  0% {
    top: 0%;
  }
  90% {
    top: -100%;
  }
  100%{
    top: 0%;
  }
}

.cycle{
    animation: cycle 5s linear infinite;
}
@keyframes cycle {
  0% {
    left: 100%;
  }
  89%{
    opacity:1;
  }
  90% {
    opacity:0;
    left: -30%;
  }
  99%{
    opacity:0;
  }
  100%{
    opacity:1;
    left: 100%;
  }
}
.cycle2{
    animation: cycle2 12s linear infinite;
}
@keyframes cycle2 {
  0% {
    right: -50%;
  }
  89%{
    opacity:1;
  }
  90% {
    opacity:0;
    right: 100%;
  }
  99%{
    opacity:0;
  }
  100%{
    opacity:1;
    right: -50%;
  }
}
/* Responsive styles for tablet and mobile screens */
@media (max-width: 768px) {
  #home{
        padding: 0;
        overflow-X:hidden;
    }
    #nav {
        width: 100%;
        left: 0;
        border-radius: 0;
        padding: 0.5rem;
        text-align: left;
        justify-content:center;
        vertical-align:center;
        align-items:center;
    }
    #logoimg{
    position:relative; 
    top:0rem; 
    right:0rem;
    display:inline-block;
  }
  #logoimg2{
    display:none;
  }
    #nav ul {
        display: none; /* Initially hide the menu items */
        text-align: left;
        padding-left: 1rem;
    }

    #nav ul li {
        display: block;
        margin: 1rem 0;
    }

    #menuToggle {
        display: inline-block; /* Show the button on tablet/mobile */
        margin: 3% 0 0 0;
    }

    #menuItems.navshow {
        display: block; /* Show the menu when the button is clicked */
    }
    .navhide {
    display: none;
}

#landparadiv{
    flex-direction: column;
}
#landparabooknowdiv{
  text-align:center;
  width:100%;
  font-size:1.5rem;
}
.scroll-parent{
  padding:0;
  text-align:center;
  margin:2rem 0 0 0;
}
}
</style>
<div id="home" >
<!-- <img src="/cycle/static/images/road.gif" alt="" style="width:100%; height:40vh; position:absolute; bottom:0;   transform: scaleX(-1);"> -->
<!--<img class="cycle2" src="/cycle/static/images/cycle.gif" alt="" style="width:15rem; height:10rem; position:absolute; bottom:1rem; right:-50%;"> -->
<div style="justify-content:center; width:100%; align-item:center;">
<img id="logoimg2" src="/cycle/static/images/logo-nobg.png">
<div id="nav">
<img id="logoimg" src="/cycle/static/images/logo-nobg.png">
    <button id="menuToggle" onclick="toggleMenu()">☰</button>
    <ul id="menuItems">
        <li id="homemenu"><a href="#home">Home</a></li>
        <li id="customToursmenu"><a href="#customTours">Custom Tours</a></li>
        <li id="aboutUsmenu"><a href="#aboutUs">About Us</a></li>
        <li id="gallerymenu"><a href="#gallery">Gallery</a></li>
        <li id="reviewsmenu"><a href="#reviews">Reviews</a></li>
    </ul>
</div>

        <script>
            function toggleMenu() {
    var menu = document.getElementById("menuItems");
    if (menu.classList.contains("navhide")) {
        menu.classList.remove("navhide");
        menu.classList.add("navshow");
    } else if(menu.classList.contains("navshow")) {
        menu.classList.remove("navshow");
        menu.classList.add("navhide");
    }else{
        menu.classList.remove("navhide");
        menu.classList.add("navshow");
    }
}



            function boldcurr() {
    var homemenu = document.getElementById("homemenu");
    var customToursmenu = document.getElementById("customToursmenu");
    var aboutUsmenu = document.getElementById("aboutUsmenu");
    var gallerymenu = document.getElementById("gallerymenu");
    var reviewsmenu = document.getElementById("reviewsmenu");

    var home = document.getElementById("home");
    var customTours = document.getElementById("customTours");
    var aboutUs = document.getElementById("aboutUs");
    var gallery = document.getElementById("gallery");
    var reviews = document.getElementById("reviews");
    
    var windowHeight = window.innerHeight;

    var homeelementTop = home.getBoundingClientRect().top;
    var customTourselementTop = customTours.getBoundingClientRect().top;
    var aboutUselementTop = aboutUs.getBoundingClientRect().top;
    var galleryelementTop = gallery.getBoundingClientRect().top;
    var reviewselementTop = reviews.getBoundingClientRect().top;

    var homeelementBot= home.getBoundingClientRect().bottom;
    var customTourselementBot= customTours.getBoundingClientRect().bottom;
    var aboutUselementBot= aboutUs.getBoundingClientRect().bottom;
    var galleryelementBot= gallery.getBoundingClientRect().bottom;
    var reviewselementBot= reviews.getBoundingClientRect().bottom;
    
      
      var elementVisible = 50;
      if (homeelementTop < windowHeight - elementVisible && homeelementBot>169) {
        homemenu.style.fontWeight="bolder"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="normal" 
      }
      if (homeelementBot<169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="normal"
      }
      if (customTourselementTop < windowHeight - elementVisible && customTourselementBot>169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="bolder" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="normal" 
      }
      if (customTourselementBot<169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="normal"
      }
      if ( aboutUselementTop < windowHeight - elementVisible &&  aboutUselementBot>169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="bolder" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="normal" 
      }
      if (aboutUselementBot<169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="normal"
      }
      if (galleryelementTop < windowHeight - elementVisible && galleryelementBot>169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="bolder" 
        reviewsmenu.style.fontWeight="normal" 
      }
      if (galleryelementBot<169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="normal"
      }
      if (reviewselementTop < windowHeight - elementVisible && reviewselementBot>169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="bolder" 
      }
      if (reviewselementBot<169) {
        homemenu.style.fontWeight="normal"
        customToursmenu.style.fontWeight="normal" 
        aboutUsmenu.style.fontWeight="normal" 
        gallerymenu.style.fontWeight="normal" 
        reviewsmenu.style.fontWeight="normal"
      }
    }
  window.addEventListener("scroll", boldcurr);
  
  document.addEventListener("DOMContentLoaded", boldcurr);
        </script>
    </div>
    <div id="landparadiv" style="">
        <div id="landparabooknowdiv" style="">We Lead the way through the Beautiful Ozark Mountains!
        <br>
        <button style="background:#f26c21; color:white; border-radius:100px; font-size:1.3rem; padding:.2rem 1rem .4rem 1rem; margin:1rem 0 0 0;">Book Now</button>
        </div>
        <div class="scroll-parent" id="scrollingDiv" style="width:50%;">
            <?php
            for ($i=0; $i < sizeof($comments); $i++) { 
                ?>
            <p class="scroll-element">
               <?php 
                    echo '"'.$comments[$i][0].'" -'."\n";
                ?>
                <br>
                <?php
                    echo $comments[$i][1];
                ?>
                <br><br>
            </p>
                <?php
            }
            
            ?>
        </div>
    </div>
</div>
