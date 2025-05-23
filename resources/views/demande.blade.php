<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>DemandeFiche</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!--icon-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <link rel="shortcut icon" href="{{asset('css/img/logoma.png')}}" type="image/x icon">
  <!--script for download-->
  <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
  <!--alert-->
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal@4/minimal.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <!-- Include a required theme -->
  <link rel="stylesheet" href="@sweetalert2/themes/minimal/minimal.css">
  <script src="sweetalert2/dist/sweetalert2.min.js"></script>


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }

      hr.new2 {
        margin-top: 120px;
        border-top: 1px dashed #000;
        width: 100%;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="{{asset('css/styledemande.css')}}" rel="stylesheet">
  <link href="{{asset('css/styleattestation.css')}}" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homes') }}">
          <img class="logo-sidebar" src="{{asset('css/img/logoma.png')}}" width="30px" height="30px" /> DemandeFiche</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="{{ route('homes') }}">
                <i class='bx bx-home-alt'></i> Accueil
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('homes') }}#att"><i class='bx bx-file'></i> Attestation</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('homes') }}#map"><i class='bx bx-map'></i> Notre place</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('homes') }}#foot"><i class='bx bx-phone'></i> Contactez nous</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <img src="{{asset('css/img/bureau.jpg')}}" alt="img">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <img src="{{asset('css/img/etudiant2.jpg')}}" alt="img">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <img src="{{asset('css/img/exam.jpg')}}" alt="img">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Présedent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
      </button>
    </div>
    <!--des information-->
    <div class="container mt-5">
      <div class="mb-4 text-white rounded bg-success">
        <div class="col-md-12">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h2><strong class="d-inline-block mb-2">Prenez votre documents plus vite</strong></h2>
              <p class="card-text mb-auto" style="font-size: larger;">Remplissez tous les champs qui sont obligatoires (<span>*</span>), sans fautes. </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="{{asset('css/img/cirt.png')}}" class="bd-placeholder-img" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" alt="img" preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--attestation-->
    <div class="container mt-5" id="att">
      <div class="card">
        <div class="row">

          <div class="col-md-6">
            <img class="position-relative top-50 start-0 translate-middle-y" src="{{asset('css/img/addinfo.svg')}}" alt="img" width="500px">
          </div>
          <div class="col-md-6">
            @if(Session::get('success'))
            <script>
              const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success',
                },
                buttonsStyling: false
              })
              swalWithBootstrapButtons.fire({
                title: "<strong>Votre demande est enregistrer</strong>",
                icon: 'success',
                text: "          Vous pouvez prendre votre attestation dans la direction.",
                confirmButton: 'btn btn-success',
                showConfirmButton: true,
                showCloseButton: true,
              })
            </script>
            @endif
            @if(Session::get('fail'))
            <script>
              const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-danger',
                },
                buttonsStyling: false
              })
              swalWithBootstrapButtons.fire({
                title: "<strong>Un erreur</strong>",
                icon: 'error',
                confirmButton: 'btn btn-danger',
                showConfirmButton: true,
                showCloseButton: true,
              })
            </script>-->
          </div>
          @endif
          <form action="{{ route('add.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Card header -->
            <hr class="hr-head">

            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="nom" class="form-label">Le nom complet en français <span>*</span></label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom')}}" />
                    <span style="color: red;">@error('nom'){{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3 text-end">
                    <label for="nom_arab" class="form-label-arab"><span>*</span> الإسم كامل بالعربية</label>
                    <input type="text" class="form-control arab" lang="ar" id="nom_arab" name="nom_arab" value="{{ old('nom_arab')}}" />
                    <span style="color: red;">@error('nom_arab'){{ $message }} @enderror</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="date_naissnace" class="form-label">Date de naissance <span>*</span></label>
                    <input type="date" class="form-control" id="date_naissnace" name="date_naissnace" value="{{ old('date_naissnace')}}" />
                    <span style="color: red;">@error('date_naissance'){{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3 text-end">
                    <label for="lieu_naissance" class="form-label-arab1" dir="rtl">مكان الازدياد<span>*</span></label>
                    <input type="text" class="form-control arab" lang="ar" id="lieu_naissance" name="lieu_naissance" value="{{ old('lieu_naissance')}}" />
                    <span style="color: red;">@error('lieu_naissance'){{ $message }} @enderror</span>
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="sexe" class="form-label">Sexe <span>*</span></label>
                  <select class="form-select mb-3" id="sexe" name="sexe" aria-label="Default select example" value="{{ old('sexe')}}">
                    <option selected value="Homme">homme</option>
                    <option value="femme">femme</option>
                  </select>
                  <span style="color: red;">@error('sexe'){{ $message }} @enderror</span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label for="CIN" class="form-label">CIN <span>*</span></label>
                    <input type="text" class="form-control" id="CIN" name="CIN" value="{{ old('CIN')}}" />
                    <span style="color: red;">@error('CIN'){{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <label for="code_massar" class="form-label">Code massar</label>
                    <input type="text" class="form-control" id="code_massar" name="code_massar" value="{{ old('code_massar')}}" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label for="Nv_S" class="form-label">Niveau scolaire <span>*</span></label>
                  <select id="Nv_S" name="Nv_S" class="form-select mb-3" value="{{ old('Nv_S')}}">
                    <option value="">choisir votre niveau</option>
                    <option value="السلك الإبتدائي">السلك الإبتدائي</option>
                    <option value="السلك الإعدادي">السلك الإعدادي</option>
                  </select>
                  <span style="color: red;">@error('Nv_S'){{ $message }} @enderror</span>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="an_S" class="form-label">Année scolaire <span>*</span></label>
                    <input type="text" class="form-control" id="annee_scolaire" name="annee_scolaire" placeholder="Ex: 2021/2022" value="{{ old('annee_scolaire')}}" />
                    <span style="color: red;">@error('annee_scolaire'){{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="etab" class="form-label">Etablissement <span>*</span></label>
                    <input type="text" class="form-control" id="etablissement" name="etablissement" value="{{ old('etablissement')}}" />
                    <span style="color: red;">@error('etablissement'){{ $message }} @enderror</span>
                  </div>
                </div>

              </div>

              <!-- Card footer -->
              <div class="card-footer text-end">
                <input type="reset" class="btn btn-secondary" value="Annuler">
                <button type="submit" class="btn btn-success">Envoyer</button>

              </div>
          </form>
        </div>

      </div>
    </div>
    </div>
    <!--Map-->
    <hr class="hr-head1">
    <div class="row" id="map">
      <div class="col-md-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3371.30783630903!2d-6.359701450404201!3d32.33044448101643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda387611fdcef15%3A0x47d8dce0b76df5!2sDirection%20R%C3%A9gionale%20du%20Minist%C3%A8re%20de%20la%20Jeunesse%20et%20des%20Sports!5e0!3m2!1sfr!2sma!4v1653485474351!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </main>
  <hr>
  <!--Reçu-->

  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="border: none;" id="recu">
        <div class="modal-header">
          <h5 class="modal-title"><img src="{{asset('css/img/logo.png')}}" alt="logo" style="margin-left: 100px;"></h5>
        </div>
        <div class="modal-body">
          <hr class="style13">
          <div class="content">
            <h2 class="fw-bold position-absolute start-50 translate-middle mt-5" style="border-radius:3px ;"></h2><br><br><br><br>

            <h3 class="fw-bold position-absolute start-50 translate-middle"></h3><br><br>


            <h4 id="texteDate" style="margin-right:200px;"></h4>
          </div>
        </div><br>
        <div class="footer" style="margin-top:290px;">
          <h4 class="fw-bold position-absolute start-50 translate-middle ">المركز الإقليمي للإمتحانات</h4><br>
          <hr class="hr2">
          <p class="fs-6" lang="ar" dir="rtl">
            المديرية الإقليمية بني ملال شارع عبد الكريم الخطابي الهاتف :11/ 0523482310 الفاكس:0523421795
          </p>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <footer class="bg-white text-dark" id="foot">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <h2 class="footer-heading logo">DemandeFiche</h2>
          <p class="menu">
            <a href="{{ route('homes') }}">Accueil</a>
            <a href="{{ route('homes') }}#att">Attestation</a>
            <a href="{{ route('homes') }}#map">Notre place</a>
            <a href="{{ route('homes') }}#foot">Contactez nous</a>
          </p>
          <h4><i class="bx bxs-phone"></i>0523482310/11</h4><br>
          <h4><i class="bx bx-envelope"></i>aaaa@gmail.com</h4>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12 text-center">
          <p class="copyright">
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> Direction Régionale | Chayma ELMAKKAOUI
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{asset('js/app.js')}}"></script>
 
</body>

</html>