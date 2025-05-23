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
      <br><br><br><br><br><br><br><br><br><br>
      <li><a href="{{ route('users.edit', Auth::user()->id)}}"><i class='bx bxs-user'></i> Mon profile</a></li>
      <li><a class="navigation-link" href="{{ route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">


<i class='bx bx-log-out'></i> Deconnecter

        </a>
        <form id="logout-form" action="{{ route('logout')}}" method="post" style="display: none;">
          @csrf
        </form>
      </li>
    </div>
  </section>
  <section id="interface">
    <div class="navigation">
      <div class="n1">
        <i id="menu-btn" class='bx bx-menu'></i>
      </div>
    </div>
    <h3 class="i-name">Acceuil</h3>
    <div class="values">
      <div class="val-box">
        <i class='bx bxs-user'></i>
        <div>
          <h3>{{ $nbr_user }}</h3>
          <span>Total d'utilisateur</span>
        </div>
      </div>
      <div class="val-box">
        <i class='bx bx-file'></i>
        <div>
          <h3>{{ $nbr_demande }}</h3>
          <span>Total des demandes</span>
        </div>
      </div>
      <div class="val-box">
        <i class='bx bxs-check-circle'></i>
        <div>
          <h3>{{ $nbr_demande_ver }}</h3>
          <span>Total des demandes Vérifiée</span>
        </div>
      </div>
    </div>
    <div class="board">
      <table id="myTable" width="100%" class="table table-responsive table-borderless table-hover table-striped">
        <button class="btn btn-success btn-add" data-bs-toggle="modal" data-bs-target="#modeladd"><i class='bx bx-user-plus'></i>Ajouter</button><br><br>
        <thead class="table-success">
          <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Email</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>

          @if(isset($user))
          @foreach($user as $users)
          @if($users->is_admin == NULL)
          <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td class="text-center">
              <a href="{{ route('users.edit',$users->id)}}"><i class='bx bxs-edit-alt' data-toggle="tooltip" title="Modifier" style="font-size:25px ;color:#E49B0F"></i></a>
              <form action="{{ route('users.destroy', $users->id)}}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit"><i class='bx bxs-trash-alt' data-toggle="tooltip" title="Supprimer" style="font-size:25px ;color:#8B0000;"></i></button>
              </form>
            </td>
          </tr>
          @endif
          @endforeach
          @endif

        </tbody>
      </table>
    </div>

  </section>
  @if(Session::get('success'))
  <script>
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
      },
      buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
      title: "<strong>Utilisateur enregesté</strong>",
      icon: 'success',
      confirmButton: 'btn btn-success',
      showConfirmButton: true,
    })
  </script>
  @endif
  @if(Session::get('deleted'))
  <script>
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
      },
      buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
      title: "<strong>Utilisateur supprimé</strong>",
      icon: 'success',
      confirmButton: 'btn btn-success',
      showConfirmButton: true,
    })
  </script>
  @endif
  <!-- Modal ajouter -->
  <div class="modal fade" id="modeladd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Ajouter un utilisateur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('users.store') }}">
          <div class="modal-body">
            <div class="form-group">
              @csrf

              <label for="name">Nom</label>
              <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="text" class="form-control" name="password" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-block btn-success">Enregistrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end Modal -->


  <!-- Modal modification -->
  <div class="modal fade" id="modeledit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Ajouter un utilisateur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('users.store') }}">
          <div class="modal-body">
            <div class="form-group">
              @csrf

              <label for="name">Nom</label>
              <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="text" class="form-control" name="password" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-block btn-success">Enregistrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end Modal -->
  <script>
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })
  </script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
</body>

</html>