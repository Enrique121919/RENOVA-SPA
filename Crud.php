<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
	<title></title>
	<script type="text/javascript">
	function Modificar(id, nombre,apellidos, edad, correo, habitacion, firma, fecha){
		document.getElementById("id").value = id;
		document.getElementById("valor").value = id;
		document.getElementById("nombre").value = nombre;
		document.getElementById("apellidos").value = apellidos;
		document.getElementById("edad").value = edad;
		document.getElementById("correo").value = correo;
		document.getElementById("habitacion").value = habitacion;
		document.getElementById("firma").value = firma;
		document.getElementById("fecha").value = fecha;
	}
	</script>
	<script type="text/javascript">
		function Eliminar(id){
		document.getElementById("dato").value = id;	
		document.eliminar.submit();
		}
	</script>
</head>
<body>
	<form id="eliminar" name="eliminar" action="Eliminar.php" method="post">
		<input id="dato" name="dato" type="hidden">
	</form>
	<?php 
			include_once 'conexion.php';
			$db = new ClassPDO();
			$clientes = $db->find("clientes")?>
	<table id="miTabla" border="1">
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>APELLIDOS</th>
		<th>EDAD</th>
		<th>CORREO</th>
		<th>HABITACION</th>
		<th>FIRMA</th>
		<th>FECHA</th>
	</tr>
	<?php
		foreach ($clientes as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>

			<td><?php echo $cliente['nombre']; ?></td>

			<td><?php echo $cliente['apellidos']; ?></td>

			<td><?php echo $cliente['edad']; ?></td>

			<td><?php echo $cliente['correo']; ?></td>

			<td><?php echo $cliente['habitacion']; ?></td>

			<td><?php echo $cliente['firma']; ?></td>

			<td><?php echo $cliente['fecha']; ?></td>

			<td onClick="<?php echo "Modificar('".$cliente['id']."','".$cliente['nombre']."','".$cliente['apellidos']."', '".$cliente['edad']."', '".$cliente['correo']."', '".$cliente['habitacion']."','".$cliente['firma']."','".$cliente['fecha']."')"; ?>"><label style="color:blue;">EDITAR<label></td>
		<tr/>
	<?php endforeach; ?>
</table>
<br>
<br>
<form action="" method="post">
		<div>	
			<div>
			<input id="id" name="id" type="text" hidden="true">
			<br>
			<label>ID</label>
			<br>
			<input id="valor" name="valor" type="text" disabled="true" />
			</div>

			<div>
			<label>Nombre</label>
			<br>
			<input id="nombre" name="nombre" type="text">
			</div>

			<div>
			<label>Apellidos</label>
			<br>
			<input id="apellidos" name="apellidos" type="text">
			</div>

			<div>
			<label>Edad</label>
			<br>
			<input type="text" id="edad" name="edad">
			</div>

			<div>
			<label>Correo</label>
			<br>
			<input id="correo" name="correo" type="text">
			</div>

			<div>
			<label>Habitacion</label>
			<br>
			<input id="habitacion" name="habitacion" type="text">
			</div>

			<div>
			<label>Firma</label>
			<br>
			<input id="firma" name="firma" type="text">
			</div>

			<div>
			<label>Fecha</label>
			<br>
			<input id="fecha" name="fecha" type="text">
			</div>
			<br>
			</div>
			<input type="submit" value="Actualizar" onClick="this.form.action='Query.php'">
			<input type="submit" value="Eliminar" onClick="this.form.action='Eliminar.php'"/>

		</form>
</body>
</html>
