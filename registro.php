<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
  
<center>
<img src="img/Logophp.png"/>
<div class="component">
<h2 style="font-family: 'Script MT Bold'">SISTEMA SION</h2>
<link href="css/component2.css" rel="stylesheet" type="text/css">



<div class="container" style="margin-top:10px;">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Registrarse!</h3>
        </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form" method="POST" action="includes/newuser.php">
                    <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Tu Nombre" name="name" type="text" required>
              </div>                                     
                <div class="form-group">
                  <input class="form-control" placeholder="tuemail@email.com" name="email" type="text" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
              </div>
              
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Registrarme!">
              
                
                 <a class="btn btn-lg btn-info btn-block" href="index.php">Atras</a>
            </fieldset>
            
              </form>
          </div>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>