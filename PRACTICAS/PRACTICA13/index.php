<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo1.css">
    <

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<form data-toggle="validator">
    <div class="container">
        <div class="row">
            <div class ="col-sm-12">
           
                   <div class="row">
                      <h1>DIAS DE LA SEMANA</h1>
                   </div>
            </div>
        </div>
        <div class="row">
          <div class ="col-sm-12">
       
                

                       <label for="exampleInputName2">Fecha </label>
                      <div class="form-group">
                            
                            <div class="col-sm-3">
                               <input type="number" class="form-control" placeholder="Dia" pattern="[0-31] {2}" required>
                                
                            </div>

                            <div class="col-sm-1">
                                <label>/</label>
                            </div>
                            <div class="col-sm-3">
                            <input type="number" class="form-control" placeholder="Mes" required>
                             
                            </div>
                            <div class="col-sm-1">
                                <label>/</label>
                            </div>
                             <div class="col-sm-3">
                               <input type="number" class="form-control" placeholder="Año" required>
                             </div>
                      </div>
          </div>
        </div>
               

    
    </div><!-- container-->
    <br></br>
    <br></br>
    <br></br>
    <br></br>
   


     <div class="row">
            <div class ="col-sm-12">
                 <div class ="col-sm-1">
                      <button type="submit" class="btn btn-default">Darme De Alta</button>
                </div>
                <div class ="col-sm-11">
                     
                </div>
            </div>
         </div>

</form>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
  </body>
  </body>
</html>
