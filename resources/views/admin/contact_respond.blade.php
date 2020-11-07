@extends("admin.template")
@section("content")
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
    <h1 class="text-center mt-2 "> message: {{ $contact->nom }}  </h1>
<div class="card mx-5 my-3 p-4 text-right">
    <div class="card-header text-center bg-indigo text-white">
        <h2>à: {{ $contact->gmail }} </h2>
    </div>
    <div class="card-body">
        <div class="card border-0 shadow ">
            <div class="card-header bg-light"><h3> sujet:  </h3></div>
            <div class="card-body">
                <p>{{ $contact->sujet }}</p>
            </div>
        </div>
        <div class="card border-0 shadow my-2 p-4">
            <form action="{{ url("send") }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $contact->gmail }}" name="email">
                <label for="resp">repense</label>
                <textarea name="content" id="resp"  cols="30" rows="4" class="form-control text-right @error('content') is-invalid @enderror"></textarea>
                    @error('content')
                    <div class="alert alert-danger text-right">{{ $message }}</div>
                @enderror
                <button class="btn btn-success shadow my-1"> envoyé <span class="fa fa-send"></span></button>
            </form>
        </div>
    </div>
</div>
@endsection
