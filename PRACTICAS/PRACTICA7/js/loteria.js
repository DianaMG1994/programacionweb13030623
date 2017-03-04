//h1 todas las etiquetas h1
//.ss4 todos los atributos de  
/* #ss1 el elemento */

var numero
var cadena

function fobjeto(nombre)
{
	return document.getElementById(nombre)
}

$(document).ready(
	function(){
	 console.log("HOLA DESDE JQUERY");
	 //alert ("HOLA DESDE JQUERY");
	 $("img").click(
	 		function()
	 		{
	 			//$(this).width("20px");
	 			//$(this).hide("slow");
	 			//$(this).show("fast");
	 			
	 			$(this).attr('src','frijol.png');
	 		}
	 	);
	 $("#btn-reinciar").click(
 		function ()
 		{
 			$("img").show("fast");
 		}
	 );
	 setInterval(
	 	function()
	 	{
			numero=parseInt((Math.random()*10+1));
			cadena="loteria/"+numero;
			$("#img1").attr("src",cadena+".jpg")
	 	}, 5000
	 	);


	}

	
); <!--fincompleto-->


