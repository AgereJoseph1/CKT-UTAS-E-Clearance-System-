<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>GENERAL OVERVIEW</h1>
    </div>

    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">

                <h3 class="text-dark"><?= $ctx['bursar']['fullname']?></h3>
                <p class="stat-text">Officer Name:</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
              <i class="fa fa-users text-info"> </i>
                <h3 class="text-secondary number"><?= $ctx['studentCount'] ?></h3>
                <p class="stat-text">Student Count</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="fa fa-angle-double-up text-success"> </i>
                <h3 class="text-success number"><?= $ctx['clearedStudentCount'] ?></h3>
                <p class="stat-text">Cleared Students</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="fa fa-angle-double-down text-danger"> </i>
                <h3 class="text-danger number"><?= $ctx['notClearedStudentCount'] ?></h3>
                <p class="stat-text">Uncleared Students</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->

  </div>
  <!-- //content -->
</div>