<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="../admin/dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Officers</li>
            </ol>
        </nav>
            <div>
                <div class="d-flex justify-content-between">
                    <a href="officers.php?clr=1" class="btn btn-danger mb-1">Back</a>
                    <button class="btn btn-dark mb-1" data-toggle="modal" data-target="#addOfficer">Add New Officer +
                    </button>
                </div>
                <?php include_once VIEW_ROOT . "includes/alerts.inc.php" ?>
                <div class="row">
                    <div class="col-12 offset-md-4 col-md-4">

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="table-info">
                            <tr>
                                <th>Officer Name</th>
                                <th>Officer Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($ctx['officers'] as $officer): ?>
                                <tr>
                                    <td>Mr. <?= $officer['fullname'] ?></td>
                                    <td><?= $officer['role'] ?></td>
                                    <td class="d-flex justify-content-center">
                                        <!-- <form action="add-office.php" method="POST">
                                      <input type="hidden" value="<?= $officer['id'] ?>" name="oid">
                                      <button type="submit" name="edit" class="btn btn-info btn-sm mr-2">Edit</button>
                                  </form> || -->
                                        <form method="POST">
                                            <input type="hidden" value="<?= $officer['id'] ?>" name="oid">
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                    name="delOffice" class="btn btn-danger btn-sm mr-2">
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
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addOfficer" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Officer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class=" form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="fname" class="form-control">
                    </div>

                    <div class=" form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Role:</label>
                        <select name="role" id="id" class="form-control">
                            <option value="librarian">Librarian</option>
                            <option value="accountant">Accountant</option>
                            <option value="it_directorate">IT directorate</option>
                            <option value="computer_lab">computer lab</option>
                            <option value="deen">Deen</option>
                            <option value="snr_mhall_tutor">Snr_mhall_tutor</option>
                            <option value="snr_fhall_tutor">Snr_fhall_tutor</option>
                            <option value="cmps_coach">cmps_coach</option>
                            <option value="phy_lab">Physics_lab</option>
                            <option value="bio_lab">Biology_lab</option>
                            <option value="chem_lab">chemistry_lab</option>
                        </select>
                    </div>
                    <!-- <div class=" form-group">
                        <label for="">Office</label>
                        <select name="office" id="" class="form-control">
                        </select>
                    </div> -->
                    <div class="form-group">
                        <input type="file" name="signature" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="addOfficer" class="btn btn-block btn-success">Add Officer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>