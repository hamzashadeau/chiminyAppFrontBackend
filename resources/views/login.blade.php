<html>
<head>
    <title>login Page</title>
    <link rel="stylesheet" href="{{asset("style/login.css")}}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
<body>
<form action="{{ url('login_page') }}" method="post">
<div class="container">
    <div class="position">
            @csrf
            <h1 class="ml1" style="text-align: center; color: coral;">
                    <span class="text-wrapper">
                      <span class="line line1"></span>
                      <span class="letters">Login </span>
                      <span class="line line2"></span>
                    </span>
        </h1>
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
            <div class="form-group">
                <input type="text"  placeholder="login" name="email">
            @error('email')
            <div class="alert alert-danger my-2 text-center">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
            <input type="password"  data-type="password" name="password" placeholder="password">
                @error('password')
                <div class="alert alert-danger my-2 text-center">{{ $message }}</div>
                @enderror
            </div>
            <div class="group">
                <button type="submit" class="button"> Sign In</button>
            </div>
    </div>
</div>
</form>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml1 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
        .add({
            targets: '.ml1 .letter',
            scale: [0.3,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 600,
            delay: (el, i) => 70 * (i+1)
        }).add({
        targets: '.ml1 .line',
        scaleX: [0,1],
        opacity: [0.5,1],
        easing: "easeOutExpo",
        duration: 700,
        offset: '-=875',
        delay: (el, i, l) => 80 * (l - i)
    }).add({
        targets: '.ml1',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
</script>
</body>
</html>
