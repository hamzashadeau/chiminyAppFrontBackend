@extends('admin.etatFinanciere')
@section('body')
            <div class="row my-3">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3" id="ajouter-despence-btn" >
<a href="{{url('etatFinanciere-despence-create')}}">   <h3><span class="fa fa-pencil"> Ajouter Une despence</span></h3></a>
                    </div>
                </div>
            </div>
            <hr>
            <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Chercher Une <strong>despence</strong></span></h1>
            <hr>
            <form action="{{ url('chercherParMois') }}" method="GET">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                            <input type="date" name="start_date" placeholder="start date" style="border: none;border-bottom: 3px solid chocolate; width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
                            <input type="date" name="end_date" placeholder="end date" style="border: none;border-bottom: 3px solid chocolate; width: 100%">
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
                    <p style="display: none">   {{$som=0,0}}}</p>
                    @foreach($data as $row)
                        @if($row->type == 'despence')
                     <p style="display: none">  {{$som += $row->montant}}</p>
                    <tr>
                        <td>{{$row->libelle}}</td>
                        <td>{{$row->montant}}</td>
                        <td>{{$row->date}}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                                <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                            </div>
                        </td>
                    </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <h2 style=" font-family: Times New Roman, Times, serif;"><strong>Total:</strong>  <span>{{$som}}</span></h2>
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
                                        <li class="hidden-xs"><a href="{{ url('admin/despence_table?page='.$i) }}" class="active text-white">{{ $i }}</a> </li>
                                    @else
                                        <li class="hidden-xs"><a href="{{ url('admin/despence_table?page='.$i) }}">{{ $i }}</a> </li>
                                    @endif
                                @endfor
                            @else
                                @for($i = 1;$i<=$data->lastPage();$i++)
                                    @if($i == $data->currentPage())
                                        <li><a href="{{ url('admin/despence_table?page='.$i) }}" class="active text-white">{{ $i }}</a> </li>
                                    @else
                                        <li class="hidden-xs"><a href="{{ secure_url('admin/despence_table?page='.$i) }}">{{ $i }}</a> </li>
                                    @endif
                                @endfor
                                @if($data->lastPage()-1>7)
                                    <li><a>...</a> </li>
                                @endif
                                @if($data->lastPage() == $data->currentPage())
                                    <li><a href="{{ url('admin/despence_table?page='.$data->lastPage()) }}" class="active text-white">{{ $data->lastPage() }}</a> </li>
                                @else
                                    <li><a href="{{ url('admin/despence_table?page='.$data->lastPage()) }}">{{ $data->lastPage() }}</a> </li>
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
@endsection

