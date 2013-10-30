
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Log in</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin well" method="POST" action="index.php?action=login">
             
              <div >
                <?php echo $this->_statusMessage['passwoord'];?>
              </br>
                 
                <?php echo $this->_statusMessage['usernaam'];?>
              </div>

        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="usernaam" class="form-control" placeholder="Name" autofocus>
        <input type="password" name="passwoord" class="form-control" placeholder="Password">
        
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    <a href="index.php?action=new" id="registreer"> or click here to register</a>
      </form>
     
    </div> 
  </body>
</html>
