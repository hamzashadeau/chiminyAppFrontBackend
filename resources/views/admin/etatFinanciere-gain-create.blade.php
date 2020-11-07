@extends('admin.etatFinanciere')
@section('body')
    <div class="row my-3">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3" id="lister-gain-btn">
            <a href="etatFinanciere-gain-Show"> <h3><span class="fa fa-table"> Lister les <strong>gains</strong> </span></h3></a>
            </div>
        </div>
    </div>
    <hr>
    <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Ajouter Un <strong>gain</strong></span></h1>
    <hr>
    @if($errors->any())
        <div class="alert alert-danger">
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
        <form method="post" action="{{ url('store_etat') }}">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">type</label>
                    <input type="text" readonly class="form-control" name="type" id="validationDefault01" value="gain" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Libelle</label>
                    <input type="text"  class="form-control" name="libelle" id="validationDefault02" placeholder="libelle" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Montant</label>
                    <input type="number" class="form-control" name="montant" id="validationDefault02" placeholder="montant" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1">Date</label>
                    <input type="date" class="form-control" name="date" id="validationDefault02" placeholder="date" required>
                </div>
            </div>
        <div class="container">
            <button id="send-btn" class="btn col-md-12 col-sm-12" type="submit" style="border-radius: 10px;">envoyé</button>
        </div>
    </form>
</div>
@endsection
