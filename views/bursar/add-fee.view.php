
 
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add fees</li>
      </ol>
    </nav>

      <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
              <a href="all-levelfees.php" class="btn btn-primary mb-1">View All level fees</a>
              <div class="card">
                  <h3 class="card-title text-center mt-3">Add Fee </h3>
                  <?php include_once VIEW_ROOT."/includes/alerts.inc.php" ?>
                  <div class="card-body">
                      <form method="POST">
                          <div class="form-group">
                              <label for="">Level</label>
                              <input type="text" name="lvl" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="">Amount</label>
                              <input type="number" name="amt" class="form-control">
                          </div>
                          <div class="form-group">
                              <button type="submit" name="addRecord" class="btn btn-block btn-success">Add Fee</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>

