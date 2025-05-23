<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='{{asset("css/app.css")}}'>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('css/img/logoma.png')}}" type="image/x icon">
    <!--font-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
    <title>DemandeFiche</title>


</head>

<body class="principale">
    <div class="container">
        <div class="logo">
            <img src="{{asset('css/img/logo.png')}}" class="position-absolute top-0 start-50 translate-middle img-fluid" alt="logo">
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
            <div class=" col mt-5">
                <div class="card" style="width: 20rem;">
                    <img src="{{asset('css/img/admin3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Espace administrateur</h5>
                        <p class="card-text">Dans notre plate-forme,vous pauvez traiter les demandes de tous les étudiants.</p>
                        <div class="d-grid gap-2 col-12 mx-auto">

                            <a href="{{ route('login') }}" class="btn btn-color d-grid gap-2 btn-pos">Administrateur</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class=" col mt-5">
                <div class="card" style="width: 20rem;">
                    <img src="{{asset('css/img/etudiant2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Espace étudiant</h5>
                        <p class="card-text">Dans notre plate-forme,vous pauvez demander votre documents.</p>
                        <div class="d-grid gap-2 col-12 mx-auto etd">
                            <a href="{{ route('homes') }}" class="btn btn-color d-grid gap-2">Etudiant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <p class="copyright position-absolute top-100 start-50 translate-middle">
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> Direction Régionale | Chayma ELMAKKAOUI
          </p>
    </div>
    <script src=" {{asset('js/app.js')}}"></script>
    <script src=" {{asset('js/main.js')}}"></script>
</body>

</html>