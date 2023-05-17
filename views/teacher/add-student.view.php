<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="../teacher/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Student</li>
      </ol>
    </nav>

      <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
              <a href="students.php" class="btn btn-primary mb-1">View All Students</a>
              <div class="card">
                  <h3 class="card-title text-center mt-3">Add Student</h3>
                  <?php include_once VIEW_ROOT."includes/alerts.inc.php" ?>
                  <div class="card-body">
                      <form method="POST">
                              <div class=" form-group">
                                  <label for="">Full Name</label>
                                  <input type="text" name="fname" class="form-control">
                              </div>
                              <div class=" form-group">
                                  <label for="">Index Number:</label>
                                  <input type="text" name="index_no" class="form-control">
                              </div>
                              <div class="form-group">
                                  <button type="submit" name="addStudent" class="btn btn-block btn-success">Add Student</button>
                              </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>