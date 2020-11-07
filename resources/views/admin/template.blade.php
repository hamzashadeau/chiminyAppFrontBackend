<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("style/about.css")}}">
    <link rel="stylesheet" href="{{asset("style/admin.css")}}">
    <style>
        #text{
            display: none;
        }
        #date{
            display: none;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-xl-2 col-md-3 col-sm-12" id="sidenav">
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-indigo text-center ">
                <a href="#" class="nav-link">
                    <img src="../image/personLogo.png" alt="image" style="height: 200px;width: 150px;border-radius: 50%;">
                    <h5>JOHN Doe</h5>
                    <span class="small"> <em>ADMIN</em></span>
                </a>
            </li>
            <li class="list-group-item bg-indigo height-item" id="home-btn">
                <a href="{{url('adminDashboard')}}"  class="nav-link "><span class="fa fa-home"> HOME</span></a>
            </li>
            <li class="list-group-item bg-indigo height-item" id="projet-btn">
                <a href="{{url('projet-show')}}" class="nav-link"><span class="fa fa-users"> Projet</span></a>
            </li>
            <li class="list-group-item bg-indigo height-item">
                <a class="nav-link" href={{url('admin/showClientProjet')}} >  <span class="fa fa-envelope-square"> client Projet</span></a>
            </li>
            <li class="list-group-item bg-indigo height-item" id="etat-financiere-btn">
                <a class="nav-link" href="{{url('etatFinanciere-Despence-Show')}}"><span class="fa fa-cogs"> etatFinanciere</span></a>
            </li>
            <li class="list-group-item bg-indigo height-item" id="msg-btn">
                <a class="nav-link" href="{{url('message')}}"><span class="fa fa-envelope-square"> message</span></a>
            </li>

            <li class="list-group-item bg-indigo height-item" id="msg-btn">                    </li>              </ul>
    </div>
    <div class="col-xl-10 col-md-9 col-sm-12" id="content">
        <!--horizontal navbar-->
        <nav class="navbar  navbar-light bg-white" id="navbar">
            <a class="navbar-brand text-indigo " id="sidenav-toggler"><span class="fa fa-bars"></span></a>
            <!--   <div class="btn-group" id="icons">
                   <button class="btn bg-transprent border-0 text-indigo search-btn">
                       <span class="fa fa-search"></span>
                   </button>
                   <button class="btn bg-transprent border-0 text-indigo">
                       <span class="fa fa-users"></span>
                   </button>
               </div>-->
            <!--search input-->
            <!--             <div class="form-group display-search w-100" id="search">
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <button class="btn bg-indigo text-center">
                                         <span class="fa fa-search"></span>
                                     </button>
                                 </div>
                                 <input type="text" class="form-control" placeholder="search">
                                 <div class="input-group-append">
                                     <button class="btn bg-indigo text-white search-btn">
                                         <span class="fa fa-times"></span>
                                     </button>
                                 </div>
                             </div>
                         </div>-->
        </nav>
        @yield('content')
        <!--body contant-->

    </div>
</div>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script>
    /*$(document).ready(function(){
        $(".search-btn").click(function(){
            $("#search").toggleClass("display-search");
            $("#icons").toggle();
        });
        $("#sidenav-toggler").click(function(){
            $("#sidenav").toggle();
            $("#content").toggleClass("col-xl-12");
            $("#navbar").toggleClass("shadow")
        });
        $("#home-btn").click(function(){
            $("#home").show();
            $("#projet").hide();
            $("#etat-financiere").hide();
            $("#messages").hide();
        });
        $("#projet-btn").click(function(){
            $("#home").hide();
            $("#projet").show();
            $("#etat-financiere").hide();
            $("#messages").hide();
        });
        $("#msg-btn").click(function(){
            $("#home").hide();
            $("#projet").hide();
            $("#etat-financiere").hide();
            $("#messages").show();
        });
        $("#etat-financiere-btn").click(function(){
            $("#home").hide();
            $("#projet").hide();
            $("#etat-financiere").show();
            $("#messages").hide();
        });

        $("#create-projet-btn").click(function(){
            $("#show-projet").hide();
            $("#create-projet").show();
        });
        $("#show-projet-btn").click(function(){
            $("#show-projet").show();
            $("#create-projet").hide();
        });
        $("#despence-nav").click(function(){
            $("#despence").show();
            $("#despence").toggleClass("active");
            $("#gain").hide();
            $("#ajouter-gain").hide();
        });
        $("#gain-nav").click(function(){
            $("#despence").hide();
            $("#gain").toggleClass("active");
            $("#gain").show();
            $("#ajouter-Despence").hide();

        });
        $("#ajouter-despence-btn").click(function(){
            $("#ajouter-Despence").show();
            $("#despence").hide();

        });
        $("#ajouter-gain-btn").click(function(){
            $("#ajouter-gain").show();
            $("#gain").hide();
        });
        $("#lister-despences-btn").click(function(){
            $("#ajouter-Despence").hide();
            $("#despence").show();

        });
        $("#lister-gain-btn").click(function(){
            $("#ajouter-gain").hide();
            $("#gain").show();
        });

    })*/
</script>
<script src="{{asset("js/xychart.js")}}"></script>
<script src="{{asset("js/pieChart.js")}}"></script>
</body>
</html>
