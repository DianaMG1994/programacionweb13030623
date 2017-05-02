<?php
$n= $_GET['nombre'];
$ap= $_GET['apellidopa'];
$am= $_GET['apellidoma'];
$no= $_GET['numcont'];
$s= $_GET['semestre'];
$edad= $_GET['edad'];

 
 if(preg_match("/^[A-Za-zñáóÑÁÓ]*$/", $n))
   {
    echo "La cadena es correcta";

   }
   else
   {
      echo "La cadena es incorrecta";
      
    }
//------------//

if(preg_match("/^[A-Za-zñáóÑÁÓ]*$/", $ap))
   {
      echo "<br>";
    echo "La cadena es correcta";
    
   }
   else
   {
      echo "<br>";
      echo "La cadena es incorrecta";
      
    }
   //------------//

if(preg_match("/^[A-Za-zñáóÑÁÓ]*$/", $am))
   {
      echo "<br>";
    echo "La cadena es correcta";
   
   }
   else
   {
      echo "<br>";
      echo "La cadena es incorrecta";
     
    }
    
//---------------//
if(preg_match("/^[0-9]*$/", $no))
   {
    echo "<br>";
    echo "La cadena es correcta";
   
   }
   else
   {
    echo "<br>";
       echo "La cadena es incorrecta";
  
   }
   //---------------//
if(preg_match("/^[0-9]*$/", $s))
   {
      echo "<br>";
    echo "La cadena es correcta";
   
   }
   else
   {
      echo "<br>";
    echo "La cadena es incorrecta";
  
   }

   //---------------//
if(preg_match("/^[0-9]*$/", $edad))
   {
      echo "<br>";
    echo "La cadena es correcta";
    
   }
   else
   {
      echo "<br>";
    echo "La cadena es incorrecta";
    }

    
  //e-r
// {

//function verifica_numero($numero)
  //{
   //if(preg_match("/^[0-9]*$/", $numero))
 //  {
   //	echo "La cadena es correcta";
   	//return true;
   //}
   	//echo "La cadena es incorrecta"
    //return false;
  //}


  //function verifica_cadena($cadena)
  //{
   //if(preg_match("/^[A-Za-z]*$/", $cadena))
   //{
   	//echo "La cadena es correcta";
   	//return true;
   //}
   	//echo "La cadena es incorrecta"
   //return false;
  //}

 //}
?>

<!DOCTYPE html>
<html>
<body></body>
</html>

