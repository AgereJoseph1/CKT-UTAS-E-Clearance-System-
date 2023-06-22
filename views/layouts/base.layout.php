
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Eclear | <?= $ctx['title'] ?></title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= ASSET_PATH ?>/css/style-starter.css">

  <!-- google fonts -->
  <link href="/eclear/fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body>

<section>
  <?php if (strpos($_SERVER['SCRIPT_FILENAME'], "chem_lab") !=false) :?>
        <!-- sidebar menu start -->
      <?php include_once VIEW_ROOT. "includes/sidebars/chem_lab.sidebar.inc.php"?>

  <?php elseif (strpos($_SERVER['SCRIPT_FILENAME'], "admin") !=false) :?>
    <?php if (strpos($_SERVER['SCRIPT_FILENAME'], "login") ==false) :?>
           <?php include_once VIEW_ROOT. "includes/sidebar.inc.php"?>
           <?php endif ?>
  <?php elseif (strpos($_SERVER['SCRIPT_FILENAME'], "snr_fh") !=false) :?>
         <?php include_once VIEW_ROOT. "includes/sidebars/snr_fh.sidebar.inc.php"?>
  <?php elseif (strpos($_SERVER['SCRIPT_FILENAME'], "bio_lab") !=false) :?>
      <?php include_once VIEW_ROOT. "includes/sidebars/bio_lab.sidebar.inc.php"?>
  <?php elseif (strpos($_SERVER['SCRIPT_FILENAME'], "phy_lab") !=false) :?>
      <?php include_once VIEW_ROOT. "includes/sidebars/phy_lab.sidebar.inc.php"?>
  <?php elseif (strpos($_SERVER['SCRIPT_FILENAME'], "snr_mh") !=false) :?>
         <?php include_once VIEW_ROOT. "includes/sidebars/snr_mh.sidebar.inc.php"?>
  <?php elseif (strpos($_SERVER['SCRIPT_FILENAME'], "staff") !=false) :?>
         <?php include_once VIEW_ROOT. "includes/sidebars/staff.sidebar.inc.php"?>
    <?php endif; ?>
      <!-- //sidebar menu end -->
      <!-- header-starts -->
      <?php if (strpos($_SERVER['SCRIPT_FILENAME'], "clearance_receipt") != true): ?>
        <div class="header sticky-header">

            <!-- notification menu start -->
            <div class="menu-right">
              <div class="navbar user-panel-top">
                <div class="user-dropdown-details d-flex">
                  <div class="profile_details">
                    <ul>
                      <li class="dropdown profile_details_drop">
                        <form action="../logout.php" method="POST">
                          <button type="submit" name='userLogout' class='btn text-danger' ><i class="fa fa-power-off"></i> Logout</button>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--notification menu end -->
          </div>
    <?php endif; ?>
  <!-- //header-ends -->
 
  

  
  <!-- main content start -->
    <?php require_once VIEW_ROOT."$name.view.php" ?>
<!-- main content end-->
</section>
  <!--footer section start-->
<!-- <footer class="dashboard">
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank"
      class="text-primary">Seritrex.</a></p>
</footer> -->
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="<?= ASSET_PATH ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?= ASSET_PATH ?>/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="<?= ASSET_PATH ?>/js/Chart.min.js"></script>
<script src="<?= ASSET_PATH ?>/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="<?= ASSET_PATH ?>/js/bar.js"></script>
<script src="<?= ASSET_PATH ?>/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="<?= ASSET_PATH ?>/js/jquery.nicescroll.js"></script>
<script src="<?= ASSET_PATH ?>/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="<?= ASSET_PATH ?>/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="<?= ASSET_PATH ?>/js/bootstrap.min.js"></script>

</body>

</html>
