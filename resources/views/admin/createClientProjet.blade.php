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
    <form method="post" action="{{ url('admin/saveClientProjet') }}"  enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Nom client :</label>
                <input type="text" class="form-control" name="Nom_client" id="validationDefault01"  required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">prenom client :</label>
                <input type="text" class="form-control" name="prenom_client" id="validationDefault01"  required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">tel </label>
                <input type="text" class="form-control" name="tel" id="validationDefault03" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">montant</label>
                <input type="number" class="form-control" name="montant" id="validationDefault04" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">date</label>
                <input type="date" class="form-control" name="date" id="validationDefault05" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">image 4</label>
                <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                    <select class="form-control" name="projet_id">
                        <option>selectioner le projet</option>
                        @foreach($data as $row)
                        <option value="{{$row->id}}">{{$row->Nom_projet}}</option>
                            @endforeach
                    </select>            </div>
        </div>
        <div class="container">
            <button class="btn col-md-9 col-sm-12" id="send-btn" type="submit">envoyé</button>
        </div>
        </div>
    </form>
@endsection
