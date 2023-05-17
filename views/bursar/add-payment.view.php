
 
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add payment</li>
      </ol>
    </nav>

      <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
              <a href="all-payment.php" class="btn btn-primary mb-1">View All Payments</a>
              <div class="card">
                  <h3 class="card-title text-center mt-3">Add Payment</h3>
                  <?php include_once VIEW_ROOT."/includes/alerts.inc.php" ?>
                  <div class="card-body">
                      <form method="POST">
                          <div class="form-group">
                              <label for="">Student ID</label>
                              <input type="text" name="stid" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="">Amount Paid</label>
                              <input type="text" name="amt" class="form-control">
                          </div>
                          <div class="form-group">
                              <button type="submit" name="addpy" class="btn btn-block btn-success">Add Payment</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>

