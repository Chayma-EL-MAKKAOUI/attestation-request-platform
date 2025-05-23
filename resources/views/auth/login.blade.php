<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{asset("css/app.css")}}'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">
    <link rel="shortcut icon" href="{{asset('css/img/logoma.png')}}" type="image/x icon">
    <title>DemandeFiche</title>
</head>

<body>
    <img class="wave" src="{{asset('css/img/wave.png')}}">
    <div class="container">
        <div class="img">
            <img src="{{asset('css/img/bg.svg')}}">
        </div>
        <div class="login-content">
          
            <form method="POST" action="{{ route('login') }}">
            @csrf <!-- {{ csrf_field() }} -->
                <img src="{{asset('css/img/avatar.svg')}}">
                <h2 class="title">Bienvenue</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input id="email" type="email" name="email" class="input" required autofocus>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Mot de passe</h5>
                        <input id="password" type="password" name="password" required autocomplete="current-password" class="input">
                    </div>
                </div>
                <!-- Remember Me -->
               <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Rappeler moi') }}</span>
                    </label>
                </div>
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié') }}
                </a>
                @endif

                <button class="ml-3 btn">
                    {{ __('Log in') }}
                </button>
                
            
            </form>

        </div>
        <p class="position-absolute bottom-0 start-50 translate-middle-x"> Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> Direction Régionale | Chayma ELMAKKAOUI</p>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>