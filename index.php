<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Renova Spa</title>
		<link rel="stylesheet" type="text/css" href="responsive.css">
		<link rel="stylesheet" type="text/css" href="grid.css">
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-4" align="center">
			<img src="img/logo.png" width="400" height="700" align="right">
		</div>
		<div class="col-4" align="center">
			<br>
			<br>
			<h1 style="color:black; font-family: times, serif; font-size:20pt; font-style:italic;" align="left">Deslinde de Responsabilidad</h1>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8" align="center">
			<nav>
				<ul>
				  <li><a href="#">Bienvenido</a></li>
				  <li><a href="#">Welcome</a></li>
				  <li><a href="#">Willkommen</a></li>
				  <li><a href="#">Benvenuto</a></li>
				  <li><a href="#">Valkomen</a></li>
				  <li><a href="#">Bienvenue</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-2">

		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8" align="left">
			<aside>
				Por favor, dedique unos minutos a leer cuidadosamente la información siguiente y suscribirla con su firma<br>
				<p>al finalizar la lectura, muchas gracias.</p>
			</aside>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2">

		</div>
		<form action="GenerarClassPersona.php" method="post">
		<div class="col-8">
			
				<input type="text" size="25" placeholder="Nombre: " id="nombre" name="nombre" required />
				<input type="text" size="25" placeholder="Apellidos: " id="apellidos" name="apellidos" required/>
				<input type="number" size="25" placeholder="Edad: " id="edad" name="edad" required/>
				<label style="color:black; font-family: times, serif; font-size:15pt; font-style:italic;">Fecha:</label>
				<input type="date" size="30" id="fecha" name="fecha" required />
				<br>
				<br>
				<input type="text" size="40" placeholder="País: " id="pais" name="pais" required/>
				<input type="text" size="30" placeholder="Idioma: " id="idioma" name="idioma" required/>
				<input type="text" size="30" placeholder="E-mail: " id="correoCliente" name="CorreoCliente" required/>
				<br>
				<br>
				<input type="text" size="90" placeholder="Hotel: " id="hotel" name="hotel" required/>
				<input type="number" size="30" placeholder="Habitación: " id="habitacion" name="habitacion" required/>
				<br>
				<br>
				<input type="text" size="30" placeholder="Agencia de viajes: " id="agencia" name="agencia" required/>
				<input type="text" size="30" placeholder="Razon Social: " id="razonSocial" name="razonSocial" required/>
				<input type="number" size="30" placeholder="Telefono: " id="telefono" name="telefono" required/>
				<input type="text" size="20" placeholder="E-mail: " id="correoEmpresa" name="correoEmpresa" required/>
				<br>
				<br>
				<input type="text" size="55" placeholder="Tratamiento: " id="tratamiento" name="tratamiento" required/>
				<input type="text" size="55" placeholder="Terapeuta: " id="terapeuta" name="terapeuta" required/>
				<br>
				<br>
				<input type="text" size="115" placeholder="Opinion: " id="comentario" name="comentario" required/>
				<br>
				<br>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8" align="left">
			<aside>
				1. El masaje o tratamiento que usted va a recibir tiene el propósito básico de la relajación y el alivio de<br>
				<p>la tensión muscular superficial.</p>

				2. Si usted está insatisfecho con el servicio, o experimenta cualquier tipo de molestia o dolor durante la<br>
				<p>sesión, informe por favor al terapeuta cuanto antes.</p>

				3. Si no se menciona nada durante la sesión, asumiremos que no ha habido ningún problema.<br><br>

				4. Háganos saber antes del inicio de la sesión si se encuentra bajo algunas de las siguientes circunstancias:<br>
				<input type="radio" id="circustancia" name="circunstancia" value="Embarazo" /><label>Embarazo</label><input type="radio" id="circustancia" name="circunstancia" value="Problemas de corazon"><label>Problemas de corazón</label><input type="radio" id="circustancia" name="circunstancia" value="Claustrofobia"><label>Claustrofobia</label>
				<input type="radio" id="circustancia" name="circunstancia" value="Dolor General"><label>Dolor General</label><input type="radio" id="circustancia" name="circunstancia" value="Alergia"><label>Alergia</label><input type="radio" id="circustancia" name="circunstancia" value="Epilepsia"><label>Epilepsia</label><br>
				<input type="radio" id="circustancia" name="circunstancia" value="Problemas de la piel"><label>Problemas de la piel</label> <input type="radio" id="circustancia" name="circunstancia" value="Cirugia Reciente"><label>Cirugía reciente</label>
				<input type="radio" id="circustancia" name="circunstancia" value="Problemas o Lesion"><label>Problemas o lesión de la espina dorsal</label><input type="radio" value="Diabetes"><label>Diabetes</label><br>
				<input type="radio" id="circustancia" name="circunstancia" value="Acne"><label>Acne</label><input type="radio" id="circustancia" name="circunstancia" value="Algun Otro" checked="true"><label>Algún otro desequilibrio de la salud:_________________________________________________</label><br>
				_______________________________________________________________________________________<br>
				_______________________________________________________________________________________
			</aside>
			<br>
			<input type="submit" value="Capturar">
			<input type="button" value="Imprimir" onClick="window.print()">
		</div>
		</form>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2" align="left">
		</div>
		<div class="col-8" align="left">
			<aside>
				5. Cualquier insinuación, hecho o propuesta de caracter sexual ocasionara el final inmediato de la<br>
				sesión y él/la huésped sera obligado al pago completo del servicio.<br><br>
				6. Por la seguridad de sus valores, le sugerimos dejarlos en la caja fuerte de su habitación.<br><br>
				Renova spa no asumirá ninguna responsabilidad por robo o extravío de valores.<br><br>
				Le agradecemos su comprensión y esperamos que disfrute de nuestros servicios.
			</aside>
		</div>
		<div class="col-2">

		</div>
	</div>
	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-2" align="left">
		</div>
		<div class="col-4" align="center">
		<aside>
		________________________________<br>
		Firma del Terapeuta
		</aside>
		</div>
		<div class="col-4" align="center">
		<aside>
		________________________________<br>
		Firma del cliente
		</aside>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2" align="left">
		</div>
		<div class="col-8" align="center">
			<aside>Por favor ayúdenos a mejorar nuestros servicios dándonos su opinión sobre le servicio recibido.<br><br>
			</aside>
		</div>
		<div class="col-2">

		</div>
	</div>

	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8">
		<footer>
			Dada la inexistencia previa de condición médica especial, Renova Spa y el Hotel no se hacen responsables de ningún efecto secundario resultante.
			<p align="left"></p>
			<p></p>
		</footer>
		</div>
		<div class="col-2">

		</div>
	</div>
	<br>
	</body>
</html>