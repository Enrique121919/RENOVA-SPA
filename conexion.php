<?php 
	/**
	*Archivo de clase de conexion PDO
	*
	*Clase que permite acciones CRUD usando PDO
	*
	*@package PDO
	*@author Enrique Díaz Ramírez <enrique121919@hotmail.com>
	*
	*
	*/

	//Declaracion de la clase
	class ClassPDO
	{
		public $connection;
		private $dsn;
		private $username;
		private $password;
		public $result;

		/**
		*Constructor de la clase
		*@return void
		**/
		public function __construct(){
			$this->dsn = 'mysql:host=localhost;dbname=renova';
			$this->username = 'root';
			$this->password ='';
			$this->connection();

		}

		/**
		*Metodo de conexion a la base de datos
		*
		*Metodo que permite establecer una conexion a la base de datos
		*@return void
		**/	
		private function connection(){
			try{

				$this->connection = new PDO(
					$this->dsn,
					$this->username,
					$this->password	
				);
				$this->connection->setAttribute(
					PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION
				);
			}catch(PDOException $e){
				echo "ERROR: ".$e->getmessage();
				die();
			}
		}

		Public function find($tabla = null){
			$sql = "SELECT * FROM $tabla";
			$this->result = $this->connection->query($sql);

			return $this->result;
		}

		Public function delete($tabla = null,$condicion = null){
			$delete = "DELETE ";
			$from = " FROM ";
			$sql = $delete.$from.$tabla." ".$condicion;
			$this->result = $this->connection->query($sql);

			return $this->result;
		}

		Public function update($tabla = null, $campos = null, $condicion = null){
			$update = "UPDATE ";
			$set = " SET ";
			$sql = $update.$tabla.$set.$campos." ".$condicion;
			$this->result = $this->connection->query($sql);

			return $this->result;
		}

		Public function insert($tabla = null){

			$sql = "INSERT INTO $tabla ";
			$this->result = $this->connection->query($sql);
			return $this->result;
		}
	}

	class Terapeutas{
		 
	}

	class Clientes{

		public $id;
		public $nombre;
		public $apelidos;
		public $edad;
		public $fecha;
		public $idioma;
		public $tratamiento;
		public $circunstancia;

		function __construct($id = null, $nombre = null, $apellidos = null, $edad = null, $fecha = null, $idioma = null, $tratamiento = null, $circunstancia = null) {  
		    $this->id = $id;  
		    $this->nombre = $nombre;  
		    $this->apellidos = $apellidos;  
		    $this->edad = $edad; 
		    $this->fecha = $fecha;
		    $this->idioma = $idioma;
		    $this->tratamiento = $tratamiento;
		    $this->circunstancia = $circunstancia;
   		}

   		public function getId() {  
        	return $this->id;  
   		} 

	   	public function setId($id) {  
	    	$this->id = $id;  
	  	}

	  	public function getNombre() {  
        	return $this->nombre;  
   		} 

	   	public function setNombre($nombre) {  
	    	$this->nombre = $nombre;  
	  	}

	  	public function getApellidos() {  
        	return $this->apellidos;  
   		} 

	   	public function setApeMat($apellidos) {  
	    	$this->apellidos = $apellidos;  
	  	}

	   	public function getEdad() {  
	    	$this->edad = $edad;  
	  	}

	  	public function setEdad($edad) {  
	    	$this->edad = $edad;  
	  	}

	  	public function getFecha() {  
	    	$this->fecha = $fecha;  
	  	}

	  	public function setFecha($fecha) {  
	    	$this->fecha = $fecha;  
	  	}


	  	public function getIdioma() {  
	    	$this->idioma = $idioma;  
	  	}

	  	public function setIdioma($idioma) {  
	    	$this->idioma = $idioma;  
	  	}

	  	public function getTratamiento() {  
	    	$this->tratamiento = $tratamiento;  
	  	}

	  	public function setTratamiento($tratamiento) {  
	    	$this->tratamiento = $tratamiento;  
	  	}

	  	public function getCircunstancia() {  
	    	$this->circunstancia = $circunstancia;  
	  	}

	  	public function setCircunstancia($circunstancia) {  
	    	$this->circunstancia = $circunstancia;  
	  	}
	}

	class paises{

	}

	class hoteles{

	}
?>