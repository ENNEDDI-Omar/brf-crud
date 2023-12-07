


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/login.css">

  <title>Document</title>
</head>
<body>
<hgroup>
  <h1>Sign in</h1>
  <?php if (isset($_GET['error'])) { ?>
    
    <div class="alert alert-danger" role="alert">
     <?=$_GET['error']?>
    </div>
  <?php }  ?>
</hgroup>
<form action="controller/auth/check-login.php" method="POST">
 
  <div class="group">
    <input type="text" name="Name" placeholder="Full-Name"><span class="highlight"></span><span class="bar"></span>
  </div>
  <div class="group">
    <input type="password" name="Password" placeholder="Password"><span class="highlight"></span><span class="bar"></span>
  </div>
  
  <button type="submit" class="button buttonBlue">Subscribe
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
    <script src="assets/js/login.js"></script>
</body>

</html>

