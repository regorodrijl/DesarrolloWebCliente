Descripción: Seguir instrucciónes de los comentarios:

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Working with JSON</title>
	</head>
	<body>
<script>
// Responde a la siguiente pregunta: ¿Qué significan las siglas JSON?














// ¿Cómo representarías este objeto en formato JSON?
/*
 var persona = new Object();
 persona.edad = 23;
 persona.altura = 170;
 */














/*
 - Asignar el contenido JSON que está más abajo a un objeto.
 - Imprimir todas las propiedades de GlossDiv
 - Imprimir el contenido del campo "title".
 - Imprimir el contenido del campo "Abbrev".
 - Imprimir el contenido de "GlossSeeAlso".
*/

/*
{
   "glossary":{
      "title":"example glossary",
      "GlossDiv":{
         "title":"S",
         "GlossList":{
            "GlossEntry":{
               "ID":"SGML",
               "SortAs":"SGML",
               "GlossTerm":"Standard Generalized Markup Language",
               "Acronym":"SGML",
               "Abbrev":"ISO 8879:1986",
               "GlossDef":{
                  "para":"A meta-markup language, used to create markup languages such as DocBook.",
                  "GlossSeeAlso":[
                     "GML",
                     "XML"
                  ]
               },
               "GlossSee":"markup"
            }
         }
      }
   }
}
*/















/*
 Partiendo del siguiente string JSON obtenido de Youtube, https://www.googleapis.com/youtube/v3/videos?id=sGbxmsDFVnE&key=AIzaSyBrQp_DqWLwtu_H1U9pVQfWGuVijeRlvj8&part=snippet,contentDetails,statistics,status
 
 - Para poder visualizar más claramente la estructura puedes acceder a la siguiente dirección: http://jsonformatter.curiousconcept.com/ 
   e imprimir entre comentarios el string JSON formateado para que te sirva de referencia para el ejercicio.

HACER LAS SIGUIENTES TAREAS:	
 - Asignar ese objeto JSON a una variable.
 - Imprimir el título del video.
 - Incrustar la imagen de la carátula del video "hqDefault".
 - Crear un hiperenlace con la imagen anterior que apunte a la URL del video "player"---"default" y que se abra en una nueva ventana.
 - Imprimir debajo de la imagen la descripción del video.
 - Imprimir el nombre de quién envió el video "uploader"
 - Imprimir la categoría del video.
 - Imprimir la duración del video.
 - Imprimir la fecha en la que fue enviado el video.
 - Imprimir el número de Likes que tiene el video.
 - Imprimir el número de visitas del video.
 - Imprimir el valor de "embed" (indica si se puede incrustar el video en otras páginas.
 */














/*
 Sabiendo que JSON.parse() ,convierte un STRING (JSON) en un objeto.

 Utiliza el siguiente string e imprime el apellido y nombre del contacto.

 var textojson = '{"firstname":"Jesper","surname":"Aaberg","phone":["555-0100","555-0120"]}';
 */














/*
Comprobar si el siguiente contenido estaría formateado correctamente en formato JSON. Utiliza la web http://jsonlint.com/
para averiguarlo y haz las correcciones oportunas. Pega el resultado correcto a continuación.
/*

{
   "name":"Jim Cowart",
   location:{
      city:{
         name:"Chattanooga",
         population:167674
      },
      name: Tennessee,
      abbreviation:"TN",
      population:6403000
   }   state:{

   },
   company:"appendTo",

}

*/














/*
 Sabiendo que JSON.stringify se encarga de convertir un Objeto a un string JSON. Utiliza dicha función para imprimir el string JSON del siguiente objeto:
 var contacto = new Object();
 contacto.nombre = "Maria";
 contacto.apellidos = "Martinez Gonzalez";
 contacto.telefonos = ["555-0100", "555-0120","555-0127","555-0129"];
 contacto.masdatos = new Array();
 contacto.masdatos[0]={"Seat":"Cordoba","Audi":"A100","BMW":"320"};
 contacto.masdatos[1]=["patinar","ver la tele","escuchar música"];
 contacto.masdatos[2]=[{"Macbook":"Retina","Imac":"27 pulgadas"},{"OS":"Maverick","OSX":"Lion"}];
 */














		</script>
	</body>
</html>