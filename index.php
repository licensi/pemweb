<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <link href="<?php echo base_url().'assets/login/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>
    <div class="container" style="text-align: center; margin: 200px auto;">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'index.php/start/utama'?>" method="post">
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus style="text-align: center;"><br>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required style="text-align: center;"><br>
            <button type="submit" style="border-radius: 8px; padding: 5px; background-color: #66FF00;">Masuk</button>
          </form>
        </div>
        </div>
    <script src="<?php echo base_url().'assets/login/js/jquery.js'?>"></script>
    <script src="<?php echo base_url().'assets/login/js/bootstrap.min.js'?>"></script>
  </body>
</html>
