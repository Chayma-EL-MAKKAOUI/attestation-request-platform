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
  <link rel="stylesheet" href="{{asset('css/styledashboard.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!--icon-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!--alert-->
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal@4/minimal.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <!-- Include a required theme -->
  <link rel="stylesheet" href="@sweetalert2/themes/minimal/minimal.css">
  <script src="sweetalert2/dist/sweetalert2.min.js"></script>

</head>

<body>
  <div class="menu-btn">
    <div class="tools" data-bs-toggle="tooltip" data-bs-placement="right" title="Menu">
      <box-icon name='menu'></box-icon>
    </div>
    <div class="tools" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
    <box-icon name='tachometer'></box-icon>
      <div class="tools" data-bs-toggle="tooltip" data-bs-placement="right" title="Utilisateur">
      <box-icon name='edit-alt'></box-icon>
      </div><br>
      <div class="user">
        <div class="tools" data-bs-toggle="tooltip" data-bs-placement="right" title="Mon compte">
          <box-icon name='user'></box-icon>
        </div>
        <div class="tools" data-bs-toggle="tooltip" data-bs-placement="right" title="Deconnecter">
          <box-icon name='log-out'></box-icon>
        </div>
      </div>
    </div>

  </div>
  <div class="page">
    <div class="sidebar">
      <div class="close-btn">
        <box-icon name='x'></box-icon>
      </div>
      <div class="sidebar-header">
        <div class="sidebar-logo-container">
          <div class="logo-container">
            <img class="logo-sidebar" src="{{asset('css/img/logoma.png')}}" />
          </div>
          <div class="brand-name-container">
            <p class="brand-name">
              Demande<br />
              <span class="brand-subname">
                Fiche
              </span>
            </p>
          </div>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="navigation-list">
          <li class="navigation-list-item active">
            <a href="#" onclick="demande()" class="navigation-link">
              <div class="row">
                <div class="col-2">
                  <box-icon name='tachometer'></box-icon>
                </div>
                <div class="col-10">
                  Home
                </div>
              </div>
            </a>
          </li>
          <li class="navigation-list-item">
            <a href="#" class="navigation-link sub-btn" data-bs-toggle="dropdown" aria-expanded="false">
              <div class=" row">
                <div class="col-2">
                <box-icon name='edit-alt'></box-icon>
                </div>
                <div class="col-8">
                  Utilisateur
                </div>
                <div class="col-2 dropdown">
                  <box-icon name='chevron-right'></box-icon>
                </div>

              </div>
            </a>
          </li>
          <hr style="color:#fff">
          <li class="navigation-list-item prof">
            <a href="#" class="navigation-link">
              <div class="row">
                <div class="col-2">
                  <box-icon name='user'></box-icon>
                </div>
                <div class="col-10">
                   Mon profile
                </div>
              </div>
            </a>
          </li>
          <li class="navigation-list-item ">

            <a class="navigation-link" href="{{ route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

              <div class="row">
                <div class="col-2">
                  <box-icon name='log-out'></box-icon>
                </div>
                <div class="col-10">
                  Deconnecter
                </div>
              </div>
            </a>
            <form id="logout-form" action="{{ route('logout')}}" method="post" style="display: none;">
              @csrf
            </form>

          </li>
        </ul>
      </div>
    </div>

    <div class="content">
      <div class="navigationBar">

        <form class="d-flex position-absolute top-0 end-0 serch">
          <input class="form-control me-2" type="search" placeholder="Chercher..." aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Chercher</button>
        </form>
      </div>
    @yield('content')
    <a href="#" class="foot position-absolute top-100 start-50 translate-middle">Direction&copy;2022</a>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.sub-btn').click(function() {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });
      $('.menu-btn').click(function() {
        $('.sidebar').addClass('active');
      });
      $('.close-btn').click(function() {
        $('.sidebar').removeClass('active');
        $('.menu-btn').css("visibility", "visible")
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function() {
        if (this.checked) {
          checkbox.each(function() {
            this.checked = true;
          });
        } else {
          checkbox.each(function() {
            this.checked = false;
          });
        }
      });
      checkbox.click(function() {
        if (!this.checked) {
          $("#selectAll").prop("checked", false);
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {

    })
  </script>
  <script src="{{asset('js/app.js')}}"></script>
</body>


</html>