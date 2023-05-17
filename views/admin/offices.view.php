<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Offices</li>
      </ol>
    </nav>

      <?php if (!isset($_SESSION['selectedInstitutionOfficeID'])) :?>
        <div class="row">
            <div class="col-12 offset-md-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Choose Institution</h4>
                        <form method="POST">
                            <label for="">Select Institution:</label>
                            <input type="text" list="institutions" name="instID" class="form-control">
                            <datalist id="institutions">
                                <?php foreach ($ctx['institutions'] as $institution): ?>
                                    <option value="<?= $institution['id'] ?>">
                                        <?= $institution['i_name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </datalist>

                            <div class="form-group mt-3">
                                <button type="submit" name="setInstitutionOfficesID" class="btn btn-block btn-secondary">Proceed</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      <?php else: ?>
      <div>
          <div class="d-flex justify-content-between">
              <a href="offices.php?clr=1" class="btn btn-danger btn-sm mb-1">Back</a>
              <button class="btn btn-dark mb-1" data-toggle="modal" data-target="#addOffice">Add New Office +</button>
          </div>
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
                        <th>PK</th>
                        <th>Office Name</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                        <?php foreach ($ctx['offices'] as $office): ?>
                            <tr>
                              <td><?= $office['id'] ?></td>
                              <td><?= $office['name'] ?></td>
                              <td class="d-flex justify-content-center">
                                  <form method="POST">
                                      <input type="hidden" value="<?= $office['id'] ?>" name="oid">
                                      <button type="submit" onclick="return confirm('Are you sure?')" name="delOffice" class="btn btn-danger btn-sm mr-2">
                                          Delete
                                      </button>
                                  </form>
                              </td>
                            </tr>
                        <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>
      </div>
      <?php endif; ?>

  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addOffice" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Office</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                      <div class="form-group">
                          <label for="">Office Name</label>
                          <input type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                          <button type="submit" name="addOffice" class="btn btn-block btn-success">Add Office</button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
</div>