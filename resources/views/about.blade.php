<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="{{asset("style/style.css")}}">
    <link rel="stylesheet" href="{{asset("style/about.css")}}">
    <link rel="stylesheet" href="{{asset("style/style1.css")}}">
    <link rel="stylesheet" href="{{asset("style/footer.css")}}">
    <link rel="stylesheet" href="{{asset("style/nav.css")}}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <style>
        a{
            color: white;
        }
        .navbar{
            width: fit-content;
        }
        @media screen and (min-width: 800px) {
            .navbar{
                position: absolute;
                top: 0;
                left: 600px;
            }
            #open-btn{
                position: absolute;
                top: 10px;
                display: none;
            }
            #navbarSupportedContent-mobile{
                display: none;
            }
        }
        @media screen and (max-width: 800px) {
            #navbarSupportedContent-mobile{
                display: block;
            }
            #navbarSupportedContent-desktop{
                display: none;
            }
        }

    </style>
</head>
<body>
<div class="bg">
    <header>
        <nav
            class="navbar navbar-expand-lg"  style="position: relative">
            <!--  <button
                  id="open-btn"
                  onclick="displayNav()"
                  class="navbar-toggler border-0 "
                  type="button"
              >
                  <i class="fa fa-bars" aria-hidden="true"></i>
              </button>-->
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                onclick="openNav()"
            >
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <button
                id="closeNav"
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                onclick="closeNav()"
                style="display: none;"
            >                          <i class="fa fa-close" aria-hidden="true"></i>
            </button>


            <div id="navbarSupportedContent-desktop">
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav mr-auto"></ul>
                    <form class="form-inline my-2 my-lg-0">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active" style="background-color: brown">
                                <a class="nav-link" href="/">
                                    <i class="fa fa-home" aria-hidden="true"></i> Home
                                    <span class="sr-only">(current)</span></a
                                >
                            </li>
                            <li class="nav-item" style="border-bottom:4px solid brown; margin-right: 10px;margin-left: 5px;">
                                <a class="nav-link" href="client.html">client</a>
                            </li>
                            <li class="nav-item " style="border-bottom:4px solid brown; margin-right: 10px;">
                                <a class="nav-link " href="gallery.html">gallery</a>
                            </li>
                            <li class="nav-item " style="border-bottom:4px solid brown; margin-right: 10px;">
                                <a class="nav-link " href="about.html">About</a>
                            </li>
                            <li class="nav-item" style="border-bottom:4px solid brown; margin-right: 10px;">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)"style="opacity: 1" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="/" style="opacity: 1">Home</a>
                <a href="client.html" style="opacity: 1">Client</a>
                <a href="gallery.html" style="opacity: 1">Gallery</a>
                <a href="about.html" style="opacity: 1">About</a>
                <a href="contact.html" style="opacity: 1">Contact</a>
            </div>

            <!-- Use any element to open the sidenav -->
            <!--            <span onclick="openNav()">open</span>-->

            <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
            <div id="main">
                ...
            </div>
            <!--            <div id="navbarSupportedContent-mobile">
                         <button
                                id="close-btn"
                                onclick="cacheNav()"
                                class="navbar-toggler border-0 "
                                type="button"
                            >
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                            <ul class="navbar-nav mr-auto"></ul>
                            <form class="form-inline my-2 my-lg-0">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active" style="background-color: brown">
                                        <a class="nav-link" href="/">
                                            <i class="fa fa-home" aria-hidden="true"></i> Home
                                            <span class="sr-only">(current)</span></a
                                        >
                                    </li>
                                    <li class="nav-item" style="border-bottom:4px solid brown; margin-right: 10px;margin-left: 5px;">
                                        <a class="nav-link" href="client.html">client</a>
                                    </li>
                                    <li class="nav-item " style="border-bottom:4px solid brown; margin-right: 10px;">
                                        <a class="nav-link " href="gallery.html">gallery</a>
                                    </li>
                                    <li class="nav-item " style="border-bottom:4px solid brown; margin-right: 10px;">
                                        <a class="nav-link " href="about.html">About</a>
                                    </li>
                                    <li class="nav-item" style="border-bottom:4px solid brown; margin-right: 10px;">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </form>
                        </div>-->

        </nav>
    </header>
    <div class="description"><i class="fas fa-quote-left"></i>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis debitis soluta officia quis magnam expedita ducimus sequi deleniti, suscipit culpa tenetur architecto similique quo minima quas perspiciatis velit magni!
        <i class="fas fa-quote-right"></i>
    </div>
    <h1 class="ml2" style="color: white;">IKRWOUANE</h1>
</div>    <hr>
<h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">About <strong>US</strong></span></h1>
<hr>
<div class="about-section" style="border: 1px solid black; border-top: #fff;border-right: #fff;border-left: #fff;">
    <div class="container aboutUs">
        <div class="row">
            <div class="col-md-6">
                <img src="../image/companyLogo3.jpg" class="w3-round w3-image w3-opacity-min image" alt="Table Setting">
            </div>
            <div class="col-md-6" >
                <div>
                    <h1 class="w3-center">About Catering</h1><br>
                    <h5 class="w3-center">Tradition since 1889</h5>
                    <p class="w3-large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
                    <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Our <strong>Team</strong></span></h1>
<hr>
<div class="container">
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="../image/personLogo.png" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jane@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../image/personLogo.png" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Mike Ross</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mike@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../image/personLogo.png" alt="John" style="width:100%">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="../image/personLogo.png" alt="John" style="width:100%">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

    </div>
</div>
<footer class="footer-distributed">

    <div class="footer-left">
        <img src="../image/companyLogo1.png" style="border-radius: 50%;">
        <h3>Comany<span>Name</span></h3>

        <p class="footer-links">
            <a href="#">Home</a>
            |
            <a href="#">Blog</a>
            |
            <a href="#">About</a>
            |
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">© 2019 Eduonix Learning Solutions Pvt. Ltd.</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>309 - Rupa Solitaire,
						 Bldg. No. A - 1, Sector - 1</span>
                Mahape, Navi Mumbai - 400710</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+91 22-27782183</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@eduonix.com">support@eduonix.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>  About the company</span>
            We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>
<script>
 function displayNav(){
     document.getElementById('navbarSupportedContent-mobile').style.display='block';
     document.getElementById('open-btn').style.display='none';
     document.getElementById('close-btn').style.display='inline';
 }
 function cacheNav(){
     document.getElementById('navbarSupportedContent-mobile').style.display='none';
     document.getElementById('close-btn').style.display='none';
     document.getElementById('open-btn').style.display='inline';

 }
</script>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml2');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
        .add({
            targets: '.ml2 .letter',
            scale: [4,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70*i
        }).add({
        targets: '.ml2',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById('closeNav').style.display=inline;
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById('closeNav').style.display=none;

    }
</script>
</body>
</html>
