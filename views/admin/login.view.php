<div class="main-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 offset-md-4 col-md-4">
                <div class="card" style="margin-top: 20vh">
                    <div class="card-body">
                        <h3 class="card-title text-center">Admin Login Portal</h3>
                        <?php include_once VIEW_ROOT . 'includes/alerts.inc.php' ?>
                        <form action="" method="POST">
                            <div class="form-group mt-2">
                                <label for="em">Username</label>
                                <input type="text" class="form-control" name="uname" id="em">
                            </div>
                            <div class="form-group mt-2">
                                <label for="pw">Password</label>
                                <input type="password" class="form-control" name="pwd" id="pw">
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" name="adminLogin" class="btn btn-success btn-block">Grant Access</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
