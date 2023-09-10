//ALERT
alert("Primero");
alert("Segundo");
alert("Tercero");

//VAR, LET Y CONST
var nombres = "Luis Giovanni"; //Variable global (no es buena practica)
let apellido; 	//Variable local (es mejor que var ya que no se puede acceder desde fuera de la funcion)
const year = 2023;   //Constante: No cambia su valor

//OPERACIONES (SUMA, RESTA, MULTIPLICACION, DIVISION)
console.log(10 + 3); 	   		    			      //Suma
console.log(-4 - (-8)); 		      				  //Resta
console.log((6 * ((-7 / 9)))); 			        //Multiplicacion
console.log(((1/2)*((-4*(-1))+2))); 				//Division


//PEDIDO DE DATOS
let nombre = "Juan";
let edad = 37;
let nacionalidad = "Mexicana"
let comprometido = true;

//Para pedir datos al usuario sin hacer formulario
// let nombre = prompt("Introduce tu nombre:");
// let edad = prompt("Introduce tu edad:");
// let nacionalidad = prompt("Introduce tu nacionalidad:");
// let comprometido = prompt("¿Estas comprometido?");

console.log("Tu nombre es: " + nombre);
console.log("Tu edad es: " + edad);
console.log("Tu nacionalidad es: " + nacionalidad);
console.log("Estás comprometido: " + (comprometido == true ? "Sí" : "No"));