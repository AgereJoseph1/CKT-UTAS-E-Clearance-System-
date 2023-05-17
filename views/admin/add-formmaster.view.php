<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Office</li>
      </ol>
    </nav>

      <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
              <a href="../../admin/formmasters.php" class="btn btn-primary mb-1">View All Form Masters</a>
              <div class="card">
                  <h3 class="card-title text-center mt-3">Add Form Master</h3>
                  <?php include_once VIEW_ROOT . "includes/alerts.inc.php" ?>
                  <div class="card-body">
                      <form method="POST">
                        <div class=" form-group">
                            <label for="">Full Name</label>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                          <div class=" form-group">
                              <label for="">Phone</label>
                              <input type="text" name="phone" class="form-control">
                          </div>
                          <div class=" form-group">
                              <label for="">Class</label>
                              <input type="text" name="class" class="form-control">
                          </div>
                          <div class="form-group">
                              <button type="submit" name="addClassMaster" class="btn btn-block btn-success">Add Class Master</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>