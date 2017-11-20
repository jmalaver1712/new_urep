<?php 

class datos_bd extends Conexion{

	public function __construct(){
		parent::__construct();
	}

	public function all_regs($table, $orden){
		$data = array();
		$result = $this->_db->query("SELECT * FROM $table WHERE visible = 1 ORDER BY orden DESC, $orden DESC");
		if (!$result) {
			printf("Errormessage Todos los ".$table.": %s\n\n", $this->_db->error);
		}else{
			$regs = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($regs as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}


	public function all_programas(){
		$data = array();
		
		$result = $this->_db->query("
			SELECT
			a.id_men_consecutivo snies,
			a.descripcion        nombre_programa,
			a.titulo             titulo_otorgado,
			b.descripcion        facultad,
			c.descripcion        nivel_academico,
			d.descripcion        modalidad,
			e.descripcion        metodologia,
			a.perfil_profesional,
			a.perfil_ocupacional,
			a.franja,
			a.id_mercadeo,
			a.video_promo,
			a.resolucion,
			f.id_pensum,
			f.periodos 			semestres,
			a.visible, 
			a.orden
			FROM urep_programa                a,
			urep_facultad                b,
			urep_nivel_programa          c,
			urep_modalidad_programa      d,
			urep_metodologia_programa    e,
			urep_pensum                  f
			WHERE a.id_facultad = b.id_facultad
			AND a.id_nivel = c.id_nivel_programa
			AND a.id_modalidad = d.id_modalidad_programa
			AND a.id_metodologia = e.id_metodologia_programa
			AND a.id_programa = f.id_programa
			AND f.id_pensum IN (13,14,15,16,17,18,32,33,34,35,36,37,38,39,40)
			AND a.id_estado = 1
		");

		if (!$result) {
			printf("Errormessage Todos los Programas: %s\n", $this->_db->error);
		}else{
			$regs = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($regs as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}


	public function all_programas_cursos(){
		$data = array();
		
		$result = $this->_db->query("
			SELECT Y.id_pensum,
			SUBSTRING(Y.descripcion, 1, Y.pos) AS materia_nombre,
			Y.nivel semestre,
			Y.creditos,
			Y.intensidad_horaria
			FROM (SELECT Z.id_pensum,
			Z.id_materia,
			Z.descripcion,
			Z.nivel,
			Z.creditos,
			Z.intensidad_horaria,
			CASE WHEN n_pos > 0 THEN n_pos - 1 ELSE all_pos END   AS pos
			FROM (SELECT b.id_pensum,
			a.id_materia,
			a.descripcion,
			b.nivel,
			b.creditos,
			b.intensidad_horaria,
			LOCATE(':', a.descripcion)     AS n_pos,
			CHAR_LENGTH(a.descripcion)     AS all_pos
			FROM urep_materia        a
			INNER JOIN urep_materia_pensum b
			ON a.id_materia = b.id_materia
			WHERE b.id_pensum IN (13,14,15,16,17,18,32,33,34,35,36,37,38,39,40) ) AS Z) AS Y
			GROUP BY Y.id_pensum,
			SUBSTRING(Y.descripcion, 1, Y.pos),
			Y.nivel,
			Y.creditos,
			Y.intensidad_horaria
		");

		if (!$result) {
			printf("Errormessage Todos los Cursos: %s\n", $this->_db->error);
		}else{
			$regs = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($regs as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}

}

$datos_bd = new datos_bd();


/*
BUSCAR EN XML

$libros = simplexml_load_file("php/libros.xml", null, true);
$result = $libros->xpath('//id_libro[.="' .$id_libro. '"]/ancestor::item');
*/
?>
