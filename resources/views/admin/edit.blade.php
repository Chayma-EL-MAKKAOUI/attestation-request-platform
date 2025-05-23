<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <!--icon-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!--datatable-->
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
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
      <li class="active"><a href="{{ route('users.index')}}"><i class='bx bx-tachometer'></i> Acceuil</a></li>
      <li><a href="{{ route('users.index')}}#myTable"><i class='bx bxs-edit-alt'></i> Utilisateur</a></li>
      <br><br><br><br><br><br><br><br><br><br><br>
      <li><a href="{{ route('users.edit', Auth::user()->id)}}"><i class='bx bxs-user'></i> Mon profile</a></li>
      <li><a href="{{ route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class='bx bx-log-out'></i> Deconnecter</a></li>
    </div>
  </section>
  <section id="interface">
  <div class="card">
  <div class="card-header bg-secondary">
   <h3 class="text-white"> Modifier</h3>
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <form method="post" action="{{ route('users.update', $user->id) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="text" class="form-control" name="password" value="{{ $user->password }}" />
      </div>
      <button type="submit" class="btn btn-block btn-success btn-edit">Enregistrer</button>
    </form>
  </div>
</div>
</section>
  <!--message success-->
  @if(Session::get('completed'))
  <script>
    const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success',
                },
                buttonsStyling: false
              })
              swalWithBootstrapButtons.fire({
                title: "<strong>Utilisateur modifié</strong>",
                icon: 'success',
                confirmButton: 'btn btn-success',
                showConfirmButton: true,
              })
  </script>
  @endif
  <script>
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })
  </script>

  <script src="{{ asset('js/app.js')}}"></script>
  <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
</body>

</html>