DWEC04-TAREA

ESTRUCTURAS DEFINIDAS POR EL USUARIO EN JAVASCRIPT

ENUNCIADO.

Queremos hacer una aplicación en JavaScript para gestionar edificios con la información de la
situación del edificio y de los propietarios de cada piso. Para ello queremos almacenar la siguiente
información de cada edificio:

• calle
• número
• código postal
• plantas del edificio (dentro de cada planta tendremos un número de puertas y para cada
puerta almacenaremos el nombre del propietario).

Se pide:

• Crear un objeto que nos permita instanciar edificios. Cada vez que instanciemos un edificio
le pasaremos la calle, número y código postal como parámetros. Se pide además crear los
siguientes métodos para el objeto Edificio:
• agregarPlantasYPuertas(numplantas, puertas) // Se le pasa el número de plantas que
queremos crear en el piso y el número de puertas por planta. Cada vez que se llame
a este método, añadirá el número de plantas y puertas indicadas en los parámetros, a
las que ya están creadas en el edificio.
• modificarNumero(numero) // Se le pasa el nuevo número del edificio para que lo
actualice.
• modificarCalle(calle) // Se le pasa el nuevo nombre de la calle para que lo actualice.
• modificarCodigoPostal(codigo) // Se le pasa el nuevo número de código postal del
edificio.
• imprimeCalle // Devuelve el nombre de la calle del edificio.
• imprimeNumero // Devuelve el número del edificio.
• imprimeCodigoPostal // Devuelve el código postal del edificio.
• agregarPropietario(nombre,planta,puerta) // Se le pasa un nombre de propietario, un
número de planta y un número de puerta y lo asignará como propietario de ese piso.
• imprimePlantas // Recorrerá el edificio e imprimirá todos los propietarios de cada
puerta.
• Cada vez que se crea un edificio que muestre automáticamente un mensaje del estilo:
- construido nuevo edificio en calle: xxxxxx, nº: xx, CP: xxxxx.
• Cada vez que se añada un propietario a un piso de un edificio que muestre un mensaje del
estilo:
– xxxxxxxx es ahora el propietario de la puerta x de la planta x.

Aquí se muestra un ejemplo de lo que tendría que mostrar la aplicación:

TRABAJANDO CON OBJETOS EN JAVASCRIPT

Instanciamos 3 objetos edificioA, edificioB y edificioC con estos datos:

- Construido nuevo edificio en calle: Garcia Prieto, nº: 58, CP: 15706
- Construido nuevo edificio en calle: Camino Caneiro, nº: 29, CP: 32004
- Construido nuevo edificio en calle: San Clemente, nº: s/n, CP: 15705
El código postal del edificio A es: 15706
La calle del edificio C es: San Clemente
El edificio B está situado en la calle Camino Caneiro número 29
Agregamos 2 plantas y 3 puertas por planta al edificio A...
Agregamos 4 propietarios al edificio A...
- Jose Antonio Lopez es ahora el propietario de la puerta 1 de la planta 1
- Luisa Martinez es ahora el propietario de la puerta 2 de la planta 1
- Marta Castellón es ahora el propietario de la puerta 3 de la planta 1
- Antonio Pereira es ahora el propietario de la puerta 2 de la planta 2

Listado de propietarios del edificio calle García Prieto número 58

Propietario del piso 1 de la planta 1: Jose Antonio Lopez
Propietario del piso 2 de la planta 1: Luisa Martinez
Propietario del piso 3 de la planta 1: Marta Castellón
Propietario del piso 1 de la planta 2:
Propietario del piso 2 de la planta 2: Antonio Pereira
Propietario del piso 3 de la planta 2:
Agregamos 1 planta más al edificio A...
Agregamos 1 propietario más al edificio A planta 3, puerta 2...

- Pedro Meijide es ahora el propietario de la puerta 2 de la planta 3 

Listado de propietarios del edificio calle García Prieto número 58

Propietario del piso 1 de la planta 1: Jose Antonio Lopez
Propietario del piso 2 de la planta 1: Luisa Martinez
Propietario del piso 3 de la planta 1: Marta Castellón
Propietario del piso 1 de la planta 2:
Propietario del piso 2 de la planta 2:
Propietario del piso 1 de la planta 3:
Propietario del piso 2 de la planta 3: Pedro Meijide 

/////////////////////////////////////////// //////

STRUCTURES USER-DEFINED IN JAVASCRIPT

SENTENCE.

We want to make an application in JavaScript to manage buildings with information
location of the building and the owners of each floor. To do this we store the following
information for each building:

• Street
• number
• Postal Code
• floors of the building (within each level there are a number of doors and for each
door store the owner's name).

It asks:

• Create an object that allows us to instantiate buildings. Every time a building instanciemos
We will pass on the street, number and ZIP code as parameters. It further requests create
following methods for building object:
• agregarPlantasYPuertas (numplantas, doors) // it is passed the number of plants
we want to create on the floor and the number of doors per floor. Whenever you call
this method will add the number of floors and doors indicated in the parameters,
which they are already created in the building.
• modificarNumero (number) // you miss the new issue of the building so that it
update.
• modificarCalle (street) // You pass the new name of the street to update it.
• modificarCodigoPostal (code) // you miss the new issue of zip code
building.
• imprimeCalle // Returns the name of the street the building.
• imprimeNumero // Returns the number of the building.
• imprimeCodigoPostal // Returns the zip code of the building.
• agregarPropietario (name, floor, door) // It is passed a name owner,
plant number and port number and assign it as the owner of that floor.
• imprimePlantas // tour the building and print all owners of each
door.
• Each time a building automatically display a message style is created:
- Built new building in street: xxxxxx, No: xx, CP: xxxxx.
• Whenever an owner to a floor of a building that displays a message is added
style:
- Xxxxxxxx is now the owner of the door x x floor.

Here's an example of what would have to show the application:

WORKING WITH OBJECTS IN JAVASCRIPT

Instantiate 3 edificioA, edificioB and edificioC objects with this data:

- Built new building in street: Garcia Prieto, No: 58, CP: 15706
- Built new building in street: Camino Caneiro, No: 29, CP: 32004
- Built new building in street: San Clemente, number: s / n, CP: 15705
The ZIP code of building A is: 15706
C Street building is: San Clemente
The building B is situated at number 29 Camino Caneiro
Add 2 floors and 3 doors per floor of the building A ...
Add 4 owners to Building A ...
- Jose Antonio Lopez is now the owner of the door 1 1 floor
- Luisa Martinez is now the owner of the door 2 of the plant 1
- Marta Castellon is now the owner of the door 3 of the plant 1
- Antonio Pereira is now the owner of the door 2 of the 2nd floor

List of building owners García Prieto street number 58

Owner floor 1 floor 1: Jose Antonio Lopez
Owner floor 2 1 floor: Luisa Martinez
Owner floor 3 1 floor: Marta Castellon
Owner floor 1 floor 2:
Owner floor 2 floor 2: Antonio Pereira
Owner floor 3 of the 2nd floor:
Add one more floor to the building ...
Add 1 plus the building owner A 3rd floor, door 2 ...

- Pedro Meijide is now the owner of the door 2 Plant 3

List of building owners García Prieto street number 58

Owner floor 1 floor 1: Jose Antonio Lopez
Owner floor 2 1 floor: Luisa Martinez
Owner floor 3 1 floor: Marta Castellon
Owner floor 1 floor 2:
Owner floor 2 of the 2nd floor:
Owner floor 1 plant 3:
Owner floor 2 floor 3: Pedro Meijide
