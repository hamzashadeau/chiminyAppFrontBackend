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
    <div class="container">
        <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data" class="card border-0 shadow-sm p-4">
            @csrf
                <div class="form-group">
                    <label for="validationDefault01">Nom Projet :</label>
                    <input type="text" class="form-control" name="Nom_projet" id="validationDefault01" value="chiminie" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">description :</label>
                    <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            <div class="form-group">
                <label for="att">Attachements</label>
                <input type="file" multiple="true" name="attachements[]" class="form-control" id="att" onchange="preview_images();">
            </div>
            <div class="row" id="image_preview"></div>
                <button class="btn btn-block " id="send-btn" type="submit">envoyé</button>
        </form>
    </div>

@endsection
