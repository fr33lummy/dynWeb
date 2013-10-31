
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  
   
    <title>Succes-page</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
 
  </head>

  <body>

    <div id="container" class="container">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          
          <a class="navbar-brand active" href="#">Quiz app </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php?action=logout">logout</a></li>
          </ul>
        </div>
      </div>

      <div class="jumbotron">
        <?php 
        if(isset($_SESSION['usernaam'])){

          echo "<p>Welkom</p> ". $_SESSION['usernaam'];
        } else {
          header('location:index.php');  
        }
      ?>
        
      </div>

    </div> 

  </body>
</html>
