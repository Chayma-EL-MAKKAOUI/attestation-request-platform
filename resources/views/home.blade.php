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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
      <li class="active"><a href="{{route('home')}}"><i class='bx bx-tachometer'></i> Acceuil</a></li>
      <li><a href="{{route('newattestation')}}"><i class='bx bxs-edit-alt' ></i> Attestation</a></li>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <li> <a class="navigation-link" href="{{ route('logout')}}" onclick="event.preventDefault();
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

    <div class="board">
      <table id="myTable" width="100%" class="table table-responsive">
        <thead>
          <tr class="table-success text-center">
            <td>Nom</td>
            <td>الاسم</td>
            <td>CIN</td>
            <td>Date d'envoi</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>
        </thead>
        <tbody>
          @if(isset($demande))
          @foreach($demande as $demandes)
          @if($demandes->statut == NULL)
            <tr class="tr-click" data-href="{{ route('demandes.edit', $demandes->id)}}" data-id="{{$demandes->id}}" id="msg" style="background:#ccc;font-weight:bold;border:1px solid #efefef;">
            @else
          <tr class="tr-click" data-href="{{ route('demandes.edit', $demandes->id)}}">
            @endif
            <td>{{$demandes->nom}}</td>
            <td>{{$demandes->nom_arab}}</td>
            <td>{{$demandes->CIN}}</td>
            <td>{{$demandes->dateact}}</td>
            <td class="text-center">
              <form action="{{ route('demandes.destroy', $demandes->id)}}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button class="btn-delet" type="submit"><i class='bx bxs-trash-alt' data-toggle="tooltip" title="Supprimer" style="font-size:25px ;color:#8B0000;"></i></button>
              </form>
            </td>
            <td>
            @if($demandes->checked == 1)
              <i class='bx bxs-check-circle' data-toggle="tooltip" title="Vérifiée" style="font-size:25px ;color:#019267;cursor:text;"></i>
              @endif
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
    </div>

  </section>
  <!--loading page-->

  <!--end loading-->
  @if(Session::get('deleted'))
  <script>
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
      },
      buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
      title: "<strong>demande supprimé</strong>",
      icon: 'success',
      confirmButton: 'btn btn-success',
      showConfirmButton: true,
    })
  </script>
  @endif
  <!--resposive menu-->
  <script>
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })
  </script>
  <!--table-->
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <!--link tr to edit-->
  <script>
    jQuery(document).ready(function($) {
      $('*[data-href]').on('click', function() {
        window.location = $(this).data("href");
      });
    });
  </script>
  <!--nouveau demande-->
<script>
 
</script>
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
</body>

</html>