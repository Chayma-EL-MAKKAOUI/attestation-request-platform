<!DOCTYPE html>
<html>

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
  <style>
    body {
      padding: 200px 100px 0 100px;
    }

    hr.style13 {
      margin-top: -80px;
    }

    hr.hr2 {
      border-top: 4px double #000;
    }
  </style>
</head>

<body onLoad="afficheDate()">

  <!--Attestation-->

  <div>
    <div class="dialog">
      <div class="content" style="border: none;" id="attestation">
        <div>
          <h1 class="modal-title position-absolute top-0 start-50 translate-middle img-fluid mt-5"><img src="{{asset('css/img/logo.png')}}" alt="logo"></h1>
        </div>
        <div class="body">
          <hr class="style13">
          <div class="content">
            <h2 class="fw-bold position-absolute start-50 translate-middle mt-5" style="border-radius:3px ;">شهادة إعتراف بالنجاح</h2><br><br><br><br>
            <p class="fs-3" lang="ar" dir="rtl">
              <span style="padding-left:30px;"></span> يشهد السيد المدير الإقليمي بناء على الوثائق المتضمنة في أرشيف مصالح هذه المديرية أن السيد(ة) :

            </p> <br>
            <h3 class="fw-bold position-absolute start-50 translate-middle">{{ $demande->nom}} _ {{ $demande->nom_arab}}</h3><br><br>
            <p class="fs-3" lang="ar" dir="rtl">
              <span style="padding-left:30px;"></span>
              الحامل للبطاقة الوطنية رقم: {{ $demande->CIN}} والمزداد(ة) ب : {{ $demande->lieu_naissance}} بتاريخ {{ $demande->date_naissnace}} قد اجتاز(ت) بنجاح امتحان نيل شهادة {{ $demande->Nv_S }} كمترشح(ة) رسمي(ة) مسجل(ة) ب{{ $demande->etablissement }} تحت رمز مسار {{ $demande->code_massar }} خلال الموسم الدراسي {{ $demande->annee_scolaire }}
            </p>
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
      </div>
    </div>
  </div>
  <script language="JavaScript">
    function afficheDate() {
      mois = new Array("يناير", "فبراير", "مارس", "أبريل", "ماي", "يونيو", "يوليو", "أغسطس", "سبتمبر", "	أكتوبر", "نوفمبر", "ديسمبر");
      date = new Date();
      an = date.getFullYear();
      document.getElementById("texteDate").innerHTML = "<p lang='ar' dir='rtl'>" + "حرر ببني ملال في " + +date.getDate() + "      " + mois[date.getMonth()] + " " + an + "  " + "</p>";
      setTimeout("afficheDate()", 1000);
    }
  </script>
  <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>