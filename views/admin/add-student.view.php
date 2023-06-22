<div class="main-content">
    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="../snr_mh/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Student</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-12 offset-md-3 col-md-6">
                <a href="students.php" class="btn btn-primary mb-1">View All Students</a>
                <form method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <?php include_once VIEW_ROOT."includes/alerts.inc.php" ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="csv_file">Upload CSV</label>
                                <input type="file" name="csv_file" id="csv_file" class="form-control-file">
                            </div>
                            <div class=" form-group">
                                <label for="fname">Full Name</label>
                                <input type="text" name="fname" id="fname" class="form-control">
                            </div>
                            <div class=" form-group">
                                <label for="index_no">Index Number:</label>
                                <input type="text" name="index_no" id="index_no" class="form-control">
                            </div>
                            <div class=" form-group">
                                <label for="program">Programme:</label>
                                <input type="text" name="program" id="program" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="department">Department:</label>
                                <select name="department" id="department" class="form-control">
                                    <option value="computer science">Computer Science</option>
                                    <option value="biology">Biology</option>
                                    <option value="chemistry">Chemistry</option>
                                    <option value="physics">Physics</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="environmental science">Environmental Science</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="addStudent" class="btn btn-block btn-success">Add Student</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
