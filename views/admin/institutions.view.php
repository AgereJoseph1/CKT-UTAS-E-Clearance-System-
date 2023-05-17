<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="../admin/dashboard.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Institutions</li>
      </ol>
    </nav>
      <button class="btn btn-dark mb-1" data-toggle="modal" data-target="#addInstitutionModal">
          Add New Institution +
      </button>
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
                        <th>Name</th>
                    <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($ctx['institutions'] as $institution): ?>
                            <tr>
                                <td><?= $institution['i_name'] ?></td>
                                <td class="d-flex justify-content-center">
                                  <form method="POST">
                                      <input type="hidden" value="<?= $institution['id'] ?>" name="iid">
                                      <button type="submit" onclick="return confirm('Are you sure?')" name="delInst" class="btn btn-danger btn-sm mr-2">
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
      <div class="modal fade" id="addInstitutionModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
           aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Add Institution</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form method="POST">
                          <div class="form-group">
                              <label for="in">Institution Name</label>
                              <input type="text" name="iname" id="in" class="form-control">
                          </div>
                          <div class="form-group">
                              <h5>Head Master Details</h5>
                          </div>
                          <div class="form-group">
                              <label for="ff">Full Name</label>
                              <input type="text" name="fname" id="ff" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="em">Email</label>
                              <input type="text" name="email" id="em" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="ph">Phone</label>
                              <input type="text" name="phn" id="ph" class="form-control">
                          </div>
                          <div class="form-group">
                              <button type="submit" name="saveInstitution" class="btn btn-block btn-info">Save Institution</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <!-- Modal -->

  </div>
</div>