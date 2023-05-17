
<div class="main-content">

<!-- content -->
<div class="container-fluid content-top-gap">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">All Payments</li>
    </ol>
  </nav>
    <a href="add-payment.php" class="btn btn-dark mb-1">Add New Payment+</a>
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
                      <th>Student ID</th>
                      <th>Amount Paid</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($ctx['payments']  as $payment):?>
                          <tr>
                            <td><?=$payment['student_id']?></td>
                            <td><?=$payment['amount_paid']?></td>
                            <td class="d-flex justify-content-center">
                                <form action="add-payment.php" method="POST">
                                    <input type="hidden" value="<?= $payment['student_id'] ?>" name="bid">
                                    <input type="hidden" value="<?= $payment['amount_paid'] ?>" name="stid">
                                    <button type="submit" name="edit" class="btn btn-info btn-sm mr-2">Edit</button>
                                </form> ||
                                <form method="POST">
                                    <input type="hidden" value="<?= $payment['id'] ?>" name="oid">
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