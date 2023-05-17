<div class="login__screen">

    <div class="login__wrapper">
        <div class="container">
            <h3 class='text-center text-white display-4 mt-5 mb-3'>Get Your Students Cleared Electronically</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center text-dark">Staff Sign In </h4>
                            <p class="card-text text-center">Welcome Back !</p>
                            <?php require_once VIEW_ROOT . "/includes/alerts.inc.php" ?>
                            <form action="" method="POST">
                                <div class="form-group mt-2">
                                    <label for="e">Staff Email</label>
                                    <input type="email" class="form-control" name="semail" id="e"
                                           aria-describedby="emailHelpId" placeholder="Enter your email">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="e">Staff Password</label>
                                    <input type="password" class="form-control" name="spwd" id="e"
                                           aria-describedby="emailHelpId" placeholder="Enter your Password">
                                </div>
                                <div class="form-group mt-2 d-grid">
                                    <button type="submit" name="staffSignIn" class="btn btn-block btn-info">Grant Access</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-0 col-md-4"></div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center text-dark">Student Sign In </h4>
                            <p class="card-text text-center">Welcome Back !</p>
                            <?php if (isset($_SESSION['lat'])) : ?>
                            <div class="alert alert-<?= $_SESSION['lat'] ?> alert-dismissible fade show p-1" role="alert">
                                  <strong>Opps!</strong> <?= $_SESSION['lam'] ?>
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; unset($_SESSION['lat']) ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="e">Student ID</label>
                                    <input type="text" class="form-control" name="stid" id="e"
                                           aria-describedby="emailHelpId" placeholder="Enter Student ID">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="e">Staff Password</label>
                                    <input type="password" class="form-control" name="spwd" id="e"
                                           aria-describedby="emailHelpId" placeholder="Enter your Password">
                                </div>
                                <div class="form-group mt-2 d-grid">
                                    <button type="submit" name="studentSignIn" class="btn btn-block btn-info">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

  </div>