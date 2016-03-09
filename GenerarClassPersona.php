<?php
	include_once 'conexion.php';

	$firma = "Inactivo";
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$fecha = $_POST['fecha'];
	$pais = $_POST['pais'];
	$idioma = $_POST['idioma'];
	$correoCliente = $_POST['CorreoCliente'];
	$hotel = $_POST['hotel'];
	$habitacion = $_POST['habitacion'];
	$agencia = $_POST['agencia'];
	$razonSocial = $_POST['razonSocial'];
	$telefono = $_POST['telefono'];
	$correoEmpresa = $_POST['correoEmpresa'];
	$tratamiento = $_POST['tratamiento'];
	$circunstancia = $_POST['circunstancia'];
	$terapeuta = $_POST['terapeuta'];
	$comentario = $_POST['comentario'];

	$persona = new Clientes("1",$nombre, $apellidos, $edad, $fecha, $idioma, $tratamiento, $circunstancia);
	$db = new ClassPDO();

	$tablasAgencia = " agencias(razon,nombre,telefono,correo) values('".$razonSocial."','".$agencia."', '".$telefono."', '".$correoEmpresa."')";
	$agencias = $db->insert($tablasAgencia);

	$tablascircustancia = "circustancias(nombre) values('".$circunstancia."')";
	$circustancias = $db->insert($tablascircustancia);

	$tablashoteles = "hoteles(nombre) values('".$hotel."')";
	$hoteles = $db->insert($tablashoteles);

	$tablasidiomas = "idiomas(nombre) values('".$idioma."')";
	$idiomas = $db->insert($tablasidiomas);

	$tablaspaises = "paises(nombre) values('".$pais."')";
	$paises = $db->insert($tablaspaises);

	$consulta = $db->find("agencias");

			foreach ($consulta as $consu): 		
			$dato = $consu['id'];
			endforeach; 

	$tablasclientes = "clientes(agencia_id,apellidos, circustancias_medica_id,correo, edad,fecha, firma, habitacion, hotel_id, idioma_id, nombre, pais_id) values('".$dato."', '".$apellidos."', '".$dato."', '".$correoCliente."', '".$edad."','".$fecha."','".$firma."', '".$habitacion."','".$dato."','".$dato."','".$nombre."','".$dato."')";
	$clientes = $db->insert($tablasclientes);


	$tablasopiniones = "opiniones(nombre) values('".$comentario."')";
	$opiniones = $db->insert($tablasopiniones);

	$tablasterapeutas = "terapeutas(nombre) values('".$terapeuta."')";
	$terapeutas = $db->insert($tablasterapeutas);

	$tablastratamiento = "tratamientos(nombre) values('".$tratamiento."')";
	$tratamiento = $db->insert($tablastratamiento);

	$tablassesiones = "sesiones(cliente_id,id, opinion_id, terapeuta_id, tratamiento_id) values('".$dato."','".$dato."','".$dato."','".$dato."','".$dato."')";
	$sesiones = $db->insert($tablassesiones);
	header("Location:index.php");
?>