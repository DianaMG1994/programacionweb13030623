//h1 todas las etiquetas h1
//.ss4 todos los atributos de  
/* #ss1 el elemento */
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
	 			$(this).attr('src','1.jpg');
	 		}
	 	);
	 $("#btn-reinciar").click(
 		function ()
 		{
 			$("img").show("fast");
 		}
	 );
	}
);


