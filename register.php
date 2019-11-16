<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
  <?php include_once 'head.php' ?>
  <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <?php include_once 'header.php' ?>
    <!-- register -->
    <style media="screen">
      body{
        background-image: url();
      }
    </style>
    <section class="p-2" style="background-color:rgba(0,0,0,0.1);">
      <div class="container h-100 mt-">
    		<div class="d-flex justify-content-center h-100">
    			<div class="user_card mt-5 mb-5">
    				<div class="d-flex justify-content-center">
    					<div class="brand_logo_container">
    						<img src="images/logo.jpg" class="brand_logo" alt="Logo">
    					</div>
    				</div>
    				<div class="d-flex justify-content-center form_container">

    					<form class="form-horizontal" action="" method="post">
                <div class="row mt-4">
                  <div class="input-group mb-3 col-lg-6">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="name" class="form-control input_user" value="" placeholder="nombre y apellido">
                  </div>

                  <div class="input-group mb-3 col-lg-6">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control input_email" value="" placeholder="email">
                  </div>
                </div>

                <div class="row">
                  <div class="input-group mb-2 col-lg-6">
      							<div class="input-group-append">
      								<span class="input-group-text"><i class="fas fa-key"></i></span>
      							</div>
      							<input type="password" name="pass" class="form-control input_pass" value="" placeholder="escribe una contraseña">
      						</div>

                  <div class="input-group mb-2 col-lg-6">
      							<div class="input-group-append">
      								<span class="input-group-text"><i class="fas fa-key"></i></span>
      							</div>
      							<input type="password" name="pass2" class="form-control input_pass" value="" placeholder="confirma la contraseña">
      						</div>
                </div>

                <div class="row">
                  <div class="input-group mb-3 col-lg-6">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" name="nick" class="form-control input_user" value="" placeholder="nick">
                  </div>

                  <div class="input-group mb-3 col-lg-6">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-image"></i></span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Suba su foto</label>
                    </div>
                  </div>
                </div>

            	<div class="d-flex justify-content-center mt-3 login_container">
             	<button type="submit" name="button" class="btn login_btn">Registrarse</button>
               </div>

    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <?php include_once 'script.php' ?>
  </body>
</html>
