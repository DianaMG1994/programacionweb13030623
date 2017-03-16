
var numero
var cadena
var contadorA=0
var contadorP=0
var nombImg=""
var arreglo=[]
//Regresa un objeto de HTML por el ID 
function fobjeto(nombre)
{
	return document.getElementById(nombre)
}

$(document).ready(
	function (){
		console.log("Hola desde JQuery");
		//alert("Hola desde JQuery");

		$("img").click(
			function(){
				//$(this).width("20px");
				//$(this).hide("slow");
				nombImg=$(this).attr("src");
				if(nombImg.length==13){
					nombImg=nombImg.substring(8,9);
				}
				else{
					nombImg=nombImg.substring(8,10);
				}
				try{
					if(arreglo[nombImg]==1)
					{
						$(this).css("opacity", 0.5);
						contadorA++;
						if(contadorA==9){
							$("#myModal1").modal("show")
							clearInterval(interval);
						}
					}

				}
				catch(err){
					
				}
			}
		);
		$("#reiniciar").click(
			function(){
				$("img").show("fast");
			}
		);
		interval=setInterval(
			function(){
				numero=parseInt((Math.random()*31+1))
				
				while(true){
					if(arreglo[numero]==1){
						numero=parseInt((Math.random()*31+1))
					}
					else{
						cadena="loteria/"+numero
						fobjeto("img1").src = cadena+".jpg";
						break;
					}
				}
				arreglo[numero]=1
				contadorP++;
				if(contadorP==31){
					$("#myModal2").modal("show")
					clearInterval(interval);
				}
			},1500
		);
	}
);
