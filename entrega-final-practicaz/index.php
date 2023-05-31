<?php

//require_once "Controllers/nombrecontolador.php";
require_once "controllers/plantillaControlador.php";
require_once "controllers/estudianteControlador.php";
require_once "controllers/materiaControlador.php";
require_once "controllers/notaControlador.php";
require_once "controllers/materiaEstudianteControlador.php";








//require_once "modelos/nombremodelo.php";



require_once "models/estudianteModel.php";
require_once "models/materiaModel.php";
require_once "models/notaModel.php";
require_once "models/materiaEstudianteModel.php";




 






$plantilla = new ctrPlantilla();
$plantilla->ctrMostrarPlantilla();

//$registrar_estudiante = new EstudianteControlador();
//$registrar_estudiante->MostrarEstudiante();