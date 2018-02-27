<?php 
require_once('../conexion/conexion_urep.php');

class egresados_urep extends Conexion_urep{

	public function __construct(){
		parent::__construct();
	}


	public function pass($codigo){
		$data = "";
		$new_pass = "0";

		$result = $this->db_urep->query("
			SELECT c.codigo codigo_new, d.pass
			FROM inscrito c, ins_ext d
			WHERE c.IdInscrito = d.id_inscrito AND c.codigo = $codigo
		");

		if (!$result) {
			printf("Errormessage Todos los ENCRIP: %s\n\n", $this->db_urep->error);
		}else{

			$user = array();
			$regs = $result->fetch_all(MYSQLI_ASSOC);

			foreach ($regs as $row) {
				$key = "PaulaCielo";
				$new_pass = $this->m_decrypt($row['pass'], $key);
			}
			$data = $new_pass;
		}
		return $data;
	}


	
	public function select($codigo_new){
		$data = array();

		$result = $this->db_urep->query("
			SELECT 
			a.codigo Id_Nuevo,
			c.codigo Id_Antiguo,
			c.PrimerNombre,
			c.SegundoNombre,
			c.PrimerApellido,
			c.SegundoApellido,
			c.IdTipoId Tipo_Doc,
			c.Documento
			FROM egresado    a,
			admitido    b,
			inscrito    c,
			ins_ext     d
			WHERE     a.codigo = b.codigo
			AND b.IdInscrito = c.IdInscrito
			AND c.IdInscrito = d.id_inscrito
			AND a.codigo = '$codigo_new' 
			");

		if (!$result) {
			printf("Errormessage Todos los Egresados: %s\n\n", $this->db_urep->error);
		}else{
			$regs = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($regs as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}

	public function sesion($codigo_new, $pass){
		$data = 0;
		$result = $this->db_urep->query("
			SELECT 
			a.codigo codigo_new,
			d.pass
			FROM egresado    a,
			admitido    b,
			inscrito    c,
			ins_ext     d
			WHERE     a.codigo = b.codigo
			AND b.IdInscrito = c.IdInscrito
			AND c.IdInscrito = d.id_inscrito
			AND a.codigo = '$codigo_new'
			LIMIT 1
			");

		if (!$result) {
			printf("Errormessage Todos los Egresados: %s\n\n", $this->db_urep->error);
		}else{

			$user = array();
			$regs = $result->fetch_all(MYSQLI_ASSOC);

			foreach ($regs as $row) {
				$user[] = $row;
			}
			$key = "PaulaCielo";
			$new_pass = $this->m_decrypt($user['0']['pass'], $key);
			$repass = trim($new_pass);
			$compara = strcmp($pass, $repass);

			if ($compara == 0){
				$data = 1;
			}
			else{
				echo '
				<script type="text/javascript">
				alert("Datos incorrectos, intentalo nuevamente");
				location.reload();
				</script>
				';
			}
		}
		return $data;
	}



	public function m_encrypt($data, $key){
		$cipher = "rijndael-256";
		$mode = "cbc";
		return (string) 
		base64_encode(
			mcrypt_encrypt(
				$cipher,
				substr(md5($key),0,mcrypt_get_key_size($cipher, $mode)),
				$data,
				$mode,
				substr(md5($key),0,mcrypt_get_block_size($cipher, $mode))
			)
		);
	}

	public function m_decrypt($data, $key){
		$cipher = "rijndael-256";
		$mode = "cbc";
		return (string)
		mcrypt_decrypt(
			$cipher,
			substr(md5($key),0,mcrypt_get_key_size($cipher, $mode)),
			base64_decode($data),
			$mode,
			substr(md5($key),0,mcrypt_get_block_size($cipher, $mode))
		);
	}


	public function nuevoCodigo($cod){

		if(strlen($cod)==7){
			$primer= substr($cod,0,1); 
			$dos=substr($cod,0,2); 
			$ultimos3=substr($cod,5,2); 
			$year='20'.$ultimos3; 
			$cons=substr($cod,2,2);
			$sem=substr($cod,4,1); 
			$pcons=substr($cod,1,1);
			if($primer==1){$facultad=9;}
			if($primer==2){$facultad=3;}
			if($primer==3){$facultad=4;}
			if($primer==4){$facultad=5;}
			if($primer==5){$facultad=6;}
			if($primer==6){$facultad=7;}
			if($primer==7){$facultad=8;}
			if($primer==1 OR $primer==2 OR $primer==3 OR $primer==4 OR $primer==5 OR $primer==6 OR $primer==7){
				if($pcons==0){}
					if($pcons==1){$cons=100+$cons;}
				if($pcons==2){$cons=200+$cons;}
				if($pcons==3){$cons=300+$cons;}
				if($pcons==4){$cons=400+$cons;}
				if($pcons==5){$cons=500+$cons;}
				if($pcons==6){$cons=600+$cons;}
				if($pcons==7){$cons=700+$cons;}
				if($pcons==8){$cons=800+$cons;}
				if($pcons==9){$cons=900+$cons;}
			}
			if($primer==8){
				if($dos==82){$facultad=18;}
			}
			if($primer==9){
				if($dos==90){$facultad=908;}
				if($dos==92){$facultad=10;}
				if($dos==93){$facultad=11;}
				if($dos==94){$facultad=12;}
				if($dos==95){$facultad=13;}
				if($dos==96){$facultad=14;}
				if($dos==97){$facultad=15;}
				if($dos==98){$facultad=16;}
				if($dos==99){$facultad=17;}
			}
			if(strlen($facultad)==1){$nFacultad='00'.$facultad;}
			if(strlen($facultad)==2){$nFacultad='0'.$facultad;}
			if(strlen($facultad)==3){$nFacultad=$facultad;}
			if(strlen($cons)==1){$nCons='000'.$cons;}
			if(strlen($cons)==2){$nCons='00'.$cons;}
			if(strlen($cons)==3){$nCons='0'.$cons;}
			if(strlen($cons)==4){$nCons=$cons;}

			return $year.$sem.$nFacultad.$nCons;
		}
	}
}

$egresados_urep = new egresados_urep();

?>
