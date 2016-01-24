<!DOCTYPE html>
<!--

 @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 @Since Jan 24, 2016
 @Time 9:22:06 PM
 @Encoding UTF-8
 @Project Belajar-CodeIgniter
 @Package Expression package is undefined on line 9, column 13 in Templates/Scripting/EmptyPHPWebPage.php.
  
-->
<!DOCTYPE html>
<html lang="en" ng-app="Belajar-CodeIgniter">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php $this->load->view('layout/LibraryCSS') ?>
        <?php $this->load->view('layout/LibraryAngularCSS') ?>

    </head>
    <body>

        <?php $this->load->view('layout/Header') ?>

        <div ui-view="lazyLoadView">

        </div>

        <?php $this->load->view('layout/LibraryJS') ?>
        <?php $this->load->view('layout/LibraryAngularJS') ?>
    </body>
</html>

