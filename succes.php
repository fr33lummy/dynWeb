
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  
   
    <title>Home</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
 
  </head>

  <body>

    <div id="container" class="container">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          
          <a class="navbar-brand active" href="#">Quiz app </a>
          <a class="navbar-brand active" href="#"> logged in as : <?php echo $_SESSION['usernaam'];?></a>
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

          echo "<h1>Welkom</h1> ";
        } else {
          header('location:index.php');  
        }
      ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sagittis quis lorem ac hendrerit. Integer massa arcu, imperdiet eu sollicitudin nec, ultricies vitae nisl. Mauris neque ligula, porta vitae molestie id, sollicitudin a erat. Curabitur lacinia tempus varius. Aliquam erat volutpat. Nullam dignissim, est ac malesuada convallis, nulla urna feugiat risus, vitae gravida lorem lacus at tellus. Morbi tempus, mi quis fermentum condimentum, libero magna iaculis diam, id malesuada dolor justo id augue. Mauris pulvinar nulla nec eleifend ornare. Donec eu lacinia massa, in ultricies purus.
</p><p>
Aenean ut mollis sapien. In tincidunt ornare dolor, vitae pulvinar neque convallis vitae. Integer neque nulla, rhoncus et lorem et, accumsan aliquet metus. Morbi pulvinar, dui non pellentesque ullamcorper, purus magna congue tortor, id rutrum metus tortor et diam. Nullam imperdiet ornare nunc, id varius erat congue quis. In semper ipsum cursus, euismod orci sit amet, adipiscing lectus. Curabitur blandit mauris non purus rutrum malesuada. Nunc lobortis aliquam eros eu interdum. Mauris malesuada eget sapien facilisis dapibus. Fusce sagittis aliquam vestibulum. Vivamus et molestie eros. Vivamus fringilla egestas quam at molestie. Nunc in pulvinar sapien. Sed tristique est a orci sollicitudin, in vulputate augue gravida. Morbi id tristique nisl, nec blandit lacus. Etiam hendrerit sapien ac sem accumsan aliquam.</p>



      </div>

    </div> 

  </body>
</html>
