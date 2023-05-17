<div class="main-content">
    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="../admin/dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Students</li>
            </ol>
        </nav>
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
                            <th>Index Number</th>
                            <th>Current Clearance Status</th>
                            <th>Update Status</th>
                            <th>Remarks</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ctx['studentClearances'] as $studentClearance): ?>
                        <tr>
                            <td><?= $studentClearance['student']['fullname'] ?></td>
                            <td><?= $studentClearance['student']['index_number'] ?></td>
                            <td><?= $studentClearance['status'] ?></td>

                            <form method="post">
                                <input type="hidden" value="<?= $studentClearance['student_id'] ?>" name="sid">
                                <input type="hidden" value="<?= $studentClearance['id'] ?>" name="cid">
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" name="status">
                                            <option value="cleared">Cleared</option>
                                            <option value="not cleared">Not Cleared</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="remarks"
                                                placeholder="Enter your remarks">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <button type='submit' name='updateClearanceItem'
                                            class='btn btn-info'>Update</button>
                                    </div>
                                </td>
                            </form>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>