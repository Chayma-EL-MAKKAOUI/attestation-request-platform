<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('css/img/logoma.png')}}" type="image/x icon">
  <title>DemandeFiche</title>

  <!--font-->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
  <!--style-->
  <link rel="stylesheet" href="{{asset('css/styleindex.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/styleedit.css')}}">
  <!--icon-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!--script for download-->
  <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

  <!--alert-->
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal@4/minimal.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <!-- Include a required theme -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
  <section id="menu">
    <div class="logo">
      <img src="{{ asset('css/img/logoma.png')}}" alt="logo">
      <h2>DemandeFiche</h2>
    </div>
    <div class="items">
      <li class="active"><a href="{{ route('home')}}"><i class='bx bx-tachometer'></i> Acceuil</a></li>
      <li><a href="{{ route('newattestation')}}"><i class='bx bxs-edit-alt'></i> Attestation</a></li>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <li><a href="{{ route('logout')}}"><i class='bx bx-log-out'></i> Deconnecter</a></li>
    </div>
  </section>

  <section id="interface">
    <div class="navigation">
      <div class="n1">
        <i id="menu-btn" class='bx bx-menu'></i>
      </div>
    </div>

    <!--edit demande-->

    <div class="card">
      <div class="row">

        <div class="col-md-12">
          <form method="post" action="{{ route('demandes.update', $demande->id) }}">
            @csrf
            @method('PATCH')
            <!-- Card header -->
            <hr class="hr-head">

            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="nom" class="form-label">Le nom complet en français <span>*</span></label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $demande->nom }}" />
                    <span style="color: red;">@error('nom'){{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3 text-end">
                    <label for="nom_arab" class="form-label-arab"><span>*</span> الإسم كامل بالعربية</label>
                    <input type="text" class="form-control arab" lang="ar" id="nom_arab" name="nom_arab" value="{{ $demande->nom_arab }}" />
                    <span style="color: red;">@error('nom_arab'){{ $message }} @enderror</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="date_naissnace" class="form-label">Date de naissance <span>*</span></label>
                    <input type="date" class="form-control" id="date_naissnace" name="date_naissnace" value="{{ $demande->date_naissnace}}" />
                    <span style="color: red;">@error('date_naissance'){{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3 text-end">
                    <label for="lieu_naissance" class="form-label-arab1" dir="rtl">مكان الازدياد<span>*</span></label>
                    <input type="text" class="form-control arab" lang="ar" id="lieu_naissance" name="lieu_naissance" value="{{ $demande->lieu_naissance}}" />
                    <span style="color: red;">@error('lieu_naissance'){{ $message }} @enderror</span>
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="sexe" class="form-label">Sexe <span>*</span></label>
                  <input type="text" class="form-control" id="sexe" name="sexe"  value="{{ $demande->sexe }}">
                  <span style="color: red;">@error('sexe'){{ $message }} @enderror</span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="CIN" class="form-label">CIN <span>*</span></label>
                    <input type="text" class="form-control" id="CIN" name="CIN" value="{{ $demande->CIN }}" />
                    <span style="color: red;">@error('CIN'){{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="code_massar" class="form-label">Code massar</label>
                    <input type="text" class="form-control" id="code_massar" name="code_massar" value="{{ $demande->code_massar }}" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label for="Nv_S" class="form-label">Niveau scolaire <span>*</span></label>
                  <input type="text" id="Nv_S" name="Nv_S" class="form-control" value="{{ $demande->Nv_S }}">
                  <span style="color: red;">@error('Nv_S'){{ $message }} @enderror</span>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="an_S" class="form-label">Année scolaire <span class=>*</span></label>
                    <input type="text" class="form-control" id="annee_scolaire" name="annee_scolaire" placeholder="Ex: 2021/2022" value="{{ $demande->annee_scolaire }}" />
                    <span style="color: red;">@error('annee_scolaire'){{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="etab" class="form-label">Etablissement <span>*</span></label>
                    <input type="text" class="form-control" id="etablissement" name="etablissement" value="{{ $demande->etablissement }}" />
                    <span style="color: red;">@error('etablissement'){{ $message }} @enderror</span>
                  </div>
                </div>

              </div>

              <!-- Card footer -->
              <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary"><i class='bx bx-printer'></i>Imprimer</button>

              </div>
          </form>
        </div>

      </div>
    </div>
    </div>
  </section>
  


  <script>
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })
  </script>
  <script type="text/javascript">
    function print(el) {
      const page = document.body.innerHTML;
      const content = document.getElementById(el).innerHTML;
      document.body.innerHTML = content;
      window.print();
      document.body.innerHTML = page;
    }
  </script>
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>