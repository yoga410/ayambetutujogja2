!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();  ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();  ?>admin_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();  ?>admin_assets/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
        <div class="animate form login_form">
          
              <form action="<?php echo site_url('login/login')?>" class="well" method="post">
                <h1>Login Form</h1>
            </br>
              <div>
                <input type="username" class="form-control" placeholder="username" name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password"/>
              </div>
              <div class="form-group" style="text-align:right">
                  <button type="submit" name="submit" value="Login" class="btn btn-primary">Log in</button>
                  <button type="reset" class="btn btn-default">Cancel</button>
                  <div class="text-center text-error"></div>
               </div>
              <div>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>
                <br />

                <div>
                <h1><i class="fa fa-user"></i> ADMINISTRATOR</h1>
                <p>©2017 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
                 </div>
                 
              </div>
            </form>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>