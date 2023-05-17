<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>E-Clearance | <?= $ctx['title'] ?></title>
    <!-- <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html"> -->
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/eclear/std_assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/eclear/std_assets/vendors/css/forms/select/select2.min.css">


    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/eclear/std_assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/eclear/std_assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/eclear/std_assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/eclear/std_assets/css/components.min.css">


    <!-- BEGIN: Page CSS-->

     <link rel="stylesheet" type="text/css" href="/eclear/std_assets/css/plugins/extensions/ext-component-sweet-alerts.min.css">
    <link rel="stylesheet" type="text/css" href="/eclear/std_assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->



  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <?php include_once VIEW_ROOT . "$name.view.php" ?>

<script src="/eclear/std_assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/eclear/std_assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="/eclear/std_assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="/eclear/std_assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="/eclear/std_assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="/eclear/std_assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/eclear/std_assets/js/core/app-menu.min.js"></script>
    <script src="/eclear/std_assets/js/core/app.min.js"></script>
    <script src="/eclear/std_assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/eclear/std_assets/js/scripts/pages/page-account-settings-account.min.js"></script>
    <script src="/eclear/std_assets/js/scripts/forms/form-select2.min.js"></script>

    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->

</html>