

  <div class="login__screen">
    <div class="login__wrapper">
        <div class="container">
            <h3 class='text-center text-white display-4 mt-5 mb-3'>E-Clearance</h3>
            <div class="row">
                <div class="col-12 col-md-5 offset-md-4">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link active" id="staff-tab" data-bs-toggle="tab" href="#staff-signin">Sign in as Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="student-tab" data-bs-toggle="tab" href="#student-signin">Sign in as Student</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="staff-signin">
                                    <form action="" method="POST">
                                        <h4 class="card-title text-center text-dark">Staff Sign In</h4>
                                        <p class="card-text text-center">Welcome Back!</p>
                                        <?php require_once VIEW_ROOT . "/includes/alerts.inc.php" ?>
                                        <div class="form-group mt-2">
                                            <label for="staff-email">Staff Email</label>
                                            <input type="email" class="form-control" name="semail" id="staff-email" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="staff-password">Staff Password</label>
                                            <input type="password" class="form-control" name="spwd" id="staff-password" placeholder="Enter your Password">
                                        </div>
                                        <div class="form-group mt-2 d-grid">
                                            <button type="submit" name="staffSignIn" class="btn btn-block login__btn">Grant Access</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="student-signin">
                                    <form action="" method="POST">
                                        <h4 class="card-title text-center text-dark">Student Sign In</h4>
                                        <p class="card-text text-center">Welcome Back!</p>
                                        <?php if (isset($_SESSION['lat'])) : ?>
                                            <div class="alert alert-<?= $_SESSION['lat'] ?> alert-dismissible fade show p-1" role="alert">
                                                <strong>Oops!</strong> <?= $_SESSION['lam'] ?>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php endif;
                                        unset($_SESSION['lat']) ?>
                                        <div class="form-group">
                                            <label for="student-id">Student ID</label>
                                            <input type="text" class="form-control" name="stid" id="student-id" placeholder="Enter Student ID">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="student-password">Student Password</label>
                                            <input type="password" class="form-control" name="spwd" id="student-password" placeholder="Enter your Password">
                                        </div>
                                        <div class="form-group mt-2 d-grid">
                                            <button type="submit" name="studentSignIn" class="btn btn-block login__btn">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
