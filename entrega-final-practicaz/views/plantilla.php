<?php 

$estudiantes = ctrEstudiantes::ctrMostrarEstudiantes();
$materias = ctrMaterias::ctrMostrarMaterias();
$notas = ctrNotas::ctrMostrarNotas();
$notaz = ctrMateriaEstudiante::MateriaEstudianteControlador();

?>
<!DOCTYPE html>



<!-- Favicons -->
<link href="views/img/faviconlogo.png" rel="icon">
<link href="views/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="views/recursos/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="views/recursos/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="views/recursos/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="views/recursos/assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="views/recursos/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="views/recursos/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="views/recursos/assets/vendor/simple-datatables/style.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<!-- Template Main CSS File -->
<link href="views/recursos/assets/css/style.css" rel="stylesheet">


<script src="views/recursos/assets/js/sweetalert2.all.js"></script>

<!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php include "modulos/header.php"; ?>

  <?php include "modulos/menu.php"; ?>


  <main id="main" class="main">

    <div class="pagetitle">
      <?php
      if (isset($_GET["pagina"])) {
        if (
          $_GET["pagina"] == "estudiantes" ||
          $_GET["pagina"] == "asignaturas" ||
          $_GET["pagina"] == "notas" ||
          $_GET["pagina"] == "materias-estudiantes" 


        ) {

          include "paginas/" . $_GET["pagina"] . ".php";
        }
      }  ?>
    </div><!-- End Page Title -->



  </main><!-- End #main -->

  <?php include "modulos/footer.php"; ?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files -->
  <script src="views/recursos/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="views/recursos/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="views/recursos/assets/vendor/chart.js/chart.umd.js"></script>
 
  <script src="views/recursos/assets/vendor/quill/quill.min.js"></script>
  <script src="views/recursos/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="views/recursos/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="views/recursos/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="views/recursos/assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
    $('#tablaregistrarestudiantes').DataTable();
});
  </script>

<script>
    $(document).ready(function () {
    $('#tablaregistrarmaterias').DataTable();
});
  </script>
  

  <script>
    $(document).ready(function () {
    $('#tablanotaporestudiante').DataTable();
});
  </script>

<script>
    $(document).ready(function () {
    $('#tablamaterias-estudiantes').DataTable();
});
  </script>




<script src="views/recursos/assets/js/estudiantes.js"></script>
<script src="views/recursos/assets/js/materias.js"></script>


</body>

</html>