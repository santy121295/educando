<?php
	class Incidencia{
		private $idIncidencia;
		private $alumno;
		private $observacion;
		private $fecha;

		public function __construct() {

		}	

		public function __get($name) {
        	return $this->$name;
    	}

		
		public function __set($name, $value) {
        	$this->$name = $value;
    	}
	}
?>