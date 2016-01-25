<!DOCTYPE html>
<!--

 @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 @Since Jan 24, 2016
 @Time 7:19:57 PM
 @Encoding UTF-8
 @Project Belajar-CodeIgniter
 @Package Expression package is undefined on line 9, column 13 in Templates/Scripting/EmptyPHPWebPage.php.
  
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php $this->load->view('layout/LibraryCSS') ?>

        <link href="<?php echo base_url(); ?>assets/css/signin.css" type="text/css" rel="stylesheet" />

    </head>
    <body>

        <div class="container">

            <form class="form-signin" action="<?php echo site_url(); ?>/UserController/loginProcess" method="post">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <input type="hidden" name="<?php echo $csrf['name'];?>" value="<?php echo $csrf['hash'];?>" />
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

        </div>

        <?php $this->load->view('layout/LibraryJS') ?>
    </body>
</html>
