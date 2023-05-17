
 
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add record</li>
      </ol>
    </nav>

      <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
              <a href="records.php" class="btn btn-primary mb-1">View All Records</a>
              <div class="card">
                  <h3 class="card-title text-center mt-3">Add Record</h3>
                  <?php include_once VIEW_ROOT."/includes/alerts.inc.php" ?>
                  <div class="card-body">
                      <form method="POST">
                      <div class=" form-group">
                              <label for="">Book ID</label>
                              <select name="bk" id="" class="form-control">
                                  <?php foreach ($ctx['books'] as $book): ?>
                                     <option value="<?= $book['id'] ?>"><?= $book['id'] ?></option>
                                  <?php endforeach; ?>
                              </select>
                          </div>
                          <!-- <div class="form-group">
                          <div class="form-group">
                              <label for="">Book ID</label>
                              <input type="text" name="bk" class="form-control">
                          </div> -->
                          <div class="form-group">
                              <label for="">Student ID</label>
                              <input type="text" name="std" class="form-control">
                          </div>
                          <div class="form-group">
                              <button type="submit" name="addR" class="btn btn-block btn-success">Add Record</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>

