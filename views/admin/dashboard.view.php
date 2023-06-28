<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                <i class="fa fa-users text-info"> </i>
                <h3 class="text-primary number"><?= $ctx['officerCount'] ?></h3>
                <p class="stat-text">Officers</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="fa fa-user-circle text-primary"> </i>
                <h3 class="text-secondary number"><?= $ctx['studentcount'] ?></h3>
                <p class="stat-text">Students</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="fa fa-building text-info"> </i>
                <h3 class="text-info number"><?= $ctx['clearedStudentCount'] ?? 0 ?></h3>
                <p class="stat-text">cleared Students</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="fa fa-user-circle-o text-info"> </i>
                <h3 class="text-info number"><?= $ctx['unclearedStudentCount'] ?? 0 ?></h3>
                <p class="stat-text">uncleared Student</p>
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