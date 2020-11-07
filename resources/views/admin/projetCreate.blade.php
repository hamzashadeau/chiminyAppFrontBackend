@extends('admin.projet')
@section('content')
    <div class="row my-3">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3">
                <a href="{{url('projet-create')}}">   <h3 id="create-projet-btn"><span class="fa fa-pencil"> create</span></h3></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3">
                <a href="{{url('projet-show')}}">    <h3 id="show-projet-btn"><span class="fa fa-table"> show</span></h3></a>
            </div>
        </div>
    </div>
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
    <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Nom Projet :</label>
                <input type="text" class="form-control" name="Nom_projet" id="validationDefault01" value="chiminie" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">description :</label>
                <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
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
        <div class="container">
            <button class="btn col-md-9 col-sm-12" id="send-btn" type="submit">envoyé</button>
        </div>
    </form>
@endsection
