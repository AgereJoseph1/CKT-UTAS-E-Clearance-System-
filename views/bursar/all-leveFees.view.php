
<div class="main-content">

<!-- content -->
<div class="container-fluid content-top-gap">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">All level Fees</li>
    </ol>
  </nav>
    <a href="add-fee.php" class="btn btn-dark mb-1">Add New Fees+</a>
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
                      <th>Level</th>
                      <th>Amount</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($ctx['Fees']  as $fee):?>
                          <tr>
                            <td><?=$fee['book_id']?></td>
                            <td><?=$fee['student_id']?></td>
                            <td class="d-flex justify-content-center">
                                <form action="add-fee.php" method="POST">
                                    <input type="hidden" value="<?= $fee['book_id'] ?>" name="bid">
                                    <input type="hidden" value="<?= $fee['student_id'] ?>" name="stid">
                                    <button type="submit" name="edit" class="btn btn-info btn-sm mr-2">Edit</button>
                                </form> ||
                                <form method="POST">
                                    <input type="hidden" value="<?= $record['id'] ?>" name="oid">
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