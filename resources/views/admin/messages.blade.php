@extends('admin.template')
@section('title', 'messages')
@section('content')
    <hr>
    <h1 style="width: 100%;text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;"><span style=" background:#fff; padding:0 10px;">Listes des <strong>Messages</strong></span></h1>
    <hr>
    <div class="row mx-3 table-responsive">
        <table class="table table-striped shadow-sm">
            <thead class="bg-indigo text-white">
            <tr>
                <td>client</td>
                <td>Tel</td>
                <td>gmail</td>
                <td>sujet</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$row -> nom}}</td>
                <td>{{$row -> tel}}</td>
                <td>{{$row -> gmail}}</td>
                <td>{{$row -> sujet}}</td>
                <td>
                    <div class="btn-group">
                      <a href="{{ url("contact/respond/".$row->id) }}"> <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-send"></span></button></a>
                        <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white d-flex justify-content-center">

            <div class="pagination_rounded">
                <ul style="display: flex;list-style: none">
                    @if ($data->onFirstPage())
                    @else
                        <li> <a href="{{ $data->previousPageUrl() }}" class="prev text-left"> <i class="fa fa-angle-left" aria-hidden="true"></i> السابق </a> </li>
                    @endif
                    @if($data->lastPage()<=6)
                        @for($i = 1;$i<=$data->lastPage();$i++)
                            @if($i == $data->currentPage())
                                    <p>  --  </p>
                                <li class="hidden-xs" style="list-style: none"><a href="{{ url('admin/message_table?page='.$i) }}" class="active text-white">{{ $i }}</a> </li>
                            @else
                                    <p>  --  </p>
                                    <li class="hidden-xs" style="list-style: none"><a href="{{ url('admin/message_table?page='.$i) }}">{{ $i }}</a> </li>
                            @endif
                        @endfor
                    @else
                        @for($i = 1;$i<=$data->lastPage();$i++)
                            @if($i == $data->currentPage())
                                    <p>  --  </p>
                                    <li style="list-style: none"><a href="{{ url('admin/message_table?page='.$i) }}" class="active text-white">{{ $i }}</a> </li>
                            @else
                                    <p>  --  </p>
                                    <li class="hidden-xs" style="list-style: none"><a href="{{ secure_url('admin/message_table?page='.$i) }}">{{ $i }}</a> </li>
                            @endif
                        @endfor
                        @if($data->lastPage()-1>7)
                            <li style="list-style: none"><a>...</a> </li>
                        @endif
                        @if($data->lastPage() == $data->currentPage())
                                <p>  --  </p>
                                <li style="list-style: none"><a href="{{ url('admin/message_table?page='.$data->lastPage()) }}" class="active text-white">{{ $data->lastPage() }}</a> </li>
                        @else
                                <p>  --  </p>
                                <li style="list-style: none"><a href="{{ url('admin/message_table?page='.$data->lastPage()) }}">{{ $data->lastPage() }}</a> </li>
                        @endif
                    @endif
                    @if ($data->hasMorePages())
                            <p>  --  </p>
                            <li style="list-style: none"><a href="{{ $data->nextPageUrl() }}" class="next text-right">  التالي  <i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
                    @else
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
