<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="../admin/dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Students</li>
            </ol>
        </nav>
        <a href="add-student.php" class="btn btn-dark mb-1">Add New Student +</a>
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
                        <th>Commenced Clearance ?</th>
                        <th>Completed Clearance ?</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($ctx['students'] as $student): ?>
                        <tr>
                            <td><?= $student['fullname'] ?></td>
                            <td><?= $student['index_number'] ?></td>
                            <td><?= $student['clearance_started'] ? 'Yes' : 'No' ?></td>
                            <td><?= $student['clearance_completed'] ? 'Yes' : 'No' ?></td>


                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>