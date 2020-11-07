<html>
<head>
    <title>Admin Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("style/about.css")}}">
    <link rel="stylesheet" href="{{asset("style/admin.css")}}">
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
                <a   class="nav-link "><span class="fa fa-home"> HOME</span></a>
            </li>
            <li class="list-group-item bg-indigo height-item" id="projet-btn">
                <a class="nav-link"><span class="fa fa-users"> Projet</span></a>
            </li>
            <li class="list-group-item bg-indigo height-item" id="etat-financiere-btn">
                <a class="nav-link "><span class="fa fa-cogs"> etatFinanciere</span></a>
            </li>
            <li class="list-group-item bg-indigo height-item" id="msg-btn">
                <a href="#" class="nav-link "><span class="fa fa-envelope-square"> message</span></a>
            </li>
            <li class="list-group-item bg-indigo height-item"></li>
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
        <!--body contant-->
          <div id="projet">
            <div class="row my-3">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3">
                        <h3 id="create-projet-btn"><span class="fa fa-pencil"> create</span></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3">
                        <h3 id="show-projet-btn"><span class="fa fa-table"> show</span></h3>
                    </div>
                </div>
            </div>
            <div id="show-projet">
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Chercher Un<strong>Projet</strong></span></h1>
                <hr>
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                                <input type="text"  class="form-control" id="staticEmail2" placeholder="Motif">
                            </div>
                            <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                                <select class="form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                            <button type="submit"style="margin-bottom: 10px;" class="btn btn-primary col-md-4 col-sm-12">Chercher</button>
                        </div>
                    </div>
                </form>
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Listes des <strong>Projets</strong></span></h1>
                <hr>
                <!--table-->
                <div class="row mx-3 table-responsive">
                    <table class="table table-striped shadow-sm">
                        <thead class="bg-indigo text-white">
                        <tr>
                            <td>nom Projet</td>
                            <td>client</td>
                            <td>image</td>
                            <td>Actions</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                            <tr>
                            <td>{{ $row->Nom_projet }}</td>
                            <td>{{$row->Nom_client}}</td>
                            <td>
                                <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($row->Projet_image1)) }}"  width="35px" height="35px">
                                <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($row->Projet_image2)) }}"  width="35px" height="35px">
                                <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($row->Projet_image3)) }}"  width="35px" height="35px">
                                <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($row->Projet_image4)) }}"  width="35px" height="35px">

                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--create projet-->
            <div id="create-projet">
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Create Un<strong>Projet</strong></span></h1>
                <hr>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <br />
                <form method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Nom Projet :</label>
                            <input type="text" class="form-control" name="Nom_projet" id="validationDefault01" value="chiminie" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Nom Client :</label>
                            <input type="text" class="form-control" name="Nom_client" id="validationDefault02" value="client" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">image 1</label>
                            <input type="file" class="form-control" name="Projet_image1" id="validationDefault03" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">image 2</label>
                            <input type="file" class="form-control" name="Projet_image2" id="validationDefault04" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">image 3</label>
                            <input type="file" class="form-control" name="Projet_image3" id="validationDefault05" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">image 4</label>
                            <input type="file" class="form-control" name="Projet_image4" id="validationDefault06" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">montant :</label>
                            <input type="number" class="form-control" name="montant" id="validationDefault02" value="client" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="container">
                        <button class="btn col-md-9 col-sm-12" id="send-btn" type="submit">envoyé</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="etat-financiere">
            <ul class="nav justify-content-center" >
                <li class="nav-item" id="despence-nav">
                    <a class="nav-link active">Despence</a>
                </li>
                <div class="vl"></div>
                <li class="nav-item" id="gain-nav">
                    <a class="nav-link">Gains</a>
                </li>
            </ul>
            <div id="despence">
                <div class="row my-3">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3" id="ajouter-despence-btn">
                            <h3><span class="fa fa-pencil"> Ajouter Une despence</span></h3>
                        </div>
                    </div>
                </div>
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Chercher Une <strong>despence</strong></span></h1>
                <hr>
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                                <input type="text"  class="form-control" id="staticEmail2" placeholder="Motif">
                            </div>
                            <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                                <select class="form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                            <button type="submit"style="margin-bottom: 10px;" class="btn btn-primary col-md-4 col-sm-12">Chercher</button>
                        </div>
                    </div>
                </form>
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Liste des <strong>Despences</strong></span></h1>
                <hr>
                <div class="row mx-3 table-responsive">
                    <table class="table table-striped shadow-sm">
                        <thead class="bg-indigo text-white">
                        <tr>
                            <td>Libelle</td>
                            <td>Montant</td>
                            <td>Date</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>280.00</td>
                            <td>18/05/2020</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>salim Doe</td>
                            <td>580.00</td>
                            <td>17/05/2020</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                                </div>
                            </td>
                        </tr>   <tr>
                            <td>salma Doe</td>
                            <td>380.00</td>
                            <td>12/05/2020</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <h2 style=" font-family: Times New Roman, Times, serif;"><strong>Total:</strong>  <span>1000.00</span></h2>
                </div>
            </div>
            <div id="ajouter-Despence">
                <div class="row my-3">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3" id="lister-despences-btn">
                            <h3><span class="fa fa-table"> Lister les <strong>despences</strong> </span></h3>
                        </div>
                    </div>
                </div>
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Ajouter Une <strong>Despence</strong></span></h1>
                <hr>
                <form>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">type</label>
                            <input type="text" readonly class="form-control" id="validationDefault01" value="despence" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Libelle</label>
                            <input type="text"  class="form-control" id="validationDefault02" placeholder="libelle" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Montant</label>
                            <input type="number" class="form-control" id="validationDefault02" placeholder="montant" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlTextarea1">Date</label>
                            <input type="date" class="form-control" id="validationDefault02" placeholder="date" required>
                        </div>
                    </div>
                    <div class="container">
                        <button id="send-btn" class="btn col-md-12 col-sm-12" type="submit" style="border-radius: 10px;">envoyé</button>
                    </div>
                </form>
            </div>
            <div id="gain">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3" id="ajouter-gain-btn">
                            <h3><span class="fa fa-pencil"> Ajouter Un gain</span></h3>
                        </div>
                    </div>
                </div>
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Chercher Un <strong>gain</strong></span></h1>
                <hr>
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                                <input type="text"  class="form-control" id="staticEmail2" placeholder="Motif">
                            </div>
                            <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                                <select class="form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                            <button type="submit"style="margin-bottom: 10px;" class="btn btn-primary col-md-4 col-sm-12">Chercher</button>
                        </div>
                    </div>
                </form>
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Listes des <strong>Gains</strong></span></h1>
                <hr>
                <div class="row mx-3 table-responsive">
                    <table class="table table-striped shadow-sm">
                        <thead class="bg-indigo text-white">
                        <tr>
                            <td>Libelle</td>
                            <td>Montant</td>
                            <td>Date</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>280.00</td>
                            <td>18/05/2020</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>salim Doe</td>
                            <td>580.00</td>
                            <td>17/05/2020</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                                </div>
                            </td>
                        </tr>   <tr>
                            <td>salma Doe</td>
                            <td>380.00</td>
                            <td>12/05/2020</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                                    <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <h2 style=" font-family: Times New Roman, Times, serif;"><strong>Total:</strong> <span>500.00</span></h2>
                </div>
            </div>
            <div id="ajouter-gain">
                <div class="row my-3">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3" id="lister-gain-btn">
                            <h3><span class="fa fa-table"> Lister les <strong>gains</strong> </span></h3>
                        </div>
                    </div>
                </div>
                <hr>
                <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Ajouter Un <strong>gain</strong></span></h1>
                <hr>
                <form>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">type</label>
                            <input type="text" readonly class="form-control" id="validationDefault01" value="gain" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Libelle</label>
                            <input type="text"  class="form-control" id="validationDefault02" placeholder="libelle" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Montant</label>
                            <input type="number" class="form-control" id="validationDefault02" placeholder="montant" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlTextarea1">Date</label>
                            <input type="date" class="form-control" id="validationDefault02" placeholder="date" required>
                        </div>
                    </div>
                    <div class="container">
                        <button id="send-btn" class="btn col-md-12 col-sm-12" type="submit" style="border-radius: 10px;">envoyé</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="messages">
            <hr>
            <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Listes des <strong>Messages</strong></span></h1>
            <hr>
            <div class="row mx-3 table-responsive">
                <table class="table table-striped shadow-sm">
                    <thead class="bg-indigo text-white">
                    <tr>
                        <td>client</td>
                        <td>Tel</td>
                        <td>description</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>0677567865</td>
                        <td>projet 1</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-send"></span></button>
                                <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>0677567865</td>
                        <td>projet 1</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-send"></span></button>
                                <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>0677567865</td>
                        <td>projet 1</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-send-o"></span></button>
                                <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                            </div>
                        </td>
                    </tr>                            </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script>
        $(document).ready(function(){
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

        })
    </script>
    <script src="{{asset("js/xychart.js")}}"></script>
    <script src="{{asset("js/pieChart.js")}}"></script>
</body>
</html>
