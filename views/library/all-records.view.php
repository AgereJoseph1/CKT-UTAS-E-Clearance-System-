
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Records</li>
      </ol>
    </nav>
      <a href="add-record.php" class="btn btn-dark mb-1">Add New record+</a>
      <div class="row">
          <div class="col-12 offset-md-4 col-md-4">
              <?php include_once VIEW_ROOT."includes/alerts.inc.php" ?>
          </div>
      </div>
      <div class="card">
          <div class="card-body">
              <table class="table table-bordered table-hover">
                  <thead class="table-info">
                    <tr>
                        <th>Book ID</th>
                        <th>Student ID</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($ctx['records']  as $record):?>
                            <tr>
                              <td><?=$record['book_id']?></td>
                              <td><?=$record['student_id']?></td>
                              <td class="d-flex justify-content-center">
                                  <form action="add-record.php" method="POST">
                                      <input type="hidden" value="<?= $record['book_id'] ?>" name="bid">
                                      <input type="hidden" value="<?= $record['student_id'] ?>" name="stid">
                                      <button type="submit" name="edit" class="btn btn-info btn-sm mr-2">Edit</button>
                                  </form> ||
                                  <form method="POST">
                                      <input type="hidden" value="<?= $record['id'] ?>" name="pk">
                                      <button type="submit" onclick="return confirm('Are you sure?')" name="delRecord" class="btn btn-danger btn-sm mr-2">
                                          Delete
                                      </button>
                                  </form>
                              </td>
                            </tr>
                   <?php endforeach ?>
                  </tbody>
              </table>
          </div>
      </div>  
  </div>
</div>