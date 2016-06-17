Descripción: Ejercicio canvas:

~~~
<!DOCTYPE html>
<html>
<head>
	<title>Trabajando con Eventos - IES San Clemente</title>
	<meta charset="UTF-8">
	<style type="text/css">
		#coordenadas{
			display: inline;
		}

		.bordes{
			border: 1px solid black;
		}
	</style>
	<script>
// Canvas Tutorial:
// https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Canvas_tutorial?redirectlocale=en-US&redirectslug=Canvas_tutorial
// http://creativejs.com/2011/08/31-days-of-canvas-tutorials/



</script>
</head>
<body>
	<h1>Gestión de eventos con JavaScript - DWEC 2015-2016.</h1>
	<h3>Tablero de dibujo</h3>
	<canvas id="marco" width="700" height="400"></canvas><br/>

	Click en el cuadrado para ver copia de la imagen del canvas (sin color de fondo):
	<img id="imagencanvas" width="100" height="75" class="bordes"/>

	<h4>Coordenadas ratón: <div id="coordenadas"></div></h4>
	<input type="button" name="cambiarfondo" id="cambiarfondo"  value="Cambiar color fondo documento"/>
	<input type="button" name="cambiarh1" id="cambiarh1"  value="Cambiar Título H1"/>
	<input type="button" name="eliminarh3" id="eliminarh3"  value="Eliminar Título H3"/>
	<input type="button" name="crearh3" id="crearh3"  value="Crear Título H3"/>
	<br/>
	<input type="button" name="bordes" id="bordes" value="Activar/Desactivar bordes Tablero"/>
	<input type="button" name="fondocanvas" id="fondocanvas" value="Color Fondo Canvas"/>
	<input type="button" name="black" id="black"  value="Negro" class="colores"/>
	<input type="button" name="blue" id="blue"  value="Azul" class="colores"/>
	<input type="button" name="red" id="red"  value="Rojo" class="colores"/>
	<input type="button" name="green" id="green"  value="Verde" class="colores"/>
	<input type="button" name="yellow" id="yellow"  value="Amarillo" class="colores"/>
	<h4>Selecciona ancho del pincel:</h4>
	<input type="button" name="1" id="1"  value="Pequeño" class="grosor"/>
	<input type="button" name="3" id="3"  value="Normal" class="grosor"/>
	<input type="button" name="5" id="5"  value="Grande" class="grosor"/>
	<input type="button" name="7" id="7"  value="Muy Grande" class="grosor"/>
	<input type="button" name="limpiar" id="limpiar"  value="Limpiar Tablero Alt+K"/>
</body>
</html>
~~~
