@extends('admin.template')
@section('title', 'etatFinanciere')
@section('content')
        <ul class="nav justify-content-center" >
            <li class="nav-item" id="despence-nav">
                <a class="nav-link active" href="{{url('etatFinanciere-Despence-Show')}}">Despence</a>
            </li>
            <div class="vl"></div>
            <li class="nav-item" id="gain-nav">
                <a class="nav-link" href="{{url('etatFinanciere-gain-Show')}}">Gains</a>
            </li>
        </ul>
        @yield('body')
        <!--content-->
@endsection
