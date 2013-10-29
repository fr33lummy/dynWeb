
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Register</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">
      <form class="form-signin well" method="POST" action="index.php?action=registreer">
        <h2 class="form-signin-heading">Enter the fields to register</h2>
        <input type="text" name="voornaam" class="form-control" placeholder="First Name" autofocus>
        <input type="text" name="achternaam" class="form-control" placeholder="Last Name" >
        <input type="text" name="usernaam" class="form-control" placeholder="User Name" >
        <input type="text" name="passwoord" class="form-control" placeholder="Password">
        <input type="text" name="passwoord2" class="form-control" placeholder="retype Password">
        <input type="text" name="email" class="form-control" placeholder="E-Mail">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
     
    </div> 
  </body>
</html>
