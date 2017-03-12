//h1 todas las etiquetas h1
//.ss4 todos los atributos de  
/* #ss1 el elemento */

var numero
var cadena
var contador1=0
var contador2=1
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
	 		
	 			contador1++;
	 			if(contador1==9)
	 			{
	 				$("#myModal1").modal("show")
	 			}
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
			numero=parseInt((Math.random()*11+1));
			cadena="loteria/"+numero;
			$("#img1").attr("src",cadena+".jpg")
			contador2++;
			if(contador2==11)
			{
				$("#myModal2").modal("show")
				clearInterval(interval);
			}
	 	}, 5000
	 	);


	}

	
); <!--fincompleto-->


