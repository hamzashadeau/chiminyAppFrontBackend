<html>
<head>
    <title>Acceuil</title>
    <link rel="stylesheet" href="{{asset("style/style.css")}}">
    <link rel="stylesheet" href="{{asset("style/about.css")}}">
    <link rel="stylesheet" href="{{asset("style/style1.css")}}">
    <link rel="stylesheet" href="{{asset("style/footer.css")}}">
    <link rel="stylesheet" href="{{asset("style/client.css")}}">
    <link rel="stylesheet" href="{{asset("style/gallery.css")}}">
    <link rel="stylesheet" href="{{asset("style/nav.css")}}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
        /*    #open-btn{
                position: absolute;
                top: 10px;
                display: none;
            }
            #navbarSupportedContent-mobile{
                display: none;
            }*/
        }
        @media screen and (max-width: 800px) {
      /*  #navbarSupportedContent-mobile{
            display: block;
            border-style: outset;
            border-width: 7px;
            border-color: coral;         }
       /*     #navbarSupportedContent-desktop{
                display: none;
            }*/
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
    <h1 class="ml2" style="color: white;">IKRWOUAN CHEMINÉE</h1>
</div>
<hr>
<h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"> <span style=" background:#fff; padding:0 10px;">  Entreprise En <strong>Chiffre</strong></span></h1>
<hr>
<!--  <div class="container-fluid">
<div class="row">
<div class="col-md-12 back">
  <div class="text">
    <h1>OUR SERVICE</h1>
    <h4>
      Best chemeny in the world , We have the best<br />
      professiional staffs to help you and <br />
      make your place better !!
    </h4>
  </div>
  <br /><br /><br /><br />
  <button class="btn btn-dark btn-custom">Contactez Nous</button>
</div>
</div>
<div
class="row"
style="background-color: #484a43; padding: 10px; color: white"
>-->
<div class="col-md-12">
    <br />
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img
                src="../image/employee.svg"
                width="20%"
                alt="employes number"
            />
            <br />
            <br />
            <h5>50 Employees</h5>
        </div>
        <div class="col-md-4">
            <img
                src="../image/exchange.svg"
                width="20%"
                alt="exchange number"
            />
            <br />
            <br />
            <h5>50 000 DH Dirham Marocain</h5>
        </div>
        <div class="col-md-4">
            <img
                src="../image/project-management.svg"
                width="20%"
                alt="project number"
            />
            <br />
            <br />
            <h5>300 Projets</h5>
        </div>
    </div>
</div>
</div>
<hr>
<h1 id="service"style=" font-weight: 400px;width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"> <span style=" background:#fff; padding:0 10px;">  NOS <strong>Service</strong></span></h1>
<hr>
<br />
<!-- The main services -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="../image/service.jpg">
        </div>
        <div class="col-md-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem dolores quis eius nisi, quos voluptatibus magni, deserunt quo recusandae eaque minus dolorum nihil consectetur accusantium laborum ex odit voluptate nulla.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quaerat eaque doloribus! Harum nesciunt ab dignissimos ullam, commodi expedita. Vitae neque dolore consectetur vel illo rem, mollitia officiis saepe quos.</p>
        </div>
    </div>
</div>


<!-- Ici 5ssna ndiru slides dyaal les testimonials dyal anciens clients w ndiruhum tayduzu automatic b7al *CAROUSEL* -->
<div class="row" style="margin: 0px;">
    <img
        src="../image/—Pngtree—black world map_3294087.png"
        alt="lkdsdj"
        width="100%"
    />
</div>
<!--
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h4>
      J aime ce service <i class="fa fa-star" aria-hidden="true"></i>
    </h4>
  </div>
  <div class="col-md-3"></div>
</div>
<br />
SEction : Contact Us
<div class="row">
  <div class="col-md-7">Adresse</div>
  <div class="col-md-5" style="text-align: center;">
    <h2 style="font-weight: 900">Contact Form</h2>
    <div style="background-color: #484a43;
    padding: 20px;
    /* border-radius: 20px; */
    box-shadow: 15px 15px #3e3e3e;">
      <form action="" method="post">

          <input type="email" class="form-control my-input" name="" id=""  placeholder="Ton email electronique">
          <input type="text" class="form-control my-input" name="" id=""  placeholder="Ton Nom complet">
          <input type="text" class="form-control my-input" name="" id=""  placeholder="Service">
          <input type="tel" class="form-control my-input" name="" id=""  placeholder="Ton numero de telephone">

<textarea class="form-control" style="border-radius: 10px;" name="" id="" rows="3" placeholder="Ton MEssage en detailles"></textarea>
<br>
<button class="btn btn-info btn-block" style="padding: 15px;
border-radius: 50px;
">Envoyer</button>


      </form>
    </div>
  </div>
</div>
<br>
<div
  class="row"
  style="background-color: #484a43; padding: 40px; color: white"
>
  <div class="col-md-2">
    <i class="fas fa-mail-bulk"></i> Subscribe our NewsLetters
  </div>
  <div class="col-md-5">
    <form action="" method="post" class="index-search-form">
      <input
        style="border-radius: 50px"
        type="email"
        class="form-control hei search-box"
        placeholder="name@gmail.com"
      />
      <button
        name="submit"
        style="border-radius: 50px; border: 3px solid white"
        class="btn btn-warning hei"
        type="submit"
      >
        Subscribe
      </button>
    </form>

    <input style="border-radius: 50px;width: min-content;" type="email" class="form-control hei" >
  <button style="border-radius: 50px;" class="btn btn-warning hei">Subscribe</button>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-1">
    <i class="fa bla fa-facebook-square" aria-hidden="true"></i>
  </div>
  <div class="col-md-1">
    <i class="fa bla fa-youtube" aria-hidden="true"></i>
  </div>
  <div class="col-md-1">
    <i class="fa bla fa-twitter" aria-hidden="true"></i>
  </div>
  <div class="col-md-1">
    <i class="fa bla fa-instagram" aria-hidden="true"></i>
  </div>
</div>
<p style="float: left; padding: 5px">
  Tous les droits sont réservés au CHEMINEE INTER
  <i
    class="fa fa-copyright"
    style="font-size: 15px"
    aria-hidden="true"
  ></i>
  2020
</p>
</div>
-->
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
</body>
<!-- <a
  title="Vers le Haut"
  id="back-to-top"
  href="#"
  class="back-to-top"
  role="button"
  ><i class="fa fa-chevron-up"></i
></a> -->
<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
></script>
<script>
    function displayNav(){
        document.getElementById('navbarSupportedContent-mobile').style.display='block';
    }
    function cacheNav(){
        document.getElementById('navbarSupportedContent-mobile').style.display='none';
    }
</script>
<script>
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
    /* Set the width of the side navigation to 250px */
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
<!-- <script src="../js/main.js"></script> -->
<!-- <script src="../js/scroll.js"></script> -->
</html>
