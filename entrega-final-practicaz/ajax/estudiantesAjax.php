<?php 
require_once "../controllers/estudianteControlador.php";
require_once "../models/estudianteModel.php";



class AjaxEstudiante{

	/* Editar */	
	public $idEstudiante;
	public function ajaxEditarEstudiante(){
		$item = "id";
		$valor = $this->idEstudiante;
		$respuesta = ctrEstudiantes::ctrMostrarEstudiantes($item, $valor);
		echo json_encode($respuesta);
	}}

	
	





/* Editar */	

if(isset($_POST["idestudiante"])){

	$estudiante = new AjaxEstudiante();
	$estudiante -> idEstudiante = $_POST["idestudiante"];
	$estudiante -> ajaxEditarEstudiante();
}

?>

