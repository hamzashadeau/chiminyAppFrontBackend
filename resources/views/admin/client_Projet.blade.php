@extends('admin.template')
@section('content')
    <div class="row my-3">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3">
                <a href="{{url('admin/showcreateClientProjet')}}">   <h3 id="create-projet-btn"><span class="fa fa-pencil"> create</span></h3></a>
            </div>
        </div>
    </div>        <hr>
    <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Chercher Un<strong>Projet</strong></span></h1>
    <hr>
    <form action="{{ url('chercher') }}" method="GET">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                    <input type="date"  name="motif" class="form-control" id="date" placeholder="Motif">
                    <input type="text"  name="motif" class="form-control" id="text" placeholder="Motif">
                </div>

                <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                    <select class="form-control" name="Cherche" id="mySelect" onchange="changer()">
                        <option>Chercher Par</option>
                        <option value="client">Nom/prenom client</option>
                        <option value="date">date</option>
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
                <td>nom client</td>
                <td>prenom client</td>
                <td>tel</td>
                <td>montant</td>
                <td>date</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->Nom_client }}</td>
                    <td>{{ $row->prenom_client }}</td>
                    <td>{{ $row->tel }}</td>
                    <td>{{ $row->montant }}</td>
                    <td>{{ $row->date }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{url('admin/imprimer/'.$row->id)}}"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-save"></span></button></a>
                            <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white d-flex justify-content-center">
            <div class="pagination_rounded">
                <ul>
                    @if ($data->onFirstPage())
                    @else
                        <li> <a href="{{ $data->previousPageUrl() }}" class="prev text-left"> <i class="fa fa-angle-left" aria-hidden="true"></i> السابق </a> </li>
                    @endif
                    @if($data->lastPage()<=6)
                        @for($i = 1;$i<=$data->lastPage();$i++)
                            @if($i == $data->currentPage())
                                <li class="hidden-xs"><a href="{{ url('admin/projet_table?page='.$i) }}" class="active text-white">{{ $i }}</a> </li>
                            @else
                                <li class="hidden-xs"><a href="{{ url('admin/projet_table?page='.$i) }}">{{ $i }}</a> </li>
                            @endif
                        @endfor
                    @else
                        @for($i = 1;$i<=$data->lastPage();$i++)
                            @if($i == $data->currentPage())
                                <li><a href="{{ url('admin/projet_table?page='.$i) }}" class="active text-white">{{ $i }}</a> </li>
                            @else
                                <li class="hidden-xs"><a href="{{ secure_url('admin/projet_table?page='.$i) }}">{{ $i }}</a> </li>
                            @endif
                        @endfor
                        @if($data->lastPage()-1>7)
                            <li><a>...</a> </li>
                        @endif
                        @if($data->lastPage() == $data->currentPage())
                            <li><a href="{{ url('admin/projet_table?page='.$data->lastPage()) }}" class="active text-white">{{ $data->lastPage() }}</a> </li>
                        @else
                            <li><a href="{{ url('admin/projet_table?page='.$data->lastPage()) }}">{{ $data->lastPage() }}</a> </li>
                        @endif
                    @endif
                    @if ($data->hasMorePages())
                        <li><a href="{{ $data->nextPageUrl() }}" class="next text-right"> التالي <i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
                    @else
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <script>
        function changer() {
            var x = document.getElementById("mySelect").value;
            if(x=='date'){
                document.getElementById('text').style.display = 'none';
                document.getElementById('date').style.display = 'inline';
            }
            if(x=='client'){
                document.getElementById('date').style.display = 'none';
                document.getElementById('text').style.display = 'inline';
            }
        }
    </script>
@endsection
