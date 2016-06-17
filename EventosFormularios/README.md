Descripción: Seguir instrucciónes de los comentarios:

Sobre la base de código HTML:
~~~
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>HTML5 Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h2>Event Programming</h2>
	<div id="contact-form">
		<form id="contact" method="get" action="http://www.google.es">
			<fieldset>	
				<label for="name">Name</label>
				<input type="text" name="name" id="name" placeholder="Full Name" title="Write your name" class="required">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
				<label for="phone">Phone</label>
				<input type="text" name="phone" id="phone" placeholder="Ej. (555) 555-5555">
				<label for="website">Sitio Web</label>
				<input type="text" name="website" id="website" placeholder="http://">
				<label for="message">Comments</label>
				<textarea name="message" id="message"></textarea>
				<input type="submit" name="send" class="button" id="send" value="Send Form" />
			</fieldset>
		</form>
	</div>
	<br/>
	<div id="comentarios"></div>
	Pulsa <a href="http://www.google.es" id="enlace1">aquí</a> para ir a Google.es.<br/>
	Pulsa <a href="#" id="enlace2">aquí</a> para ver las cookies de este documento.<br/>
	Pulsa <a href="#" id="enlace3">aquí</a>para ver la cookie almacenada en localStorage de tu Navegador (HTML5).
	<hr/>
	<div id="div1">
		div1
		<div id="div2">div2
			<div id="div3">div3</div>
		</div>
	</div>
	<script>
	</script>
</body>
</html>
~~~

Realiza lo siguinte:

// Eventos Información: https://developer.mozilla.org/en-US/docs/Web/Reference/Events
// Programar que al poner el foco en Nombre ponga como color de fondo en dicho campo un color darkseagreen
// Ref.: setAttribute en JavaScript.
			

// Programar que cuando pierda el foco en Nombre elimine el color de fondo que había.
// Ref.: removeAttribute en JavaScript.

// Comprobar que cuando pierda el foco en el campo e-mail valide mediante una expresión regular:
// Si el e-mail es incorrecto pondrá el foco en el campo e-mail y un color de fondo tomato. 
// En otro caso si es correcto muestra una alerta de E-mail correcto.


// Programar que cuando se produzca un cambio en el campo website valide si se trata de una url.
// Mostrará  una alerta si es incorrecta.


// Al pasar el ratón por encima del textarea mostrará en el div comentarios si esa casilla no contiene datos el siguiente texto:
// "Por favor escriba un comentario en Pregunta/Comentario." y con color de fondo lightgreen.
// Cuando el ratón salga del textarea ocultará el div de comentarios. (prop. visibility)


// Al enviar el formulario contact comprobará si tenemos datos en todos los campos y si es OK,
// preguntará si queremos enviar el formulario.
// Ref.: preventDefault()


// Al pulsar en el hiperenlace aquí , nos preguntará si queremos ir a la url indicada en la propiedad href. Si pulsamos aceptar nos conecta con esa url
// en otro caso cancelará el evento.
				
			
// Programar una función alertar que muestre el id del div dónde se hace click.
// Que al pulsar en el amarillo (div3) sea el primer evento en dispararse y div2 y div1 los últimos eventos.


// Programar una cookie que se llame usuario y que almacene vuestro nombre y que caduce el 30 de Enero de 2015.

// Al hacer click en el segundo enlace mostrará en una alerta todas las cookies del documento.
			
// Nuevo almacenamiento con HTML5 ---> WebStorage. Pag: 413 del libro "Head First HTML5 Programming"
// Programar la siguiente cookie en el LocalStorage:
// Con el nombre "visitante" y que almacene vuestro Nombre y apellidos"
				
// Al hacer click en el enlace localStorage mostrará con una alerta el contenido de la cookie visitante almacenada en el localStorage del Navegador.
// Comprobar que funciona cerrando el navegador y volviendo a abrirlo (asegurarse de comentar la línea dónde se almacena la cookie una vez creada, para hacer la prueba).


///////////////////////////////////////////////////////////////////////////////////////////////////


Based on HTML code:

~~~
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>HTML5 Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h2>Event Programming</h2>
	<div id="contact-form">
		<form id="contact" method="get" action="#">
			<fieldset>	
				<label for="name">Name</label>
				<input type="text" name="name" id="name" placeholder="Full Name" title="Write your name" class="required">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
				<label for="phone">Phone</label>
				<input type="text" name="phone" id="phone" placeholder="Ej. (555) 555-5555">
				<label for="website">Sitio Web</label>
				<input type="text" name="website" id="website" placeholder="http://">
				<label for="message">Comments</label>
				<textarea name="message" id="message"></textarea>
				<input type="submit" name="bsubmit" class="button" id="bsubmit" value="Send Form" />
			</fieldset>
		</form>
	</div>
	<br/>
	<div id="comentarios"></div>
	CLICK <a href="http://www.google.es" id="enlace1">here</a> to go Google.es.<br/>
	CLICK <a href="#" id="enlace2">here</a> to see the cookies of this document.<br/>
	CLICK <a href="#" id="enlace3">here</a> to see the cookie stored in localStorage your Browser (HTML5 ).
	<hr/>
	<div id="div1">
		div1
		<div id="div2">div2
			<div id="div3">div3</div>
		</div>
	</div>
	<script>
~~~

Does the folowing:

// Events Information: https://developer.mozilla.org/en-US/docs/Web/Reference/Events
// Set it to put the focus on name set as the background color in this field a color darkseagreen
// Ref .: setAttribute on JavaScript.


// Set when lose focus on Behalf delete the background color was.
// Ref .: removeAttribute on JavaScript.

// Check that when you lose focus on the field e-mail validated by a regular expression:
// If the e-mail is wrong will focus on the field e-mail and a color of tomato background.
// Otherwise if successful displays an alert e-mail correct.


// Set when a change in the website field confirm whether it is a url.
// Display an alert if it is incorrect.


// Hovering above the textarea will be displayed in the div comments if that box does not contain data the following:
// "Please write a comment on Question / Comment." and background color lightgreen.
// When the mouse leaves the textarea will hide the div comments. (Prop. Visibility)


// By submitting the contact form check whether we have data in all fields and if it is OK,
// Ask if we submit the form.
// Ref .: preventDefault ()


// Clicking on the hyperlink here, we ask if we go to the URL specified in the href property. If you click accept connects us with the url
// Otherwise it will cancel the event.


// Program a function alert that shows the id of the div where you click.
// Presses when the yellow (div3) is the first event to be fired and div2 and div1 recent events.


// Set a cookie that user call and store your name and caduce the January 30, 2015.

// Clicking on the second link will show an alert all cookies in the document.

// New storage HTML5 ---> WebStorage. Page 413 of the book "Head First HTML5 Programming"
// Set the next cookie in the LocalStorage:
// The name "visitor" and store your Name "

// Clicking on the link localStorage displayed with an alert the contents of the visitor cookie stored in localStorage Browser.
// Check that works by closing the browser and re-open it (make sure comment out the line where the cookie once created, to test stored).