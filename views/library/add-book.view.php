
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Book</li>
      </ol>
    </nav>

      <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
              <a href="books.php" class="btn btn-primary mb-1">View All Books</a>
              <div class="card">
                  <h3 class="card-title text-center mt-3">Add Book</h3>
                  <?php include_once VIEW_ROOT."/includes/alerts.inc.php" ?>
                  <div class="card-body">
                      <form method="POST">
                          <div class="form-group">
                              <label for="">Book Title</label>
                              <input type="text" name="title" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="">Book Author</label>
                              <input type="text" name="author" class="form-control">
                          </div>
                          <div class="form-group">
                              <button type="submit" name="addbook" class="btn btn-block btn-success">Add Book</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

