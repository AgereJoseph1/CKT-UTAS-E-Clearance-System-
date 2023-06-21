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
                <!-- Added new button for the option to upload .csv file -->
                <a href="#!" class="btn btn-primary mb-1">Upload .CSV</a>
                <div class="card">
                    <?php include_once VIEW_ROOT."includes/alerts.inc.php" ?>
                    <div class="card-body">
                        <form method="POST">
                            <div class=" form-group">
                                <label for="">Full Name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class=" form-group">
                                <label for="">Index Number:</label>
                                <input type="text" name="index_no" class="form-control">
                            </div>
                            <div class=" form-group">
                                <label for="">Programme:</label>
                                <input type="text" name="program" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label for="">department:</label>
                                    <select name="department" id="id" class="form-control">
                                        <option value="computer science">computer science</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Biology">Mathematics</option>
                                        <option value="Environmental Science">Environmental Science</option>
                                        <option value="other">Other</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="">Gender:</label>
                                <select name="gender" id="id" class="form-control">
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="addStudent" class="btn btn-block btn-success">Add Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>